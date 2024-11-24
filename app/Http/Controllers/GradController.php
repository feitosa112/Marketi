<?php

namespace App\Http\Controllers;

use App\Repositories\GradRepositoryClass;


use Illuminate\Http\Request;

class GradController extends Controller
{
    private $gradRepo;

    public function __construct(GradRepositoryClass $gradRepo){
        $this->gradRepo = $gradRepo;
    }

   public function sviGradovi(){
    $sviGradovi = $this->gradRepo->sviGradovi();
    return response()->json($sviGradovi);
   }
}
