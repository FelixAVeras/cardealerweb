<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'Brand',
        'Model',
        'Year',
        'Miles',
        'Plate',
        'Car_Image',
        'Price',
        'IsAvailable'
        //'IsReserved'
    ];
}
