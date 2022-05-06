<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playback;
use Illuminate\Support\Facades\DB;

class PlaybackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function destroy($id)
    {
        //
    }

    public function countPlaybacks(Request $request)
    {
    //   $tracksIds =  Playback::all()->count()->pluck('trackId')->toArray();
    $tracksIds = Playback::select('trackId', DB::raw('count(*) as total'))->groupBy('trackId')->get();
    return $tracksIds;
    }

    public function store(Request $request)
    {
        $playback = new Playback();
        $playback->trackId = $request->trackId;
        $playback->userId = $request->userId;
        $playback->agent = $request->agent;
        $playback->save();
    }

}

