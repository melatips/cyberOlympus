<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryArt extends Model
{
    protected $table 		= 'article_category';
    protected $primaryKey 	= 'id_article_category';

    public function getArticle(){
    	return $this->belongsToMany('App\Article','art_cat','id_article_category','id_article');
    	// belongsToMany('ModelCategory','tabel yang nampung n to n ','lokalKey','foreign key')
    }

    public function getArt(){
    	return $this->hasMany('App\ArtCat','id_article_category');
    }
}
