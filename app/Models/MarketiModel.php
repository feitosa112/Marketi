<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketiModel extends Model
{
    protected $table = 'market';

    protected $fillable = [
        'id',
        'naziv',
        'adresa',
        'broj_telefona',
        'grad_id',
    ];
    use HasFactory;

    public function market_u_gradu(){
        return $this->hasOne(GradModel::class,'id','grad_id');
    }

}
