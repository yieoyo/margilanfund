<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cemetery extends Model
{
    use HasFactory;

    protected $table = 'cemeteries';

    protected $fillable = [
        'country_id',
        'name',
        'slug',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($cemetery) {
            $cemetery->slug = Str::slug($cemetery->name, '-');
        });

        static::updating(function ($cemetery) {
            $cemetery->slug = Str::slug($cemetery->name, '-');
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
