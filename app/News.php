<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table='news';

    protected $fillable=['user_id','title','content','status','num_visit'];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag','tag_id','news_id','news_tag');
    }
}
