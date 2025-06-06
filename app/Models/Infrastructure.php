<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Infrastructure extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['title', 'image', 'description', 'status'];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute(){
            return asset('storage/'.$this->image);
    }
}
