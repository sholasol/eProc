<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserProfiles extends Component
{
    public $uid;

    public function mount($uid) {
        $this->uid = $uid;
    }

    public function render()
    {
        $prof = User::find($this->uid);
        return view('livewire.user.user-profiles', ['prof'=>$prof])->layout('layouts.admin');
    }
}
