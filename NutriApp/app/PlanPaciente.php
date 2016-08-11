<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanPaciente extends Model
{
    protected $hidden=['id'];
    public $fillable = ['id_paciente', 'id_plan'];
    protected $table = 'planes_pacientes';
     public $timestamps= false;

}


