<?php

namespace App\Http\Controllers;

use App\Models\cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cours = cours::All();
        return view("crtl_1.eleve.index")->with("data", $Cours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("crtl_1.eleve.create")->with("type",$hkey);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function show(cours $cours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function edit(cours $cours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cours $cours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function destroy(cours $cours)
    {
        //
    }
}
