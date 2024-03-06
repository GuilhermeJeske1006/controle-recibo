<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany};

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'date',
        'user_id',
        'payer',
        'cpf_payer',
        'referent',
        'city',
        'sender',
        'cpf_sender',
        'phone_sender',
        'type_payment',
        'company_id',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function formatValue($value): string
    {
        return number_format($value, 2, ',', '.');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function checks(): HasMany
    {
        return $this->hasMany(Check::class);
    }

    public function pixs(): HasMany
    {
        return $this->hasMany(Pix::class);
    }

    public function bankTransfers(): HasMany
    {
        return $this->hasMany(BankTransfer::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
