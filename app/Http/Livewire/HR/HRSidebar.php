<?php

namespace App\Http\Livewire\HR;

use Livewire\Component;

class HRSidebar extends Component
{
    public function render()
    {
        return view('livewire.h-r.h-r-sidebar')->layout('layouts.admin');
    }
}
