<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeopleController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return response()->json(People::all());
        }
        return view('peoples.index', ['peoples' => People::all()]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'row' => 'nullable|string|max:255',
            'birth_date' => 'required|date',
            'death_date' => 'required|date',
            'gender' => 'required|in:male,female',
            'avatar' => 'required|string|max:255',
            'cemetery_id' => 'required|exists:cemeteries,id',
            'country_id' => 'required|exists:countries,id',
            'city_id' => 'required|exists:cities,id',
            'payment' => 'boolean',
            'status' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $people = People::create($request->all());
        return response()->json($people, 201);
    }

    public function show($id)
    {
        return response()->json(People::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'row' => 'nullable|string|max:255',
            'birth_date' => 'required|date',
            'death_date' => 'required|date',
            'gender' => 'required|in:male,female',
            'avatar' => 'required|string|max:255',
            'cemetery_id' => 'required|exists:cemeteries,id',
            'country_id' => 'required|exists:countries,id',
            'city_id' => 'required|exists:cities,id',
            'payment' => 'boolean',
            'status' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $people = People::findOrFail($id);
        $people->update($request->all());
        return response()->json($people, 200);
    }

    public function destroy($id)
    {
        $people = People::findOrFail($id);
        $people->delete();
        return response()->json(null, 204);
    }
}
