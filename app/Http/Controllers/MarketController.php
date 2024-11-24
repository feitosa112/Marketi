<?php

namespace App\Http\Controllers;

use App\Repositories\MarketRepositoryClass;
use Illuminate\Http\Request;

class MarketController extends Controller
{
   private $marketRepo;

   public function __construct(MarketRepositoryClass $marketrepo){
        $this->marketRepo = $marketrepo;
   }

   public function sviMarketi(){
        $sviMarketi = $this->marketRepo->sviMarketi();
        return response()->json($sviMarketi);
   }
}
