<?php

namespace App;

use App\Repositories\ShamsiTrait;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use ShamsiTrait;
    //
    protected $table='orders';

    protected $fillable=[
        'name','company','email','phone','fax','description','is_client','hear_about','respond','services','ip','country','city'
    ];
}
