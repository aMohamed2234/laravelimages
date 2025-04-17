<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'content', 'excerpt', 'meta_title', 'meta_description',
        'featured_image', 'blog_category_id', 'user_id', 'published', 'featured', 
        'views', 'read_time'
    ];

    protected $casts = [
        'published' => 'boolean',
        'featured' => 'boolean'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->read_time = self::calculateReadTime($post->content);
        });

        static::updating(function ($post) {
            $post->read_time = self::calculateReadTime($post->content);
        });
    }

    private static function calculateReadTime(string $content): int
    {
        $wordCount = str_word_count(strip_tags($content));
        return ceil($wordCount / 200); // Average reading speed: 200 words per minute
    }
}
