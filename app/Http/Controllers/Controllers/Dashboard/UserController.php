<?php

namespace App\Http\Controllers\dashboard;

use App\Role;
use App\User;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);

        $users = User::orderBy('surname', request('surname', 'asc'));
        if ($request->has('search')) {
            $users = $users->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('surname', 'like', '%' . request('search') . '%');
        }

        $users = $users->paginate(10);

        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);

        $roles = Role::get()->pluck('name', 'name');
        return view('dashboard.users.create', ['user' => new User(), 'roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $request->user()->authorizeRoles(['admin']);

        $user=User::create([
            'name' => $request['name'],
            'surname' => $request['surname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $user->roles()->attach(Role::where('name', 'user')->first());

        return back()->with('status', 'User have been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        $request->user()->authorizeRoles(['admin']);

        return view('dashboard.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        $request->user()->authorizeRoles(['admin']);

        $roles = Role::get()->pluck('name', 'name');
        return view('dashboard.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $request->user()->authorizeRoles(['admin']);

        $user->update([
            'name' => $request['name'],
            'surname' => $request['surname'],
            'email' => $request['email'],
        ]);

        $user->roles()->attach(Role::where('name', 'user')->first());

        return redirect()->back()->with('status', 'User have been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,  User $user)
    {
        $request->user()->authorizeRoles(['admin']);

        $user->delete();
        return back()->with('status', 'User have been deleted successfully');
    }

    public function export(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    
    
}
