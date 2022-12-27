<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use App\Models\Department;
use App\Models\SalaryTemp;
use Livewire\WithFileUploads;

class EditUserProfiles extends Component
{
    use WithFileUploads;

    public $uid;

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


    public function mount($uid) {
        $this->uid = $uid;


        $usr = User::where('id',$this->uid)->first();

        $this->fname = $usr->fname;
        $this->lname = $usr->lname;
        $this->role = $usr->utype;
        $this->emptype = $usr->emptype;
        $this->salary = $usr->salary;
        $this->dob = $usr->dob;
        $this->phone = $usr->phone;
        $this->email = $usr->email;
        $this->department = $usr->department;
        $this->city = $usr->city;
        $this->country = $usr->country;
        $this->address = $usr->address;
        $this->gender = $usr->gender;
        $this->marital = $usr->marital;
        $this->qualification = $usr->qualification;
        // $this->address = $usr->address;

    }

    public function verifyCheck() {
        if (User::where('id',$this->uid)->exists()) {}
        else {return redirect()->to(url()->previous());}
    }

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
            'role' => ['required'],
            'emptype' => ['required']
        ]);
    }

    public function updateUser() {
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
            'role' => ['required'],
            'emptype' => ['required']
        ]);


    }

    public function render()
    {
        $this->verifyCheck();
        $depts = Department::all();
        $salaryTemp = SalaryTemp::all();
        return view('livewire.user.edit-user-profiles', ['depts'=>$depts, 'salaryTemp'=>$salaryTemp])->layout('layouts.admin');
    }
}
