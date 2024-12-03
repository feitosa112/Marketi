<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProizvodiModel extends Model
{
    protected $table = 'proizvod';

    protected $fillable = [
        'id',
        'naziv',
        'cijena',
        'opis',
        'market_id',
    ];

    use HasFactory;


}
