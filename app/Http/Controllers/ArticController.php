<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artic;

class ArticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artics = Artic::all();
        return view('artic.index')->with('artics', $artics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artics = new Artic();
        $artics -> id = $request -> get('id');
        $artics -> task = $request -> get('task');
        $artics -> description = $request -> get('description');
      

        $artics -> save();

        return redirect('/artic');
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
        $artic = Artic::find($id);
        return view('artic.edit')->with('artic', $artic);
    
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
        $artic = Artic::find($id);
        
        $artic -> task = $request -> get('task');
        $artic -> description = $request -> get('description');
       

        $artic -> save();

        return redirect('/artic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artic = Artic::find($id);
        $artic -> delete();
        return redirect('/artic');
    }
}
