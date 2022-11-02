<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrackingService;
use App\Models\TrackingServiceUser;
use App\Models\User;
use Illuminate\Support\Facades\DB;


use Symfony\Component\HttpFoundation\Response;

class TrackingServiceController extends Controller
{
    public function updateTrackingServices(Request $request) {
        
        if (TrackingServiceUser::where('user_id', $request->user_id)->where('tracking_service_id', $request->tracking_service_id )->exists()) {
           $service =TrackingServiceUser::where('user_id', $request->user_id)->where('tracking_service_id', $request->tracking_service_id )->first();
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
            $service =TrackingServiceUser::where('user_id', $request->user_id)->where('tracking_service_id', $request->tracking_service_id )->first();
        }
        
            
    
           
       
        return response()->json(['service' => $service]);
    }

    public function trackingServices(Request $request, $user_id) {
        $tracking = user::find($user_id)->trackingServices;
    
        return response()->json(['trackingServices' => $tracking]);
    }
}