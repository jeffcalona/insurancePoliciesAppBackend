<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CoberturaJuridica;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response; //Para dar las respuestas en un mejor formato

class CoberturaController extends Controller
{
    public function register(Request $request) {
        //valido los datos
        $validated = $request->validate([
            'plan' => 'required',
            'price' => 'required',
            'fullNameP' => 'required',
            'identificationP' => 'required',
            'directionP' => 'required',
            'phoneP' => 'required',
            'nitC' => 'required',
            'directionC' => 'required',
            'cityC' => 'required',
            'datePro' => 'nullable',
            'timePro' => 'nullable'
        ]);

        //'alta de la cobertura' -- los datos que voy a cargar de la cobertura, paciente y clinica para realizar el registro pero únicamente en el usuario q hizo el login
        $request->user()->coberturas()->create($validated);

        //respuesta
        return response($validated, Response::HTTP_CREATED);

    }

    public function cobertura(Request $request, $user_id) {
        
        $cobertura = CoberturaJuridica::where('user_id', $user_id)->get();
        
        return response()->json(['cobertura' => $cobertura]);
              
    }

    public function allCobertura(Request $request) {
        $coberturaJuridica = CoberturaJuridica::all();
        return response()->json(['coberturasJuridicas' => $coberturaJuridica]);
    }
}
