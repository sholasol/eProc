<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;

class Profile extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;

    public function changePassword(UpdatesUserPasswords $updater)
    {
        // dd($updater);
        $updater->update(auth()->user(),[
            'current_password' => $this->current_password,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
        ]);
        $this->dispatchBrowserEvent('passUpdateSuccess');
    }

    public function render()
    {
        $pr = User::find(Auth::user()->id);
        $prdept = Department::where('id', $pr->department)->first(array('name'));
        return view('livewire.user.profile', ['pr'=>$pr, 'prdept'=>$prdept])->layout('layouts.admin');
    }
}
