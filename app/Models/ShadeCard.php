<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShadeCard extends Model
{
    protected $guarded = ['id'];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute(){
            return asset('storage/'.$this->image);
    }
}
