<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowCat extends Model
{
    protected $table = 'show_cat';
    protected $primaryKey = 'show_cat_id';

    public function getShow(){
    	return $this->belongsTo('App\Showcase', 'showcase_list_id');
    }

    public function getCat(){
    	return $this->belongsTo('App\Category', 'category_id');
    }
}
