<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PaymentProof;
use App\Events\NewPaymentProofUploaded;

class PaymentProofController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Only allow images and PDFs up to 2MB
        ]);

        // Store the file in the 'proofs' folder inside storage/app/public
        $path = $request->file('proof')->store('proofs', 'public');

        // Save proof details in database
        $paymentProof = PaymentProof::create([
            'plan' => $request->input('plan'),
            'payment_method' => $request->input('payment_method'),
            'file_path' => $path,
            'status' => 'pending', // Default status when uploaded
        ]);
        

        // Trigger an event to notify the admin
        event(new NewPaymentProofUploaded($paymentProof));

        return back()->with('success', 'Payment proof uploaded successfully!');
    }
}

