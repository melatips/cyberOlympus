<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCat extends Model
{
    protected $table 		= 'blog_category';
    protected $primaryKey 	= 'id_blog_category';

    public function getArticle(){
    	return $this->belongsToMany('App\Article','blog_cat','id_blog_category','id_blog');
    	// belongsToMany('ModelCategory','tabel yang nampung n to n ','lokalKey','foreign key')
    }

    public function getArt(){
    	return $this->hasMany('App\ArticleXCat','id_blog_category');
    }
}
