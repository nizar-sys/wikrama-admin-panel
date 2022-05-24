<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiLink extends Model
{
    use HasFactory;
    protected $fillable = [
        'informasi_id',
        'title',
        'url',
        'status',
        'created_by',
        'updated_by',
        'deleted_at'
    ];
}
