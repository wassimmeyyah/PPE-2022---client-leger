<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = ["PRODRef", "PRODLibelle", "PRODDPrixUnitaire" ];
}