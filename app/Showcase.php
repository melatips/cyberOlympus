<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    protected $table 		= 'showcase_list';
    protected $primaryKey 	= 'showcase_list_id';

    public function getCategory(){
    	return $this->belongsToMany('App\Category','show_cat','showcase_list_id','category_id');
    }

    public function getCat(){
    	return $this->hasMany('App\ShowCat','showcase_list_id');
    }
}
