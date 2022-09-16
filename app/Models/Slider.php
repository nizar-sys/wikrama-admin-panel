<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'media',
        'position',
        'status'
    ];

    // make scope
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function getMediaAttribute()
    {
        $path = asset('/uploads/images/' . $this->attributes['media']);
        return $path;
    }
}
