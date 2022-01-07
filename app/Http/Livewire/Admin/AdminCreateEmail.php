<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminCreateEmail extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-create-email')->layout('layouts.admin');
    }
}
