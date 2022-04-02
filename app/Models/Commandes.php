<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'commandes';
    protected $primaryKey = 'COMRef';

    protected $keyType = 'int';
    public $incrementing = 'true';
    protected $connection = 'mysql';

    public $timestamps = false;
    
    protected $fillable = ["COMRef", "COMDate", "UTILCode" ];    
}