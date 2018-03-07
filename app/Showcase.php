<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    protected $table 		= 'showcase_list';
    protected $primaryKey 	= 'showcase_id';

    // public function getCategory(){
    // 	return $this->belongsToMany('App\Category','show_cat','showcase_list_id','showcase_list_id');
    // }

    public function getCategory(){
    	return $this->belongsTo('App\ShowCat');
    }
}
