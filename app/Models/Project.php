<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description', 'content', 'location', 'year', 'image_first', 'image_second', 'image_third', 'image_fourth',
        'token'
    ];
}