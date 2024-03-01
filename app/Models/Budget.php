<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'cnpj_client',
        'client',
        'date_budget',
        'description',
        'email_client',
        'phone_client',
        'status',
        'value_budget',
        'reference',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
