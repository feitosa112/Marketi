<?php

namespace App\Repositories;

use App\Models\MarketiModel;

class MarketRepositoryClass
{
    protected $marketiModel;

    public function __construct(MarketiModel $marketiModel)
    {
        $this->marketiModel = $marketiModel;
    }

    //FUNKCIJA ZA DOBIJANJE PODATAKA O SVIM MARKETIMA,UKLJUCUJUCI I PODATKE ZA GRAD U KOJEM SE MARKET NALAZI,PREKO FUNKCIJE "market_u_gradu" koja se nalazi u modelu MarketModel

    public function sviMarketi(){
        try {
            $marketi = MarketiModel::with(['market_u_gradu'])->get();
            if($marketi){
                return $marketi;
            }
        }catch(\Exception $e){
            return response()->json(['message' => 'Greska prilikom ucitavanja informacija o marketima'], 500);

        }
    }
}
