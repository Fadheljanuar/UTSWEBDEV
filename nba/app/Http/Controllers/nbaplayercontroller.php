<?php

namespace App\Http\Controllers;

use App\Models\nbaplayer;
use Illuminate\Http\Request;

class nbaplayercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbaplayer = nbaplayer::all();
        return view('nbaplayer.index', compact('nbaplayer'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nbaplayer = nbaplayer::all();
        return view('nbaplayer.AddPlayer', compact('nbaplayer'));
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
        $data = $request->validate([
            'Player_Name' => 'required|string',
            'Age' => 'required|string',
            'Position' => 'required|string',
            'Height' => 'required|string|unique:nbaplayer',
            'Weight' => 'required|string',
            'Nba_team' => 'required|select'
        ]);

        Rent::create([
            'id_nbaplayers' => $data['Player_Name'],
            'Age' => $data['Age'],
            'Position' => $data['Position'],
            'Height' => $data['Height'],
            'Weight' => $data['Weight'],
            'Nba_team' =>   $data['Nba_team'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nbaplayer  $nbaplayer
     * @return \Illuminate\Http\Response
     */
    public function show(nbaplayer $nbaplayer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nbaplayer  $nbaplayer
     * @return \Illuminate\Http\Response
     */
    public function edit(nbaplayer $nbaplayer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nbaplayer  $nbaplayer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nbaplayer $nbaplayer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nbaplayer  $nbaplayer
     * @return \Illuminate\Http\Response
     */
    public function destroy(nbaplayer $nbaplayer)
    {
        //
    }
}
