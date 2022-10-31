<?php

namespace App\Http\Controllers;

use App\Models\CoberturaJuridica;
use Illuminate\Http\Request;

class CoberturaController extends Controller
{
    public function index (){
       
        return view("cobertura/index");
    }
}
