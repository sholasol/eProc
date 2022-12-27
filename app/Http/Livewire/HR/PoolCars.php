<?php

namespace App\Http\Livewire\HR;

use App\Models\Car;
use Livewire\Component;

class PoolCars extends Component
{
    public function render()
    {
        $poolcars = Car::where('type', 'pool')->orderBy('status', 'asc')->paginate(15);
        return view('livewire.h-r.pool-cars',['poolcars'=>$poolcars])->layout('layouts.admin');
    }
}
