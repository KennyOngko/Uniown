<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Schedule;

class History extends Model
{
    protected $fillable = [
        'user_id', 'schedule_id', 'result',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
