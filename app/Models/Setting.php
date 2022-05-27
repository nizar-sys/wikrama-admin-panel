<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'fb',
        'twt',
        'ig',
        'google',
        'linked',
        'yt',
        'site_title',
        'longitude_latitude',
        'address',
        'telp',
    ];
}
