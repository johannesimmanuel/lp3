<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManagementMember extends Model
{
    protected $fillable = [
        'name',
        'role',
        'role_id',
        'type', // commissioner | director
        'bio',
        'bio_id',
        'photo',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeCommissioners($query)
    {
        return $query->where('type', 'commissioner');
    }

    public function scopeDirectors($query)
    {
        return $query->where('type', 'director');
    }
}
