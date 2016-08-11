<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $hidden=['id'];
    public $fillable = ['desayuno', 'merienda_manana', 'almuerzo', 'merienda_tarde', 'cena'];
    protected $table = 'planes';
}


