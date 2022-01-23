<?php

namespace App\Http\Controllers;

use App\Models\PoliceAdministration;
use Illuminate\Http\Request;

class PoliceAdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $police_administrations = PoliceAdministration::all();
        return view('police_administrations.index', compact('police_administrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\PoliceAdministration  $police_Administration
     * @return \Illuminate\Http\Response
     */
    public function show(PoliceAdministration $police_Administration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PoliceAdministration  $police_Administration
     * @return \Illuminate\Http\Response
     */
    public function edit(PoliceAdministration $police_Administration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PoliceAdministration  $police_Administration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoliceAdministration $police_Administration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoliceAdministration  $police_Administration
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoliceAdministration $PoliceAdministration)
    {
        $PoliceAdministration->delete();
        return redirect()->back();
    }
}
