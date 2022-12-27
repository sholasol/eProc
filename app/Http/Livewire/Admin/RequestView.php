<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class RequestView extends Component
{
    public function approvalProcess($id)
    {
        // $project = Project::find($id);
        // $project->delete();
        $this->dispatchBrowserEvent('redirectDashboard');
    }


    public function render()
    {
        return view('livewire.admin.request-view')->layout('layouts.admin');
    }
}
