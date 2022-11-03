<?php

namespace App\Http\Controllers;

use App\Models\CoberturaJuridica;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CoberturaController extends Controller
{
    public function index (){
       
        return view("cobertura/index");
    }

    public function edit (CoberturaJuridica $cobertura){
       
        return view("cobertura/edit", compact("cobertura"));
    }

    public function update(Request $request, CoberturaJuridica $cobertura)
    {
       
        $cobertura->fullNameP = $request->name;
        $cobertura->identificationP = $request->identificationP;
        $cobertura->plan = $request->plan;
        $cobertura->price = $request->price;
        $cobertura->phoneP = $request->phoneP;
        $cobertura->directionP = $request->directionP;
        $cobertura->nitC = $request->nitC;
        $cobertura->directionC = $request->directionC;
        $cobertura->cityC = $request->cityC;
        $cobertura->datePro = $request->datePro;
        $cobertura->timePro = $request->timePro;
        $cobertura->save();
        return to_route('users.index', $cobertura);  
    }

    public function create (){
       $users = User::all();
       $doctors = Doctor::all();
        return view("cobertura/create", compact('users', 'doctors'));
    }

    public function store (Request $request)
    {
        CoberturaJuridica::create([
           "fullNameP" => $request->name,
            "identificationP" => $request->identificationP,
            "plan" => $request->plan,
            "price" => $request->price,
            "phoneP" => $request->phoneP,
            "directionP" => $request->directionP,
            "nitC" => $request->nitC,
            "directionC" => $request->directionC,
            "cityC" => $request->cityC,
            "datePro" => $request->datePro,
            "timePro" => $request->timePro
        ]);
       
        return redirect("cobertura/index");
    }

    public function pdf(CoberturaJuridica $cobertura){

       
        $pdf = Pdf::loadView('cobertura.pdf', ["cobertura" =>$cobertura]);
        return $pdf->stream();
        
    }

    public function email(CoberturaJuridica $cobertura){

       
        
        return view("cobertura/email", compact("cobertura"));
        
    }
}
