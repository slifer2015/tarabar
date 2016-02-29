<?php

namespace App;

use App\Repositories\ShamsiTrait;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    use ShamsiTrait;

    protected $table='contacts';

    protected $fillable=['name','company','email','phone','description','ip'];
}
