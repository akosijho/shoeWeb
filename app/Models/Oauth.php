<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Oauth extends Model
{
    use HasFactory;
    protected $table = 'Oauths';
    protected $fillable = ['social_id','token','social_type'];

    public function user()
    {
         return $this->belongsTo(User::class);
    }
}

