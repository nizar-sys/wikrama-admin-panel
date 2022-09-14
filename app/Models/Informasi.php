<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'media', 'seq', 'status', 'created_by', 'updated_by', 'deleted_at'];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }

    public function scopeLastOrder($query)
    {
        return $query->orderBy('seq')->get('seq')->last()->seq ?? 0;
    }
}
