<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use App\Models\Department;
use App\Models\SalaryTemp;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class AdminCreateUser extends Component
{
    use WithFileUploads;

    public $fname;
    public $lname;
    public $role; //utype
    public $emptype;
    public $salary;
    public $dob;
    public $phone;
    public $email;
    public $password;
    public $department;
    public $city;
    public $country;
    public $address;
    public $gender;
    public $marital;
    public $qualification;
    public $image;
    public $profile_photo_path;


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'address' => ['required'],
            'department' => ['required'],
            'gender' => ['required'],
            'marital' => ['required'],
            'qualification' => ['required'],
            'dob' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'password' => ['required'],
            'role' => ['required'],
            'emptype' => ['required']
        ]);
    }


    public function createUsr() {
        $this->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'address' => ['required'],
            'department' => ['required'],
            'gender' => ['required'],
            'marital' => ['required'],
            'qualification' => ['required'],
            'dob' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'password' => ['required'],
            'role' => ['required'],
            'emptype' => ['required']
        ]);

        //$pass = "user@123";
        $code = 'OM'. '-' . Str::random(7);

        $usr = new User();
        $usr->fname = $this->fname;
        $usr->lname = $this->lname;
        $usr->utype = $this->role;
        $usr->salary = $this->salary;
        $usr->emp_id = $code;
        $usr->phone = $this->phone;
        $usr->email = $this->email;
        $usr->city = $this->city;
        $usr->country = $this->country;
        $usr->dob = $this->dob;
        $usr->address = $this->address;
        $usr->gender = $this->gender;
        $usr->marital = $this->marital;
        $usr->qualification = $this->qualification;
        $usr->emptype = $this->emptype;
        $usr->department = $this->department;
        if ($this->image) {
            $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('users', $imageName);
            $usr->profile_photo_path  = $imageName;
        }
        $usr->password = Hash::make($this->password);
        $usr->save();


        $this->dispatchBrowserEvent('user-createsuccess');
    }



    public function render()
    {
        $depts = Department::all();
        $salaryTemp = SalaryTemp::all();
        return view('livewire.admin.admin-create-user', ['depts'=>$depts, 'salaryTemp'=>$salaryTemp])->layout('layouts.admin');
    }
}
