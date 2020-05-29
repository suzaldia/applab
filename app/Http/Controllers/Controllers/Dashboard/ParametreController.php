<?php

namespace App\Http\Controllers\dashboard;

use App\Parametre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreParametreRequest;

class ParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);

        $parametres = Parametre::orderBy('name')->paginate(10);

        return view('dashboard.parametres.index', compact('parametres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.parametres.create', ['parametre' => new Parametre()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParametreRequest $request)
    {
        Parametre::create($request->validated());
        return redirect()->back()->with('status', 'Parametre have been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parametre  $parametre
     * @return \Illuminate\Http\Response
     */
    public function show(Parametre $parametre)
    {
        return view('dashboard.parametres.show', compact('parametre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parametre  $parametre
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Parametre $parametre)
    {
        $request->user()->authorizeRoles(['admin']);

        return view('dashboard.parametres.edit', compact('parametre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parametre  $parametre
     * @return \Illuminate\Http\Response
     */
    public function update(StoreParametreRequest $request, Parametre $parametre)
    {
        $request->user()->authorizeRoles(['admin']);

        $parametre->update($request->validated());
        return redirect()->back()->with('status', 'Parametre have been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parametre  $parametre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Parametre $parametre)
    {
        $request->user()->authorizeRoles(['admin']);

        $parametre->delete();
        return back()->with('status', 'Parametre have been deleted successfully');
    }
}
