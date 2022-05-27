<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualWikrama extends Model
{
    use HasFactory;
    protected $fillable = ['ecommerce', 'elearning', 'mini_movie', 'live_meeting', 'perpus'];
}
