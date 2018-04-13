<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagePost extends Model
{
    protected $table = 'image_post';
    protected $primaryKey = 'id_image';

    public function getUser(){
    	return $this->belongsTo('App\User', 'id_user');
    }
}
