<?php

namespace App\Http\Controllers;

use App\Models\nbateam;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class nbateamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $nbateam = nbateam::all();
        return view('nbateam.index', compact('nbateam'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nbateam = nbateam::all();
        return view('nbaplayer.addplayer', compact('nbateam'));
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
     * @param  \App\Models\nbateam  $nbateam
     * @return \Illuminate\Http\Response
     */
    public function show(nbateam $nbateam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nbateam  $nbateam
     * @return \Illuminate\Http\Response
     */
    public function edit(nbateam $nbateam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nbateam  $nbateam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nbateam $nbateam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nbateam  $nbateam
     * @return \Illuminate\Http\Response
     */
    public function destroy(nbateam $nbateam)
    {
        //
    }
}
