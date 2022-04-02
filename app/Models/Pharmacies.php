<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacies extends Model
{
    use HasFactory;

    protected $table = 'pharmacies';
    protected $primaryKey = 'PHARMACode';

    protected $keyType = 'string';
    public $incrementing = 'false';
    protected $connection = 'mysql';


    public $timestamps = false;
    
    protected $fillable = ["PHARMACode", "PHARMAVille", "PHARMAAdresse", "PHARMANumeroTelephone", "PHARMAMail" ];
}