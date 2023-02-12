<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumne extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "alumnes";
    protected $primaryKey = "idAlumne";
    protected $fillable =
        ["idAlumne",
        "name",
        "lastName",
        "DNI",
        "curs",
        "telefon",
        "email",
        "fent_practiques",
        "ruta"];

    public function user(){
        return $this->belongsTo(User::class, "idTutor", "idUsuari");
    }
    public function estudis(){
        return $this->belongsTo(Estudis::class, "idEstudis", "cicle");
    }
    public function oferta(){
        return $this->belongsToMany(Oferta::class, "enviament","idAlumne","idOferta")->withTimestamps();
    }
}
