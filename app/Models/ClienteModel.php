<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;
    protected $table = 'cliente';

    public function pasaje(){
        return $this->hasMany(PasajeModel::class);
    }
    

}
