<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Plan extends Model
{
    protected $hidden=['id'];
    public $fillable = ['nombre', 'desayuno', 'merienda_manana', 'almuerzo', 'merienda_tarde', 'cena'];
    protected $table = 'planes';

    public function getNombreGetIdPaciente()
    {
        $response = DB::table('planes')->select('id', 'nombre')->get();
        return $response;

    }
}


