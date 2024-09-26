<?php

use App\Models\Consultation;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('user_left', function ($user) {
    return true;
});

Broadcast::channel('receive_messages.{consultationId}', function ($user, $consultationId) {
    return Consultation::find($consultationId) && $user->canJoinConsultation($consultationId);
});
