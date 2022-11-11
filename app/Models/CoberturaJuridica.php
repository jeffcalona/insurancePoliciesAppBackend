<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoberturaJuridica extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class); //Esto significa, un post pertenece a un usuario
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'cobertura_juridica_doctor');
    }

    protected $fillable = [
        'plan',
        'price',
        'fullNameP',
        'identificationP',
        'directionP',
        'phoneP',
        'nitC',
        'directionC',
        'cityC',
        'procedureTipe',
        'datePro',
        'timePro'
    ];

}
