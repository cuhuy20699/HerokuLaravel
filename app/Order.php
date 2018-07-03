<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= 'orders';

    protected $fillable = ['UserId','product','price'];

//    public function usermenber(){
//        return $this->belongsTo('App\UserMember');
//    }
}
