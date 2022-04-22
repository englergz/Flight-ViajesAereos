<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasajeModel extends Model
{
    use HasFactory;
    protected $table = 'pasaje';
    public function cliente()
    {
    	return $this->belongsTo(ClienteModel::class,'id_cliente');
    }
    public function vuelo()
    {
    	return $this->belongsTo(VueloModel::class,'id_vuelo');
    }
}
