<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_company',
        'cnpj',
        'phone',
        'photo',
        'email',
        'description',
        'adress_id',
        'instagram',
        'slogan',
        'marca_dagua',
    ];

    public function adress()
    {
        return $this->belongsTo(Adress::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function receipt()
    {
        return $this->hasMany(Receipt::class);
    }

    public function budget()
    {
        return $this->hasMany(Budget::class);
    }
}
