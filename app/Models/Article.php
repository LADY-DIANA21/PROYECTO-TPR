<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{


    protected $table = 'Article';

    public function category(){
        return this->belongsTo('App\Category', 'category_id');
    }

    public function sale_invoives(){
        return this->hasmany('App\Sale_invoices');
    }


    public function shopping_invoives(){
        return this->hasmany('App\Shopping_invoices');
    }

    use HasFactory;
}
