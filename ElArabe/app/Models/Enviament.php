<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enviament extends Model
{
    use HasFactory;

    protected $table = "enviaments";
    protected $primaryKey = "idEnviaments";
    protected $fillable = ["idEnviaments", "Observacions", "Estat"];

    public static function addSelect(array $array)
    {
    }

}
