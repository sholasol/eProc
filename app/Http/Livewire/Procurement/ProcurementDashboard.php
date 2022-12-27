<?php

namespace App\Http\Livewire\Procurement;

use Livewire\Component;
use App\Models\CarRequest;
use App\Models\MainRequest;
use App\Models\ServiceRequest;
use App\Models\User;
use App\Models\TravelExpense;
use Illuminate\Support\Facades\Auth;

class ProcurementDashboard extends Component
{
    public function render()
    {
        $staff = User::where('utype', '!=', 'ADM')->count('id');

        $vendor = User::where('utype', '=', 'VEN')->count('id');
        
        $total_car_request = CarRequest::where('dept_approval', '=', 'Approved')->count('id');

        $total_service_request = ServiceRequest::where('tran_approval', '=', 'Approved')->count('id');

        $purchase = MainRequest::where('dept_approval', '=', 'Approved')->count('id');

        $travel = TravelExpense::where('dept_approval', '=', 'Approved')->count('id');

        //total income
        // $totals = Sales::select( DB::Raw("SUM(total) AS total"))
        // ->first();

        $requests = MainRequest::where('main_requests.dept_approval', '=', 'Approved')
        ->orderBy('id', 'desc')
        ->take(8,
        array(
            'main_requests.department', 'main_requests.reqNo',
            'main_requests.created_at'
        ));

        $poolcars = CarRequest::where('car_requests.dept_approval', '=', 'Approved')->orderBy('id', 'desc')->get();

        // $requests = Request::select('reqNo', 'dept_approval', 'created_at')
        // ->where('department', Auth::user()->department)
        // ->distinct()->get();
        return view(
            'livewire.procurement.procurement-dashboard', 
            [
                'requests'=>$requests,
                'poolcars'=>$poolcars, 
                'staff'=>$staff, 
                'total_car_request'=>$total_car_request, 
                'total_service_request'=>$total_service_request, 
                'purchase'=>$purchase, 
                'travel'=>$travel, 
                'vendor'=>$vendor
                ]
            )->layout('layouts.admin');
    }
}
