<?php

namespace App\Http\Controllers;

use App\testable;
use App\User;
use Illuminate\Http\Request;
use Validator;
class TestableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
        return User::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testable  $testable
     * @return \Illuminate\Http\Response
     */
    public function show($testable)
    {
        return User::find($testable);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testable  $testable
     * @return \Illuminate\Http\Response
     */
    public function edit(testable $testable)
    {
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testable  $testable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testable $testable)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testable  $testable
     * @return \Illuminate\Http\Response
     */
    public function destroy(testable $testable)
    {
        //
    }
}
