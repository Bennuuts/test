<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Measure;
use App\Http\Resources\MeasureResource;

class MeasureController extends Controller
{
    public function index()
    {
    
    $measure = new Measure();
    $measure->value = 10;
    $measure->description = "Co2";
    $measure->save();

    return new MeasureResource(Measure::find(1));
    return MeasureResource::collection(Measure::all());
    return MeasureResource::collection(Measure::paginate(3));

    }

    public function store(Request $request)
    {
        $measure = Measure::create($request->all());

        return response()->json($measure, 201);
    }

    public function show()
    {
        return MeasureResource::collection(Measure::all());

    }

    public function update(Request $request, Measure $measure)
    {
        $measure->update($request->all());

        return response()->json($measure, 200);
    }
        
    public function delete(Measure $measure)
    {
        $measure->delete();

        return response()->json(null, 204);
    }
}
