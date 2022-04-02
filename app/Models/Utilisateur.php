<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = 'utilisateurs';
    protected $primaryKey = 'UTILCode';

    protected $keyType = 'int';
    public $incrementing = 'true';
    protected $connection = 'mysql';

    public $timestamps = false;
    
    protected $fillable = ["UTILCode", "UTILIdentifiant", "UTILPassword", "UTILPharmacieSecteur" ];
}