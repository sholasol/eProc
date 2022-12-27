<?php

namespace App\Http\Livewire\Procurement;

use Livewire\Component;

class AwaitingCarServiceSingle extends Component
{
    public function render()
    {
        return view('livewire.procurement.awaiting-car-service-single')->layout('layouts.admin');
    }
}
