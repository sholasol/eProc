<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminReceipt extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-receipt')->layout('layouts.admin');
    }
}
