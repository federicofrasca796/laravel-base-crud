<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable=['title','description','thumb','price','series','date','type','artists','writers'];
}
