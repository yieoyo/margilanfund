<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $filable = 'peoples';

    protected $fillable = [
        'first_name', 'last_name', 'row', 'birth_date', 'death_date', 'gender', 'avatar',
        'cemetery_id', 'country_id', 'city_id', 'payment', 'status'
    ];

    public function cemetery()
    {
        return $this->belongsTo(Cemetery::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
