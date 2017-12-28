<?php

namespace App\Http\Controllers;

use App\found;
use Illuminate\Http\Request;

class FoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Found::all();
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
        $found = new Found();
        $found->product_name=$request->product_name;
        $found->product_category=$request->product_category;
        $found->founder_name=$request->founder_name;
        $found->founder_no=$request->founder_no;
        $found->save();
        return "created";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function show(found $found)
    {
        return new FoundResource($found);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function edit(found $found)
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
    public function update(Request $request, found $found)
    {
        $found->update($request->all());
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function destroy(found $found)
    {
        $found->delete();
        return "deleted";
    }
}
