<?php

namespace App\Http\Controllers;

use App\Repositories\MarketRepositoryClass;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    //povezivanje sa MarketRepositoryClass
   private $marketRepo;

   public function __construct(MarketRepositoryClass $marketrepo){
        $this->marketRepo = $marketrepo;
   }

   //funkcija koja vraca podatke o marketima,dobijene preko funkcije "sviMarketi" u MarketrepositoryClass
   public function sviMarketi(){
        $sviMarketi = $this->marketRepo->sviMarketi();
        return response()->json($sviMarketi);
   }
}
