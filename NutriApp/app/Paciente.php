<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $hidden=['id'];
    public $fillable = ['nombre', 'apellido', 'cedula', 'telefono', 'direccion', 'email', 'masa_corporal', 'peso', 'altura', 'edad',
    'masa_muscular', 'masa_osea'];
    protected $table = 'pacientes';
}

