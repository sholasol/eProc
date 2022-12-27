<?php

namespace App\Http\Livewire\Finance;

use Livewire\Component;

class FinanceSidebar extends Component
{
    public function render()
    {
        return view('livewire.finance.finance-sidebar')->layout('layouts.admin');
    }
}
