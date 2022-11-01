<?php

namespace App\Http\Livewire;

use App\Models\CoberturaJuridica;
use Livewire\Component;
use Livewire\WithPagination;
class Search extends Component
{
    use WithPagination;
    use WithPagination;
    
  
    
    public $sort='id';
    public $direction='asc';
    public $open_edit=false;
    public $search ="";
    protected $listeners = ['render', 'delete'];
    public function render()
    {
        $coberturas = CoberturaJuridica::where('fullNameP', 'like', '%' . $this->search . '%') ->orWhere('plan','like','%' .$this->search.'%')
        ->orderBy($this->sort,$this->direction)
        ->paginate($this->cant);
        return view('livewire.search', compact('coberturas'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function order($sort){
        if($this->sort == $sort){
            if($this->direction=='desc'){
                $this->direction='asc';
            } else{
                $this->direction='desc';
            }
        } else{
            $this->sort = $sort;
            $this->direction='asc';
        }    
    }

    public $cant = '10';
    protected $queryString = [
        'cant' => ['except' => '10'],
        'sort'=> ['except' => 'id'],
        'direction'=> ['except' => 'asc'],
        'search' => ['except' => '']
    ];

    public function delete(CoberturaJuridica $cobertura){
        $cobertura->delete();
    }
}
