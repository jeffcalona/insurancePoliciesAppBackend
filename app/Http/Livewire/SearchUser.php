<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUser extends Component
{

     
    public $search;
   
    public $open= false;
    public function render()
    { 
        if ($this->search) {
        $users = User::where('name', 'like', '%' . $this->search . '%')->get();
                                     
        } 
        else {
            $users=[];
        }
        
        return view('livewire.search-user', compact('users'));
    }

    
    public function updatedSearch($value){
        if($value){
            $this->open = true;

        }else{
            $this->open =false;
        }

    }
}
