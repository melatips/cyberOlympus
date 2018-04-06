<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleXCat extends Model
{
    protected $table = 'blog_cat';
    protected $primaryKey = 'id_blog_cat';

    public function getArt(){
    	return $this->belongsTo('App\Article', 'id_blog');
    }

    public function getBlogCat(){
    	return $this->belongsTo('App\BlogCat', 'id_blog_category');
    }
}
