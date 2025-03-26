<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\PaymentProof;

class NewPaymentProofUploaded
{
    use Dispatchable, SerializesModels;

    public $paymentProof;

    public function __construct(PaymentProof $paymentProof)
    {
        $this->paymentProof = $paymentProof;
    }
}

