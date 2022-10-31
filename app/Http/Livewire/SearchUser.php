<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUser extends Component
{
    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')->get();
        return view('livewire.search-user');
    }
}
