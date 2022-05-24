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
    
}
