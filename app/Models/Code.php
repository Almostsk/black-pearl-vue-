<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $fillable = [
        'code_name', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
