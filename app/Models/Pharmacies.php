<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacies extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = ["PHARMACode", "PHARMAVille", "PHARMAAdresse", "PHARMANumeroTelephone", "PHARMAMail" ];
}