<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Machinery extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'machineries';

    protected $fillable = [
        'name',
        'description',
        'image',
        'status'
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute(){
            return asset('storage/'.$this->image);
    }
}
