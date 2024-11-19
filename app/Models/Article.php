<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillables = [
        'title',
        'introduction',
        'contenu',
        'datePublication',
        'image',
        'conclusion',
        'source',
    ];
}
