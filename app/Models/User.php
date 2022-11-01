<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public function coberturas() {
        return $this->hasMany(CoberturaJuridica::class); //Esto se lee -> un usuario puede tener muchas coberturas juridicas
    }
   

    public function trackingServices(){
        return $this->belongsToMany(User::class ,'tracking_service_user')
        ->withPivot('end', 'start', 'clickOnService','id')                
        ->withTimestamps();
    }

    protected $fillable = [
        'name',
        'identification',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password'
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
    //  * @var array<string, string>
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
