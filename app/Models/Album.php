<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'media', 'status', 'created_by', 'updated_by', 'deleted_at'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_by = auth()->user()->id;
            $model->created_at = now();
        });

        static::updating(function ($model) {
            $model->updated_by = auth()->user()->id;
            $model->updated_at = now();
        });
    }
    
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
