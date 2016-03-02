<?php

namespace App\Repositories;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Morilog\Jalali\jDate;

trait ShamsiTrait
{
    public function getShamsiCreatedAtAttribute(){
        return jDate::forge($this->attributes['created_at'])->format('Y/m/d');
    }

}
