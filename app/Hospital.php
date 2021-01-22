<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedule;

class Hospital extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'image', 'name', 'location', 'test_type', 'price',
    ];

    public function schedule() {
        return $this->hasMany(Schedule::class);
    }
}
