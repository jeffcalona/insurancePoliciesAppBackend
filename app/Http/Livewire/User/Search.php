<?php

namespace App\Http\Livewire\User;

use App\Models\User;
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
        $users = User::where('name', 'like', '%' . $this->search . '%') ->orWhere('email','like','%' .$this->search.'%')
        ->orderBy($this->sort,$this->direction)
        ->paginate($this->cant);
        return view('livewire.user.search', compact('users'));
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

    public function delete(User $user){
        $user->delete();
    }
}
