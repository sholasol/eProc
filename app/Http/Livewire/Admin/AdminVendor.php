<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class AdminVendor extends Component
{
    public $vend_id;

    public function updateVen($vend_id)
    {
        User::where('id', $vend_id)->update([
            'status' =>'Approved'
        ]);

        $this->dispatchBrowserEvent('success');

    }

    public function declineVen($vend_id)
    {
        User::where('id', $vend_id)->update([
            'status' =>'Declined'
        ]);

        $this->dispatchBrowserEvent('success');

    }


    public function render()
    {
        $vends = User::where('department', 'Vendor')->get();
        return view('livewire.admin.admin-vendor', ['vends' =>$vends])->layout('layouts.admin');
    }
}
