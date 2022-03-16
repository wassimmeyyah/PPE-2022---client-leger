<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lignecommande extends Model
{
    public $timestamps = false;
    
    protected $fillable = ["COMRef", "PRODRef", "Quantité" ];    
}