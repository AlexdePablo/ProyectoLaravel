<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudis extends Model
{
    use HasFactory;
    protected $table = "estudis";
    protected $primaryKey = "idEstudis";
    protected $fillable = ["idEstudis", "NomModul"];

    public function oferta(){
        return $this->hasMany(Oferta::class);
    }
    public function alumne(){
        return $this->hasMany(Alumne::class);
    }
}
