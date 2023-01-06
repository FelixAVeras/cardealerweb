<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'FirstName',
        'MiddleName',
        'LastName',
        'Address',
        'Phone',
        'Phone_alt',
        'Email',
        'DocumentNumber',
        'ProfileImage'
    ];
}
