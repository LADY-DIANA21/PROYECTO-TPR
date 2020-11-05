<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

    protected $table = 'Sale';

    public function sales(){
        return this->belongsTo('App\Sale', 'client_id');
    }


    public function personals(){
        return this->belongsTo('App\Personal', 'personal_id');
    }


    public function sales_invoices(){
        return this->hasmany('App\Sale_Invoice');
    }

    use HasFactory;
}
