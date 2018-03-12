<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table 		= 'showcase_category';
    protected $primaryKey 	= 'category_id';

    public function getShowcase(){
    	return $this->belongsToMany('App\Showcase','show_cat','category_id','showcase_list_id');
    	// belongsToMany('ModelCategory','tabel yang nampung n to n ','lokalKey','foreign key')
    }

    public function getShow(){
    	return $this->hasMany('App\ShowCat','category_id');
    }
}