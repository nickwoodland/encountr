<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Monster;

class MonstersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monsters = Monster::orderBy('name', 'desc')->get();
        return view('monsters/index')->with('monsters', $monsters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monsters/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
            $table->string('name');
            $table->smallInteger('init');
            $table->smallInteger('max_hp');
            $table->smallInteger('to_hit_melee');
            $table->smallInteger('to_hit_ranged');
            $table->smallInteger('to_hit_spell');
            $table->smallInteger('ac');
         */
        $monster = new Monster;
        $monster->name = $request->input('name');
        $monster->init = $request->input('init');
        $monster->max_hp = $request->input('max_hp');
        $monster->to_hit_melee = $request->input('to_hit_melee');
        $monster->to_hit_ranged = $request->input('to_hit_ranged');
        $monster->to_hit_spell = $request->input('to_hit_spell');
        $monster->ac = $request->input('ac');
        $monster->save();

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
    public function destroy(Monster $monster)
    {
        $monster->delete();

        flash('Your Monster has been deleted', 'success');

        return redirect('/');
    }
}
