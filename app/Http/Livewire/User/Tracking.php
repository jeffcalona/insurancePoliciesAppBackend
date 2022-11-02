<?php

namespace App\Http\Livewire\User;

use App\Models\TrackingService;
use Livewire\Component;

class Tracking extends Component
{
    public function render()
    {
        return view('livewire.user.tracking');
    }
    public function delete(TrackingService $sure){
        $sure->delete();
    }
    public $sures;
    protected $listeners = ['render', 'delete'];
}
