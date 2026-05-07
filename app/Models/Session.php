<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'user_sessions';

    protected $fillable = [
        'user_id',
        'device'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}