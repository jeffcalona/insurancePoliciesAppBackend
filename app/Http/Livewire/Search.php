<?php

namespace App\Http\Livewire;

use App\Models\CoberturaJuridica;
use Livewire\Component;
use Livewire\WithPagination;
class Search extends Component
{
    use WithPagination;
    public $search ="";
    public function render()
    {
        $coberturas = CoberturaJuridica::where('fullNameP', 'like', '%' . $this->search . '%')->paginate(10);
        return view('livewire.search', compact('coberturas'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
