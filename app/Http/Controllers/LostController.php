<?php

namespace App\Http\Controllers;

use App\lost;
use Illuminate\Http\Request;

class LostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Lost::all();
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
        $lost = new Lost();
        $lost->product_name=$request->product_name;
        $lost->product_category=$request->product_category;
        $lost->owner_name=$request->owner_name;
        $lost->owner_no=$request->owner_no;
        $lost->save();
        return "created";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function show(lost $lost)
    {
        return new LostResource($lost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function edit(lost $lost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lost $lost)
    {
        $lost->update($request->all());
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function destroy(lost $lost)
    {
        $lost->delete();
        return "deleted";
    }
}
