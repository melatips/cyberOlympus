<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtCat extends Model
{
    protected $table = 'art_cat';
    protected $primaryKey = 'id_art_cat';

    public function getArt(){
    	return $this->belongsTo('App\Article', 'id_article');
    }

    public function getCatArt(){
    	return $this->belongsTo('App\CategoryArt', 'id_article_category');
    }
}
