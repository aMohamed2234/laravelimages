<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'icon_class', 'color'
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(BlogPost::class);
    }
}
