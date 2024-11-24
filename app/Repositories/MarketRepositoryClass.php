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
