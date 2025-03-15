<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WalletController extends Controller
{
    // Deposit funds (store transaction in DB)
    public function deposit(Request $request)
    {
        $validated = $request->validate([
            'transactionHash' => 'required|string|unique:wallet_transactions,transaction_hash',
            'amount' => 'required|numeric|min:0.0001',
        ]);

        DB::table('wallet_transactions')->insert([
            'user_id' => Auth::id(),
            'transaction_hash' => $validated['transactionHash'],
            'type' => 'deposit',
            'amount' => $validated['amount'],
            'status' => 'completed',
            'created_at' => now(),
        ]);

        return response()->json(['message' => 'Deposit successful!']);
    }

    // Withdraw funds (store request for admin approval)
    public function requestWithdrawal(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0.0001',
        ]);

        DB::table('wallet_transactions')->insert([
            'user_id' => Auth::id(),
            'transaction_hash' => null,
            'type' => 'withdraw',
            'amount' => $validated['amount'],
            'status' => 'pending',
            'created_at' => now(),
        ]);

        return response()->json(['message' => 'Withdrawal request submitted.']);
    }

    // Approve withdrawal (Admin action)
    public function approveWithdrawal($id)
    {
        $transaction = DB::table('wallet_transactions')->where('id', $id)->first();

        if (!$transaction || $transaction->status !== 'pending') {
            return response()->json(['error' => 'Invalid transaction'], 400);
        }

        // Simulate sending crypto (manually process on MetaMask)
        DB::table('wallet_transactions')->where('id', $id)->update([
            'status' => 'completed',
            'transaction_hash' => '0x' . bin2hex(random_bytes(20)) // Fake hash for now
        ]);

        return response()->json(['message' => 'Withdrawal approved!']);
    }
}
