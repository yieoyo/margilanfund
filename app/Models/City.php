<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $filable = 'cities';
    
    protected $fillable = ['country_id', 'name', 'slug', 'status'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
