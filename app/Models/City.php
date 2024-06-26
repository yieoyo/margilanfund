<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';

    protected $fillable = [
        'country_id',
        'name',
        'slug',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($city) {
            $city->slug = Str::slug($city->name, '-');
        });

        static::updating(function ($city) {
            $city->slug = Str::slug($city->name, '-');
        });
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function peoples()
    {
        return $this->hasMany(People::class);
    }
}
