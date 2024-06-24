<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $filable = 'countries';
    protected $fillable = ['name', 'slug', 'default'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function cemeteries()
    {
        return $this->hasMany(Cemetery::class);
    }
}
