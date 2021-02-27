<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderlink extends Model
{
    protected $table = 'orders_link';
    protected $fillable  = [
        'orderno','orderdate','link','linkno',
        // 'orderNumber','product','firstname','lastname','email','shippinginformation','finalVaccinationDate','vaccine','res_code','password','image',
    ];
}
