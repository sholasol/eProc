<?php

namespace App\Http\Livewire\Transportation;

use Livewire\Component;

class TransportationSidebar extends Component
{
    public function render()
    {
        return view('livewire.transportation.transportation-sidebar')->layout('layouts.admin');
    }
}
