<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'introduction',
        'contenu',
        'datePublication',
        'image',
        'conclusion',
        'source',
    ];

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

}
