<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return response()->json(Payment::all());
        }
        return view('payments.index', ['payments' => Payment::all()]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'candle_id' => 'required|exists:candles,id',
            'transactionid' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'status' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $payment = Payment::create($request->all());
        return response()->json($payment, 201);
    }

    public function show($id)
    {
        return response()->json(Payment::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'candle_id' => 'required|exists:candles,id',
            'transactionid' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'status' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $payment = Payment::findOrFail($id);
        $payment->update($request->all());
        return response()->json($payment, 200);
    }

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();
        return response()->json(null, 204);
    }
}
