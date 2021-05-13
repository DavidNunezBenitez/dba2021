<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Persona extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'personas';
    protected $primaryKey = 'pk_persona';
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'sexo',
        'fecha_nacimiento'
    ];
}
