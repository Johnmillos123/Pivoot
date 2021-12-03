<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novedades extends Model
{
    protected $table = "novedad";
    protected $primaryKey = "idNovedad";
    public $timestamps = false;

   public function User()
    {
        return $this->belongsTo('App\Models\User', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\user', 'idUsuarioFK');
    }

    public function Entrenamiento()
    {
        return $this->belongsTo('App\Models\entrenamiento', 'idEntrenamientoFK');
    }
}
