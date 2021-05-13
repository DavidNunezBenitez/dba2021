<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;
    protected $table = 'ubicaciones';
    protected $primaryKey = 'id_cp';
    protected $fillable = [
        'd_codigo',
        'd_acenta',
        'd_tipo_asenta',
        'd_mnpio',
        'd_estado',
        'd_ciudad'
    ];
}
