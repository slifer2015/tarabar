<?php

namespace App;

use App\Repositories\ShamsiTrait;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    use ShamsiTrait;
    protected $table='news';

    protected $fillable=['user_id','title','content','status','image','num_visit'];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag','news_tags','news_id','tags_id');
    }

    public function getAvatarAttribute(){ //get va Attribute baraye khode laravel ast
        if($this->attributes['image']){
            return $this->attributes['image'];
        }else {
            return 'default_news_avatar.jpg';
        }
    }
}
