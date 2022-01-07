<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminRequest extends Component

{
    public function render()
    {
        return view('livewire.admin.admin-request')->layout('layouts.admin');
    }
}
