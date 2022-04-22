<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutaModel extends Model
{
    use HasFactory;
    protected $table = 'ruta';
    //protected $primaryKey = 'identificador';
    //public $timestamps = false;

    public function vuelo()
    {
    	return $this->hasMany(VueloModel::class);
    }
}
