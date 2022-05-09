<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playback;
use Illuminate\Support\Facades\DB;

class PlaybackController extends Controller
{


    public function countPlaybacks(Request $request)
    {
    //   $tracksIds =  Playback::all()->count()->pluck('trackId')->toArray();
    $tracksIds = Playback::select('trackId', DB::raw('count(*) as total'))->groupBy('trackId')->get();
    return response()->json([
        'data' => $tracksIds,
    ], status:201);
    }

    public function store(Request $request)
    {
        $playback = new Playback();
        $playback->trackId = $request->trackId;
        $playback->userId = $request->userId;
        $playback->agent = $request->agent;
        $playback->save();
        return response()->json([
            'message' => 'playback recorded'
        ], status:201);
    }

}

