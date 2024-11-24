<?php

namespace App\Repositories;

use App\Models\GradModel;

class GradRepositoryClass
{
    protected $gradModel;

    public function __construct(GradModel $gradModel)
    {
        $this->gradModel = $gradModel;
    }

    //funkcija za dobijanje informacija o gradovima koje imamo u bazi
    public function sviGradovi(){
        try {
            $sviGradovi = GradModel::all();
            if($sviGradovi){
                return $sviGradovi;
            }
        }catch(\Exception $e){
            return response()->json(['message' => 'Greska prilikom ucitavanja imena gradova'], 500);
        }
    }
}
