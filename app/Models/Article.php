<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'titre',
        'introduction',
        'contenu',
        'etiquette',
        'image',
        'conclusion',
        'category_id',
    ];
}
