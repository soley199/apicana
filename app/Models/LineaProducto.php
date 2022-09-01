<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaProducto extends Model
{
    use HasFactory;

    protected $fillable= [
        'linea',
        'img',
        'img2',
        'descripcion'
    ];
}
