<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table = "ville";
    protected $fillable = [
        'id',
        'ville',
        'region',
    ];
}
