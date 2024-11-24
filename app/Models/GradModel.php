<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradModel extends Model
{
    protected $table = "grad";

    protected $fillable = [
        'name',
    ];

    use HasFactory;

}
