<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pix extends Model
{
    use HasFactory;

    protected $table = 'pixs';

    protected $fillable = [
        'receiver',
        'bank',
        'key',
        'receipt_id',

    ];

    public function receipt(): BelongsTo
    {
        return $this->belongsTo(Receipt::class);
    }
}
