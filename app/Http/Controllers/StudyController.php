<?php

namespace App\Http\Controllers;

use \App\Models\Study;
use App\Http\Requests\StudyRequest;
use App\Models\Area;

class StudyController extends Controller
{
    /**
     * @var \App\Models\Study
     */
    protected $study;
    public function __construct(Study $study)
    {
        $this->study = $study;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = $this->study->all();
        return view('studies.index', compact('studies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area = new Area();
        $areas = $area->all();
        return view('studies.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StudyRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudyRequest $request)
    {
        $study = new Study();
        $study->fill($request->all());
        $study->save();

        return redirect()->route('studies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $study = $this->study->findOrFail($id);
        $area = new Area();
        $areas = $area->all();
        return view('studies.edit', compact('study'), compact('areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\StudyRequest;  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudyRequest $request, $id)
    {
        $study = $this->study->findOrFail($id);
        $study->fill($request->all());
        $study->save();
        return redirect()->route('studies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $study = $this->study->findOrFail($id);

        $study->delete();
        return redirect()->route('studies.index');
    }
}
