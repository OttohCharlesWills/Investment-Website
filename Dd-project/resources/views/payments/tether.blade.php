@extends('layouts.app')

@vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

@section('content')
    <h1>Selected Plan: {{ $plan ?? 'No Plan Selected' }}</h1>
    <h2>Payment Method: Bitcoin</h2>
    <p>Send your payment to the Bitcoin wallet address below:</p>
    <p><strong>Bitcoin Address:</strong> 3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5</p>

    <h3>Upload Proof of Payment</h3>
    <form action="{{ route('payment.proof') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="plan" value="{{ $plan }}">
        <input type="hidden" name="payment_method" value="bitcoin">

        <label for="proof">Upload Proof (screenshot or receipt):</label>
        <input type="file" name="proof" id="proof" required accept="image/*,application/pdf">
        
        <button type="submit">Submit</button>
    </form>
@endsection
