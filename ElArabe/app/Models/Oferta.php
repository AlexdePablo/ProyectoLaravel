<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $table = "ofertas";
    protected $primaryKey = "idOferta";
    protected $fillable = ["idOferta", "Descripció", "NombreVacants", "Curs", "NomContacte", "CognomsContacte", "EmailContacte"];

    public function empresa(){
        return $this->belongsTo(Empresa::class, "idEmpresa","idEmpresa" );
    }
    public function estudis(){
        return $this->belongsTo(Estudis::class, "idEstudis", "idEstudis" );
    }
    public function alumne(){
        return $this->belongsToMany(Alumne::class, "enviament","idOferta","idAlumne")->withTimestamps();
    }

}
