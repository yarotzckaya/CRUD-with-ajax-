<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Auto extends Model
{
    protected $fillable = [
        'name', 'brand', 'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
