<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function saveTransaction(Request $request)
    {
        $validated = $request->validate([
            'txHash' => 'required|string',
            'sender' => 'required|string',
            'amount' => 'required|string',
        ]);

        // Save transaction to database
        DB::table('transactions')->insert([
            'tx_hash' => $validated['txHash'],
            'sender' => $validated['sender'],
            'amount' => $validated['amount'],
            'created_at' => now(),
        ]);

        return response()->json(['message' => 'Transaction saved successfully!']);
    }
}
