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

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

}
