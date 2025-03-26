@extends('layouts.admin_app')
@vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
@section('admin_content')

@foreach($paymentProofs as $proof)
    <div>
        <p>Plan: {{ $proof->plan }}</p>
        <p>Payment Method: {{ $proof->payment_method }}</p>
        <p>Status: 
            <span style="color: {{ $proof->status === 'confirmed' ? 'green' : 'red' }};">
                {{ ucfirst($proof->status) }}
            </span>
        </p>

        {{-- Display proof image --}}
        @if($proof->file_path)
            <img src="{{ asset('storage/' . $proof->file_path) }}" alt="Payment Proof" width="200">
        @else
            <p>No proof uploaded</p>
        @endif

        {{-- Confirmation button --}}
        @if($proof->status !== 'confirmed')
            <form action="{{ route('admin.confirm-proof', $proof->id) }}" method="POST">
                @csrf
                @method('PUT')  <!-- This ensures the request is treated as PUT -->
                <button type="submit" class="btn btn-success">Confirm Payment</button>
            </form>
        @endif
    </div>
@endforeach



<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    var pusher = new Pusher('YOUR_PUSHER_KEY', {
        cluster: 'YOUR_CLUSTER'
    });

    var channel = pusher.subscribe('admin-notifications');
    channel.bind('App\\Events\\NewPaymentProofUploaded', function(data) {
        alert('New payment proof uploaded for: ' + data.paymentProof.plan);
        location.reload();
    });
</script>
@endsection