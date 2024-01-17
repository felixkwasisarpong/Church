<?php

namespace App\Http\Controllers;

use App\Financials;
use Illuminate\Http\Request;

class FinancialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('financials.index');
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
     * @param  \App\Financials  $financials
     * @return \Illuminate\Http\Response
     */
    public function show(Financials $financials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Financials  $financials
     * @return \Illuminate\Http\Response
     */
    public function edit(Financials $financials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Financials  $financials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Financials $financials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Financials  $financials
     * @return \Illuminate\Http\Response
     */
    public function destroy(Financials $financials)
    {
        //
    }
}
