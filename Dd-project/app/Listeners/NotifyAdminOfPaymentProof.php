<?php

namespace App\Listeners;

use App\Events\NewPaymentProofUploaded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Broadcast;

class NotifyAdminOfPaymentProof implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(NewPaymentProofUploaded $event)
    {
        // Notify the admin via broadcasting
        Broadcast::channel('admin-notifications', function () {
            return true;
        });

        Broadcast::event(new \App\Events\NewPaymentProofUploaded($event->paymentProof));
    }
}

