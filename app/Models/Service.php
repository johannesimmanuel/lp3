<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'slug',
        'category',
        'category_id',
        'title',
        'title_id',
        'tagline',
        'tagline_id',
        'image',
        'description',
        'description_id',
        'features',
        'features_id',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'features_id' => 'array',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
