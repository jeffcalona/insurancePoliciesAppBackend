<?php

namespace App\Http\Controllers;

use App\Models\TrackingService;
use Illuminate\Http\Request;

class TrackingServiceController extends Controller
{
    public function index()
    {
        
        return view("tracking/index");
    }

    public function edit(TrackingService $sure)
    {
        
        return view("tracking/edit", compact('sure'));
    }

    public function update(Request $request, TrackingService $sure)
    {
       
        $sure->nameU = $request->nameU;
        $sure->description = $request->description;
        $sure->price = $request->price;
       
        $sure->save();
        return to_route('tracking.index');  
    }
}
