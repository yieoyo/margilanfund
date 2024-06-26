<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';

    protected $fillable = [
        'name',
        'slug',
        'default'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($country) {
            $country->slug = Str::slug($country->name, '-');
        });

        static::updating(function ($country) {
            $country->slug = Str::slug($country->name, '-');
        });
    }
    
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function cemeteries()
    {
        return $this->hasMany(Cemetery::class);
    }

    public function peoples()
    {
        return $this->hasMany(People::class);
    }
}
