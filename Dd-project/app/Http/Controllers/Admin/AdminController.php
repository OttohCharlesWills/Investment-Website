<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\PaymentProof;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $users = User::where('role', 0)->count();
        $paymentProofs = PaymentProof::all(); // Fetch all payment proofs

        return view('admin.index', [
            'users' => $users,
            'paymentProofs' => $paymentProofs, // Pass payment proofs to the view
        ]);
    }

    public function confirmProof($id)
    {
        $proof = PaymentProof::findOrFail($id);
        $proof->status = 'confirmed'; // Change the status to confirmed
        $proof->save();

        return back()->with('success', 'Payment proof confirmed.');
    }

    public function users() {
        $users = User::where('role', 0)->get();

        return view('admin.users', [
            'users' => $users
        ]);
    }
}
