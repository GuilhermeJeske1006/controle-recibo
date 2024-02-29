<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'state',
        'street',
        'number',
        'complement',
        'cep',
        'neighborhood',
    ];

    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
