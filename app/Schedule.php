<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Hospital;
use App\History;

class Schedule extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'hospital_id', 'date', 'people'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function hospital() {
        return $this->belongsTo(Hospital::class);
    }

    public function history() {
        return $this->hasMany(History::class);
    }
}
