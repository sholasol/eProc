<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Department;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminCreateUser extends Component
{
    use WithFileUploads;

    public $fname;
    public $lname;
    public $role; //utype
    public $utype;
    public $phone;
    public $email;
    public $password;
    public $department;
    public $image;
    public $profile_photo_path;


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'department' => ['required'],
            'password' => ['required'],
            'role' => ['required']
        ]);
    }


    public function createUsr() {
        $this->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'department' => ['required'],
            'password' => ['required'],
            'role' => ['required']
        ]);

        //$pass = "user@123";

        $usr = new User();
        $usr->fname = $this->fname;
        $usr->lname = $this->lname;
        $usr->utype = $this->role;
        $usr->phone = $this->phone;
        $usr->email = $this->email;
        $usr->department = $this->department;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('users', $imageName);
        $usr->profile_photo_path  = $imageName;
        $usr->password = Hash::make($this->password);
        $usr->save();


        $this->dispatchBrowserEvent('success');
    }



    public function render()
    {
        $depts = Department::all();
        return view('livewire.admin.admin-create-user', ['depts'=>$depts])->layout('layouts.admin');
    }
}
