<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['image', 'name', 'description', 'status'];

    protected $casts = [
        'status' => 'boolean',
    ];
} 