<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingServiceUser extends Model
{
    use HasFactory;
    protected $table ='tracking_service_user';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
