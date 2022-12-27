<?php

namespace App\Http\Livewire\Procurement;

use Livewire\Component;

class ProcurementSidebar extends Component
{
    public function render()
    {
        return view('livewire.procurement.procurement-sidebar')->layout('layouts.admin');
    }
}
