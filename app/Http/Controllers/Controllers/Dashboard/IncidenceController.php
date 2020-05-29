<?php

namespace App\Http\Controllers\dashboard;

use App\User;
use App\Status;
use App\Category;
use App\Incidence;
use Illuminate\Http\Request;
use App\Exports\IncidencesExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreIncidenceRequest;
use App\Http\Requests\UpdateIncidenceRequest;

class IncidenceController extends Controller
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
        $request->user()->authorizeRoles(['admin', 'support']);

        $incidences = Incidence::orderBy('created_at', request('created_at', 'desc'));
        if ($request->has('search')) {
            $incidences = $incidences->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%');
        }

        $incidences = $incidences->paginate(10);

        return view('dashboard.incidences.index', compact('incidences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Category::pluck('id','name');
        
        return view('dashboard.incidences.create', ['incidence' => new Incidence(), 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncidenceRequest $request)
    {
        Incidence::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'user_id' => Auth::user()->id,
            'category_id' => $request->get('category_id'),
        ],
        $request->validated());
        return redirect()->back()->with('status', 'Incidence have been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Incidence  $incidence
     * @return \Illuminate\Http\Response
     */
    public function show(Incidence $incidence)
    {
        return view('dashboard.incidences.show', compact('incidence'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incidence  $incidence
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Incidence $incidence)
    {
        $request->user()->authorizeRoles(['admin', 'support']);

        $categories = Category::pluck('id','name');
        $users = User::pluck('id','name');
        return view('dashboard.incidences.edit', compact('incidence', 'categories', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incidence  $incidence
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIncidenceRequest $request, Incidence $incidence)
    {
        $request->user()->authorizeRoles(['admin', 'support']);

        $incidence->update($request->validated());
        return redirect()->back()->with('status', 'Incidence have been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incidence  $incidence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Incidence $incidence)
    {
        $request->user()->authorizeRoles(['admin', 'support']);
        
        $incidence->delete();
        return back()->with('status', 'Incidence have been deleted successfully');
    }

    public function assign(Incidence $incidence)
    {
        //
    }

    public function export(){
        return Excel::download(new IncidencesExport, 'incidences.xlsx');
    }
}
