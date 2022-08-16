<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joinus extends Model
{
    use HasFactory;
    protected $table = 'joinus';
    protected $fillable = [
        'email',
        'pass',
        'fname',
        'lname',
        'bday',
        'country',
        'gender'

    ];
}
