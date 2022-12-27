<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class AdminVendorApproval extends Component
{
    public $fname;
    public $lname;
    public $approval; //utype
    public $remark;
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
    public $vend_id;
    public $user_id;

    public function mount($vend_id)
    {
        $dep = User::where('id', $vend_id)->first();
        $this->fname = $dep->fname;
        $this->lname = $dep->lname;
        $this->company_name = $dep->company;
        $this->company_phone = $dep->cphone;
        $this->company_email = $dep->cemail;
        $this->address = $dep->address;
        $this->user_id = $dep->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'approval' => ['required'],
            'password' => ['required'],
            'company_name' => ['required'],
            'company_phone' => ['required'],
            'company_email' => ['required'],
            'company_email' => ['required'],
            'address' => ['required']
        ]);
    }

    public function updVendor(){

        $this->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'approval' => ['required'],
            'password' => ['required'],
            'company_name' => ['required'],
            'company_phone' => ['required'],
            'company_email' => ['required'],
            'company_email' => ['required'],
            'address' => ['required']
        ]);

        $st="Approved";

        // $vend = User::find($this->vend_id);
        // $vend->status = $st;
        // $vend->save();

        // $this->dispatchBrowserEvent('success');

        User::where('id', $this->user_id)->update([
            'status' =>'Approved'
        ]);

        $this->dispatchBrowserEvent('success');

    }

    public function render()
    {
        return view('livewire.admin.admin-vendor-approval')->layout('layouts.admin');
    }
}
