<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SectorController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return response()->json(Sector::all());
        }
        return view('sectors.index', ['sectors' => Sector::all()]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'status' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $sector = Sector::create($request->all());
        return response()->json($sector, 201);
    }

    public function show($id)
    {
        return response()->json(Sector::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'status' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $sector = Sector::findOrFail($id);
        $sector->update($request->all());
        return response()->json($sector, 200);
    }

    public function destroy($id)
    {
        $sector = Sector::findOrFail($id);
        $sector->delete();
        return response()->json(null, 204);
    }
}
