<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Requestlist extends Component
{
    public function render()
    {
        return view('livewire.admin.requestlist')->layout('layouts.admin');
    }
}
