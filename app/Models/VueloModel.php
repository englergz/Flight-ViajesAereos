<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VueloModel extends Model
{
    use HasFactory;
    protected $table = 'vuelo';

    public function ruta()
    {
    	return $this->belongsTo(RutaModel::class, 'id_ruta');
    }
    public function pasaje(){
        return $this->hasMany(PasajeModel::class,'id');
    }
}
