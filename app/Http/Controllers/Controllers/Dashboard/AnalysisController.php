<?php

namespace App\Http\Controllers\dashboard;

use App\Sample;
use App\Analysis;
use Illuminate\Http\Request;
use App\Exports\AnalysesExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreAnalysisRequest;

class AnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Sample $sample)
    {
        $samples = Sample::all();

        $analyses = Analysis::orderBy('created_at', 'desc')
            ->where('sample_id', '=', $sample->id)
            ->paginate(10);

        return view('dashboard.analyses.index',
            ['analyses' => $analyses,
                'samples' => $samples,
                'sample' => $sample
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.analyses.create', ['analysis' => new Analysis()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnalysisRequest $request, Sample $sample)
    {
        Analysis::create([
            'result' => $request->get('result'),
            'observations' => $request->get('observations'),
            'user_id' => Auth::user()->id,
            'sample_id' => 1,
        ],
        $request->validated());
        return redirect()->back()->with('status', 'Analysis have been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Analysis  $analysis
     * @return \Illuminate\Http\Response
     */
    public function show(Analysis $analysis)
    {
        return view('dashboard.analyses.show', compact('analysis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Analysis $analysis
     * @return \Illuminate\Http\Response
     */
    public function edit(Analysis $analysis)
    {
        $samples = Sample::pluck('id','description');
        return view('dashboard.analyses.edit', compact('analysis', 'samples'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Analysis $analysis
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAnalysisRequest $request, Analysis $analysis)
    {
        $analysis->update($request->validated());
        return redirect()->back()->with('status', 'Analysis have been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Analysis  $analysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analysis $analysis)
    {
        $analysis->delete();
        return back()->with('status', 'Analysis have been deleted successfully');
    }

    public function export(){
        return Excel::download(new AnalysesExport, 'analyses.xlsx');
    }
}
