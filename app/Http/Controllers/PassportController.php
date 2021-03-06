<?php

namespace App\Http\Controllers;

use App\Models\Passport;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passports = Passport::all();
        return view('passports.index',['passports' => $passports]);
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
     * @param  \App\Models\Passport  $passport
     * @return \Illuminate\Http\Response
     */
    public function show(Passport $passport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Passport  $passport
     * @return \Illuminate\Http\Response
     */
    public function edit(Passport $passport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Passport  $passport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passport $passport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Passport  $passport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passport $passport)
    {
        $passport->delete();
        return redirect()->back();
    }
}
