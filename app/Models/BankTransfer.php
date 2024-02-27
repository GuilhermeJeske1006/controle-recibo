<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankTransfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank',
        'agency',
        'account',
        'receiver',
        'cpf_receiver',
        'date_transfer',
        'receipt_id',
    ];

    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }
}
