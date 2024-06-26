<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candle extends Model
{
    use HasFactory;

    protected $table = 'candles';

    protected $fillable = [
        'people_id',
        'message'
    ];

    public function people()
    {
        return $this->belongsTo(People::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
