<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = ['page_id', 'title', 'content', 'media', 'seq', 'status', 'created_by', 'updated_by', 'deleted_at', 'slug_title'];

    protected $appends = [
        'content_preview',
        'slug_title',
    ];

    public function sluggable(): array
    {
        return [
            'slug_title' => [
                'source' => 'title'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_by = auth()->id();
            $model->created_at = now();
        });

        static::updating(function ($model) {
            $model->updated_by = auth()->id();
            $model->updated_at = now();
        });
    }

    // make scope active
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id', 'id');
    }

    public function scopeLastOrder($query)
    {
        return $query->orderBy('seq')->get('seq')->last()->seq ?? 0;
    }

    public function getContentPreviewAttribute()
    {
        return str()->limit($this->attributes['content'], 20);
    }

    public function getSlugTitleAttribute()
    {
        return str()->slug($this->attributes['title']);
    }
}
