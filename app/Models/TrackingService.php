<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingService extends Model
{
    use HasFactory;

  

    public function users(){
        return $this->belongsToMany(User::class ,'tracking_service_user')
        ->withPivot('end', 'start', 'clickOnService')                
        ->withTimestamps();
    }

    protected $fillable = [
        'nameU',
        'logo',
        'description',
        'price'
        
    ];
}
