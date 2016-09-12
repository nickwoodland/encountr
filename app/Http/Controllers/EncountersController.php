<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Encounter;

use App\Character;

use App\Monster;

class EncountersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encounters = Encounter::orderBy('created_at', 'desc')->get();
        return view('encounters/index')->with('encounters', $encounters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pcs = Character::pluck('name', 'id');
        $npcs = Monster::pluck('name', 'id');
        return view('encounters/create')->with(array('pcs'=>$pcs,'npcs'=>$npcs));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->input('name'));
        $encounter = new Encounter;
        $encounter->name = $request->input('name');
        $encounter->round = 1;
        $encounter->conditions = json_encode($request->input('conditions'));
        $encounter->save();

        return redirect('/');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encounter $encounter)
    {
        $encounter->delete();

        flash('Your Encounter has been deleted', 'success');

        return redirect('/');
    }
}
