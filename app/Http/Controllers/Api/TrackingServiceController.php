<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrackingService;
use App\Models\TrackingServiceUser;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class TrackingServiceController extends Controller
{
    public function updateTrackingServices(Request $request) {
        $service = TrackingServiceUser::where('tracking_service_id', $request->tracking_service_id)
                                        ->where('user_id', $request->user_id)->first();
        if ($service) {
            $request->validate([
                'start' => 'required',
                'end' => 'required'
            ]);
            $service->end = $request->end;
            $service->start = $request->start;
            $service->clickOnService = $service->clickOnService + 1;
            $service->save();
        } else {
            $request->validate([
                'start' => 'required',
                'end' => 'required'
            ]);
            $user = User::find($request->user_id);
            $user->trackingServices()->attach([
                $request->tracking_service_id => [
                    'end' => $request->end,
                    'start' => $request->start 
                ]
                ]);
        }
        
            
    
           
       
        return response()->json(['service' => $service]);
    }

    public function trackingServices(Request $request, $user_id) {
        $tracking = TrackingService::where('user_id', $user_id)->get();
    
        return response()->json(['trackingServices' => $tracking]);
    }
}