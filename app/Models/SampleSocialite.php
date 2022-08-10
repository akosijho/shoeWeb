<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SampleSocialite extends Model
{
    use HasFactory;
     protected $table = 'sample_socialites';
     protected $fillable = [
        'email',
        'password',
        'provider_name',
        'provider_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
