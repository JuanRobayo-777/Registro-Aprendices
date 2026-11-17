<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    Use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'edad'
    ];
}
