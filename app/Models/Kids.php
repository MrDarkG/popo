<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\UserIdObserver;
class Kids extends Model
{
    use HasFactory;
    
    public static function boot() {
        parent::boot();
        parent::observe(new UserIdObserver);
    }
    protected $fillable=[
        "hobbie",
        "gender",
        "age",
        "user_id"
    ];
    
}
