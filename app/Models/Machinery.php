<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machinery extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['title', 'image', 'description', 'status'];
}
