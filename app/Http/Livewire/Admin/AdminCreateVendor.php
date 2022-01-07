<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Department;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminCreateVendor extends Component
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
    public $company_name;
    public $company_phone;
    public $company_email;
    public $address;


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'role' => ['required'],
            'password' => ['required'],
            'company_name' => ['required'],
            'company_phone' => ['required'],
            'company_email' => ['required'],
            'company_email' => ['required'],
            'address' => ['required']
        ]);
    }


    public function createVen() {
        $this->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'role' => ['required'],
            'password' => ['required'],
            'company_name' => ['required'],
            'company_phone' => ['required'],
            'company_email' => ['required'],
            'company_email' => ['required'],
            'address' => ['required']
        ]);

        //$pass = "user@123";
        $dpt = "Vendor";
        $pw  = "password";
        $usr = new User();



        $usr->company = $this->company_name;
        $usr->cemail = $this->company_email;
        $usr->address = $this->address;
        $usr->cphone = $this->company_phone;


        $usr->fname = $this->fname;
        $usr->lname = $this->lname;
        $usr->utype = $this->role;
        $usr->phone = $this->phone;
        $usr->email = $this->company_email;
        $usr->department = $dpt;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('users', $imageName);
        $usr->profile_photo_path  = $imageName;
        $usr->password = Hash::make($this->password);
        $usr->save();


        $this->dispatchBrowserEvent('success');
    }


    public function render()
    {
        return view('livewire.admin.admin-create-vendor')->layout('layouts.admin');
    }
}
