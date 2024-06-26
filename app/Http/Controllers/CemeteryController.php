<?php

namespace App\Http\Controllers;

use App\Models\Cemetery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CemeteryController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return response()->json(Cemetery::all());
        }
        return view('cemeteries.index', ['cemeteries' => Cemetery::all()]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string|max:255',
            'status' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $cemetery = Cemetery::create($request->all());
        return response()->json($cemetery, 201);
    }

    public function show($id)
    {
        return response()->json(Cemetery::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string|max:255',
            'status' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $cemetery = Cemetery::findOrFail($id);
        $cemetery->update($request->all());
        return response()->json($cemetery, 200);
    }

    public function destroy($id)
    {
        $cemetery = Cemetery::findOrFail($id);
        $cemetery->delete();
        return response()->json(null, 204);
    }
}
