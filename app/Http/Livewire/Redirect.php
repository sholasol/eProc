<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Redirect extends Component
{
    public function verifyforCheckout()
    {
        if(Auth::user()->utype ==='ADM')
        {
            return redirect()->route('admin.dashboard');
        }
        elseif(Auth::user()->utype ==='USR')
        {
           return redirect()->route('user.dashboard');
        }
        elseif(Auth::user()->utype ==='PROC')
        {
            return redirect()->route('procurement.dashboard');
        }
        elseif(Auth::user()->utype ==='FIN')
        {
            return redirect()->route('finance.dashboard');
        }
        elseif(Auth::user()->utype ==='VEN')
        {
            return redirect()->route('vendor.dashboard');
        }
        elseif(Auth::user()->utype ==='HRM')
        {
            return redirect()->route('h-r.dashboard');
        }
        elseif(Auth::user()->utype ==='TRN')
        {
            return redirect()->route('transport.dashboard');
        }
    }



    public function render()
    {
        $this->verifyforCheckout();
        return view('livewire.redirect')->layout('layouts.admin');
    }
}
