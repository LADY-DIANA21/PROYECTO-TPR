<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'Category';

    public function articles(){
        return this->hasmany('App\Article', 'article_id');
    }

    use HasFactory;
}
