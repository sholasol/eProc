<?php

namespace App\Http\Livewire\HR;

use App\Models\Car;
use Livewire\Component;

class StatusCars extends Component
{
    public function render()
    {
        $statuscars = Car::where('type', 'status')->orderBy('status', 'asc')->paginate(15);
        return view('livewire.h-r.status-cars',['statuscars'=>$statuscars])->layout('layouts.admin');
    }
}
