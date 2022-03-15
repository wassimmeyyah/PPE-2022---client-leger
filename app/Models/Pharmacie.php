<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacie extends Model
{
    use HasFactory;

    protected $table = 'pharmacies';
    protected $primaryKey = 'PHARMACode';

    protected $keyType = 'string';
    public $incrementing = 'false';
    protected $connection = 'mysql';

    /**
     * @var mixed
     */

    private $pharmaVille;
    private $pharmaRue;
    private $pharmaNumeroRue;
    private $pharmaNumeroTelephone;
    private $pharmaMail;

}
