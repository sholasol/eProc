<?php

namespace App\Http\Livewire\HR;

use App\Models\Car;
use Livewire\Component;
use App\Models\CarRequest;
use Illuminate\Support\Facades\DB;

class VehicleAvailability extends Component
{

    public $date;

    public function render()
    {
        $cars = Car::where('type', 'pool')->orderBy('status', 'asc')->get();
        return view('livewire.h-r.vehicle-availability', ['availCars'=>$cars])->layout('layouts.admin');
    }
}
