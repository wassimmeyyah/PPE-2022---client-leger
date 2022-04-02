<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'produits';
    protected $primaryKey = 'PRODRef';

    protected $keyType = 'int';
    public $incrementing = 'true';
    protected $connection = 'mysql';

    public $timestamps = false;
    
    protected $fillable = ["PRODRef", "PRODLibelle", "PRODPrixUnitaire" ];
}