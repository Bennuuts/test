<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\StartStopResource;
use App\StartStop;
class StartStopController extends Controller
{
    public function index()
    {
    
        $startstop = new StartStop();
        $startstop->start = true;
        $startstop->save();
        return $startstop;
    }

    public function start(Request $request)
    {
        $startstop = StartStop::create($request->all());
        return response()->json($startstop, 201);
    }
    public function show()
    {
        return StartStopResource::collection(StartStop::all());
    }

   

}
