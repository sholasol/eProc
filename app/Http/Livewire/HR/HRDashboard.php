<?php

namespace App\Http\Livewire\HR;

use DateTime;
use App\Models\User;
use App\Models\Request;
use Livewire\Component;
use App\Models\SalaryTemp;
use App\Models\PaymentActivity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;


class HRDashboard extends Component
{
    Use WithPagination;

    public function render()
    {

        
        $y = date('Y');
        $m = date('m');

        $datObj = DateTime::createFromFormat('!m', $m);

        $this->mv = $datObj->format('F');
        $this->yv = $y;


        //Total Last Salary
        $tot_sal = PaymentActivity::select( DB::Raw("SUM(net_salary) AS salary"))
        ->first();

        $sal_temps = SalaryTemp::all();

        $staff = User::where('utype', '!=', 'ADM')
        ->where('condition', '=', 'Active')
        ->count('id');

        $requests = Request::join('users', 'users.id', '=', 'requests.user_id' )
        ->where('requests.department', Auth::user()->department)
        ->where('dept_approval', '!=', 'Approved')
        ->distinct()->get(['requests.reqNo', 'requests.dept_approval', 'requests.created_at', 'users.fname', 'users.lname'])->take(5);

        $tables = PaymentActivity::join('users', 'users.id', 'payment_activities.employee_id')
                    ->join('departments', 'departments.id', 'users.department')
                    ->where('month', $m)->where('year', $y)
                    ->get(['payment_activities.*', 'users.fname', 'users.lname', 'users.profile_photo_path',
                            'departments.name as dept_name']);

        return view('livewire.h-r.h-r-dashboard',
        [
            'requests' =>$requests, 
            'sal_temps'=>$sal_temps,
            'tot_sal'  => $tot_sal,
            'staff'    =>$staff,
            'tables'   => $tables
        ]
            )->layout('layouts.admin');
    }
}
