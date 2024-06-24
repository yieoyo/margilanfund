<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $filable = 'settings';
    protected $fillable = ['name', 'logo', 'description', 'stripe_token'];
}
