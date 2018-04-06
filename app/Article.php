<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table 		= 'article';
    protected $primaryKey 	= 'id_article';

    //1 article punya banyak category
    public function getCategoryArt(){
    	return $this->belongsToMany('App\CategoryArt','art_cat','id_article_category','id_article');
    }

    //mengarah ke model ArtCat
    public function getCatArt(){
    	return $this->hasMany('App\ArtCat','id_article');
    }
}
