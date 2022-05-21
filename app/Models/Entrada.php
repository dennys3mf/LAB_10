<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = 'entradas';
    protected $fillable = ['titulo', 'descripcion', 'contenido', 'imagen', 'user_id'];
    protected $guarded = ['id'];
    protected $casts = [
        'user_id' => 'int',
    ];
}
