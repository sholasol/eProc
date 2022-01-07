<?php

namespace App\Http\Livewire\Vendor;

use Livewire\Component;

class VendorDashboard extends Component
{
    public function render()
    {
        return view('livewire.vendor.vendor-dashboard')->layout('layouts.admin');
    }
}
