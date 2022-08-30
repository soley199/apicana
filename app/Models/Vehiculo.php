<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'vehiculo',
        'modelo',
        'delantera',
        'dib',
        'trasera',
        'dib2'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
