<?php

namespace App\Http\Livewire\HR;

use App\Models\Car;
use Livewire\Component;

class ManageCar extends Component
{

    public function deactVehicle($vid) {
        $quer = Car::where('id', $vid);
        if ($quer->exists()) {
            $up = $quer->first();
            if ($up->status == "Active") {
                $up->status = "Inactive";
            }else {
                $up->status = "Active";
            }
            $up->save();
            $this->dispatchBrowserEvent('car-success');
        }
    }

    public function deleteVehicle($vid) {
        $quer = Car::where('id', $vid);
        if ($quer->exists()) {
            $quer->delete();
            $this->dispatchBrowserEvent('car-success');
        }
    }

    public function render()
    {
        $vehicles = Car::paginate(15);
        return view('livewire.h-r.manage-car', ['vehicles'=>$vehicles])->layout('layouts.admin');
    }
}
