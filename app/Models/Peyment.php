<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $filable = 'payments';

    protected $fillable = ['candle_id', 'transactionid', 'amount', 'status'];

    public function candle()
    {
        return $this->belongsTo(Candle::class);
    }
}
