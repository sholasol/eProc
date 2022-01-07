<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUsers extends Component
{
    public function render()
    {
        $users = User::orderBy('fname', 'ASC')->paginate(15);
        return view('livewire.admin.admin-users', ['users'=>$users])->layout('layouts.admin');
    }
}
