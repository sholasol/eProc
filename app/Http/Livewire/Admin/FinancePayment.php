<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class FinancePayment extends Component
{
    public function render()
    {
        return view('livewire.admin.finance-payment')->layout('layouts.admin');
    }
}
