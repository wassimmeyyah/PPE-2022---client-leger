<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employes extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = ["EMPLOYCode", "EMPLOYNom", "EMPLOYPrenom", "EMPLOYPoste", "EMPLOYMail", "EMPLOYTelephone", "EMPLOYPharmacie" ];

    public function pharmacie() {
        return $this->belongsTo(Pharmacies::class);
    }
}