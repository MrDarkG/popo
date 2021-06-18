<?php

namespace App\Observers;
use App\Models\Kids;
use Auth;
class UserIdObserver
{
    public function creating(Kids $model) {
        $this->user_id = Auth::user()->id;
    }
}
