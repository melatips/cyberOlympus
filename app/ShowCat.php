<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowCat extends Model
{
    protected $table = 'show_cat';
    protected $primaryKey = 'show_cat_id';

    public function getShow(){
    	return $this->hasMany('App\Showcase', 'showcase_list_id', 'id_show_cat');
    }

    public function getCat(){
    	return $this->hasMany('App\ShowCat', 'category_id', 'id_show_cat');
    }
}
