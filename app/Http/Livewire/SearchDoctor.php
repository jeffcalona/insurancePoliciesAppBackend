<?php

namespace App\Http\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class SearchDoctor extends Component
{
    public $search;
   
    public $open= false;
    public function render()
    { 
        if ($this->search) {
        $doctors = Doctor::where('name', 'like', '%' . $this->search . '%')->get();
                                     
        } 
        else {
            $doctors=[];
        }
        
        return view('livewire.search-doctor', compact('doctors'));
    }

    
    public function updatedSearch($value){
        if($value){
            $this->open = true;

        }else{
            $this->open =false;
        }

    }
}
