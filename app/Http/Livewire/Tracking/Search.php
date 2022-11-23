<?php

namespace App\Http\Livewire\Tracking;

use App\Models\TrackingService;
use Livewire\Component;
use Livewire\WithPagination;
class Search extends Component
{
    use WithPagination;
 
    
  
    
    public $sort='id';
    public $direction='asc';
    
    public $search ="";
    protected $listeners = ['render', 'delete'];
    public function render()
    {
        $sures = TrackingService::where('nameU', 'like', '%' . $this->search . '%') 
        ->orderBy($this->sort,$this->direction)
        ->paginate($this->cant);
        return view('livewire.tracking.search', compact('sures'));
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

    public function delete(TrackingService $sure){
        $sure->delete();
    }
}
