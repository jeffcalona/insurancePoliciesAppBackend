<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Symfony\Component\HttpFoundation\Response;

class DoctorController extends Controller
{
    public function allDoctors(Request $request) {
        $doctors = Doctor::all();
        return response()->json(['doctors' => $doctors]);
    }

    public function addDoctor(Request $request) {
        $validate = $request->validate([
            'name' => 'required',
            'identification' => 'required'
        ]);

        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->identification = $request->identification;
        $doctor->save();

        return response($doctor, Response::HTTP_CREATED);
    }

    public function oneDoctor(Request $request, $identification) {

        $doctor = Doctor::where('identification', $identification)->get();

        return response()->json(['doctor' => $doctor]);
    }
}
