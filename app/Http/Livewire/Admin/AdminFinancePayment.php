<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminFinancePayment extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-finance-payment')->layout('layouts.admin');
    }
}
