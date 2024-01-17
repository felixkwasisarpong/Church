<?php

namespace App\Http\Controllers;

use App\cell;
use Illuminate\Http\Request;

class CellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCell()
    {
        return view('cell.addcell');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewCell()
    {
        return view('cell.viewcell');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addCellTopic(Request $request)
    {
        return view('cell.addcelltopic');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cell  $cell
     * @return \Illuminate\Http\Response
     */
    public function viewCellTopic(cell $cell)
    {
        return view('cell.viewcelltopic');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cell  $cell
     * @return \Illuminate\Http\Response
     */
    public function edit(cell $cell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cell  $cell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cell $cell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cell  $cell
     * @return \Illuminate\Http\Response
     */
    public function destroy(cell $cell)
    {
        //
    }
}
