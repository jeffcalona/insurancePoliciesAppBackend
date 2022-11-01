<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrackingService;
use Symfony\Component\HttpFoundation\Response;

class TrackingServiceController extends Controller
{
    public function updateTrackingServices(Request $request, $service) {
        $service = TrackingService::where('service', $service)->first();
        if ($service == null) {
            $validated = $request->validate([
                'nameU' => 'required',
                'service' => 'required'
            ]);
    
            $request->user()->trackingServices()->create($validated);
    
            return response($validated, Response::HTTP_CREATED);
        }
        $service->clickOnService = $service->clickOnService + 1;
        $service->save();
        return response()->json(['service' => $service]);
    }

    public function trackingServices(Request $request, $user_id) {
        $tracking = TrackingService::where('user_id', $user_id)->get();
    
        return response()->json(['trackingServices' => $tracking]);
    }
}