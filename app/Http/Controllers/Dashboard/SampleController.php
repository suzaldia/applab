<?php

namespace App\Http\Controllers\dashboard;

use App\Type;
use App\Sample;
use App\Parametre;
use Illuminate\Http\Request;
use App\Exports\SamplesExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreSampleRequest;
use App\Http\Requests\UpdateSampleRequest;

class SampleController extends Controller
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
        $samples = Sample::orderBy('created_at', request('created_at', 'desc'));
        if ($request->has('search')) {
            $samples = $samples->where('description', 'like', '%' . request('search') . '%');
        }

        $samples = $samples->paginate(10);

        return view('dashboard.samples.index', compact('samples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $types = Type::pluck('id','name');
        $parametres = Parametre::pluck('id','name');

        return view('dashboard.samples.create', ['sample' => new Sample(), 'types' => $types], ['parametre' => new Parametre(), 'parametres' => $parametres] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSampleRequest $request)
    {
        Sample::create($request->validated());
        return redirect()->back()->with('status', 'Sample have been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function show(Sample $sample)
    {
        return view('dashboard.samples.show', compact('sample'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function edit(Sample $sample)
    {
        
        $types = Type::pluck('id','name');
        $parametres = Parametre::pluck('id','name');
        
        return view('dashboard.samples.edit', compact('sample', 'types', 'parametres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSampleRequest $request, Sample $sample)
    {
        $sample->update($request->validated());
        return redirect()->back()->with('status', 'Sample have been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Sample $sample)
    {
        $request->user()->authorizeRoles(['admin']);

        $sample->delete();
        return back()->with('status', 'Sample have been deleted successfully');
    }

    public function export(){
        return Excel::download(new SamplesExport, 'samples.xlsx');
    }

}
