<?php

namespace App\Http\Controllers;

use App\Gpfadvance;
use Illuminate\Http\Request;

class GpfadvancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gpfadvances = Gpfadvance::all();
        return view('gpfadvances.index',compact('gpfadvances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Gpfadvances = Gpfadvance::all();
        return view('gpfadvances.index',compact('Gpfadvances'));
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
     * @param  \App\Gpfadvance  $gpfadvance
     * @return \Illuminate\Http\Response
     */
    public function show(Gpfadvance $gpfadvance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gpfadvance  $gpfadvance
     * @return \Illuminate\Http\Response
     */
    public function edit(Gpfadvance $gpfadvance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gpfadvance  $gpfadvance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gpfadvance $gpfadvance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gpfadvance  $gpfadvance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gpfadvance $gpfadvance)
    {
        //
    }
}
