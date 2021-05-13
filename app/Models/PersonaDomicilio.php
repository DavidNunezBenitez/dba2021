<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaDomicilio extends Model
{
    use HasFactory;
    protected $table='domicilio_personas';
    protected $primaryKey = 'pk_personaDom';
    protected $fillable = ['calle','no_ext','no_int','fk_persona','fk_cp'];
}
