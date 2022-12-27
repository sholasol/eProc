<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminSidebar extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-sidebar')->layout('layouts.admin');
    }
}
