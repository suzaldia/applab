<?php

namespace App\Http\Controllers\dashboard;

use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeRequest;

class TypeController extends Controller
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

        $types = Type::orderBy('created_at')->paginate(10);

        return view('dashboard.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.types.create', ['type' => new Type()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeRequest $request)
    {
        $request->user()->authorizeRoles(['admin']);

        Type::create($request->validated());
        return redirect()->back()->with('status', 'Type of sample have been created successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Type $type)
    {
        $request->user()->authorizeRoles(['admin']);

        return view('dashboard.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type $type
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTypeRequest $request, Type $type)
    {
        $request->user()->authorizeRoles(['admin']);

        $type->update($request->validated());
        return redirect()->back()->with('status', 'Type have been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Type $type)
    {
        $request->user()->authorizeRoles(['admin']);

        $type->delete();
        return back()->with('status', 'Type have been deleted successfully');
    }
}
