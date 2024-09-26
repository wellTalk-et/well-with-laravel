<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('user_left', function ($user) {
    return true;
});
