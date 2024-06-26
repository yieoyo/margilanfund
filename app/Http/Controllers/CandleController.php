<?php

namespace App\Http\Controllers;

use App\Models\Candle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CandleController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return response()->json(Candle::all());
        }
        return view('candles.index', ['candles' => Candle::all()]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'people_id' => 'required|exists:peoples,id',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $candle = Candle::create($request->all());
        return response()->json($candle, 201);
    }

    public function show($id)
    {
        return response()->json(Candle::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'people_id' => 'required|exists:peoples,id',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $candle = Candle::findOrFail($id);
        $candle->update($request->all());
        return response()->json($candle, 200);
    }

    public function destroy($id)
    {
        $candle = Candle::findOrFail($id);
        $candle->delete();
        return response()->json(null, 204);
    }
}
