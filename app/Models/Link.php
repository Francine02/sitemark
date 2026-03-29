<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'title',
        'url',
        'stream_plataform',
        'image',
        'position'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
