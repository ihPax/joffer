<?php

namespace App\Http\Controllers;

use App\Models\Offerta;
use Illuminate\Http\Request;

class OffertaController extends Controller
{

    public function list() {
        return Offerta::all();
    }

    public function view($id) {
        return Offerta::find($id);
    }

    public function AddOfferta(Request $request){
        $newOffertaData = json_decode($request->getContent());
        $newOfferta = new Offerta();
        $newOfferta -> linguaggio = $newOffertaData->linguaggio;
        $newOfferta -> nomeazienda = $newOffertaData->nomeazienda;
        $newOfferta -> icon_linguaggio =$newOffertaData->icon_linguaggio;
        $newOfferta -> ral = $newOffertaData->ral;
        $newOfferta -> experience = $newOffertaData->experience;
        $newOfferta -> location = $newOffertaData->location;
        $newOfferta -> description = $newOffertaData->description;
        $newOfferta -> save();
        return $newOffertaData;
    }
}
