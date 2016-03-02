<?php

namespace App;

use App\Repositories\ShamsiTrait;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    use ShamsiTrait;
    protected $table='links';

    protected $fillable=['name','description','url','status'];
}
