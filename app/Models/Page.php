<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'link',
        'media',
        'content',
        'seq',
        'seo_key',
        'seo_desc',
        'status',
    ];

    protected $appends = [
        'slug_title',
        'child_posts'
    ];

    // scope active
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'page_id', 'id');
    }

    // scope count posts
    public function scopeCountPosts($query)
    {
        return $this->posts()->count();
    }

    public function scopeLastOrder($query)
    {
        return $query->orderBy('seq')->get('seq')->last()->seq ?? 0;
    }

    public function getSlugTitleAttribute()
    {
        return str()->slug($this->attributes['title']);
    }

    public function getChildPostsAttribute()
    {
        return $this->posts()->where('status', 1)->get(['title', 'content']);
    }
    
}
