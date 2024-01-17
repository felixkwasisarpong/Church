<?php

namespace App\Http\Controllers;

use App\BibleStudy;
use Illuminate\Http\Request;

class BibleStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewTopics()
    {
        return view('Bible-Study.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addTopics()
    {
        return view('Bible-Study.add');
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
     * @param  \App\BibleStudy  $bibleStudy
     * @return \Illuminate\Http\Response
     */
    public function show(BibleStudy $bibleStudy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BibleStudy  $bibleStudy
     * @return \Illuminate\Http\Response
     */
    public function edit(BibleStudy $bibleStudy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BibleStudy  $bibleStudy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BibleStudy $bibleStudy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BibleStudy  $bibleStudy
     * @return \Illuminate\Http\Response
     */
    public function destroy(BibleStudy $bibleStudy)
    {
        //
    }
}
