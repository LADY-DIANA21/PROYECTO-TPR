<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{


    protected $table = 'Personal';

    public function positions(){
        return this->belongsTo('App\Position', 'position_id');
    }

    public function users(){
        return this->belongsTo('App\User', 'user_id');
    }

    public function sales(){
        return this->hasmany('App\Sale');
    }


    public function shoppings(){
        return this->hasmany('App\Shopping');
    }


    use HasFactory;
}