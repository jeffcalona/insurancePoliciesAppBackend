<?php

namespace App\Http\Livewire\User;

use App\Models\CoberturaJuridica;
use Livewire\Component;

class Cobertura extends Component
{
    public $coberturas;
    protected $listeners = ['render', 'delete'];
    public function render()
    {
        return view('livewire.user.cobertura');
    }
    public function delete(CoberturaJuridica $cobertura){
        $cobertura->delete();
    }
}
