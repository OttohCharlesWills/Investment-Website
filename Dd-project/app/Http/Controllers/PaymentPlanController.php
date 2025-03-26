<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentPlanController extends Controller
{
    public function showPaymentPage($method, Request $request)
    {
        $plan = $request->query('plan', 'No Plan Selected'); // Get plan from URL
        $view = "payments.$method"; // Dynamically load the correct view

        if (!view()->exists($view)) {
            abort(404); // If the view doesn't exist, show 404 page
        }

        return view($view, compact('plan'));
    }
}



