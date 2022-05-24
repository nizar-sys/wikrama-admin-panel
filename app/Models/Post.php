<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['page_id', 'title', 'content', 'media', 'seq', 'status', 'created_by', 'updated_by', 'deleted_at'];

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
}
