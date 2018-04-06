<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table 		= 'blog';
    protected $primaryKey 	= 'id_blog';

    public function getBlogCategory(){
    	return $this->belongsToMany('App\BlogCat','blog_cat','id_blog_category','id_blog');
    }

    public function getBlogCat(){
    	return $this->hasMany('App\ArticleXCat','id_blog');
    }
}
