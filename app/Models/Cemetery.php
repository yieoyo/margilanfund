<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cemetery extends Model
{
    use HasFactory;

    protected $filable = 'cemeteries';

    protected $fillable = ['country_id', 'name', 'slug', 'status'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
