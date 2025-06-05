<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['name', 'title', 'description', 'image', 'category_id', 'slug'];

    protected $casts = [
        'image' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($product) {
            if (!$product->slug) {
                $product->slug = Str::slug($product->name);
            }
        });

        static::updating(function ($product) {
            if ($product->isDirty('name')) {
                $product->slug = Str::slug($product->name);
            }
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
} 