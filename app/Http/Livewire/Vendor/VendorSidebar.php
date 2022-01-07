<?php

namespace App\Http\Livewire\Vendor;

use Livewire\Component;

class VendorSidebar extends Component
{
    public function render()
    {
        return view('livewire.vendor.vendor-sidebar')->layout('layouts.admin');
    }
}
