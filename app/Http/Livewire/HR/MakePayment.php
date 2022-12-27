<?php

namespace App\Http\Livewire\HR;

use DateTime;
use App\Models\User;
use Livewire\Component;
use App\Models\SalaryTemp;
use Illuminate\Support\Str;
use App\Models\PaymentActivity;
use Illuminate\Support\Facades\DB;

class MakePayment extends Component
{
    public $month;


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'month' => 'required'
        ]);
    }

    public function generatePayment()
    {
        $this->validate([
            'month' => 'required'
        ]);

        $yr = date('Y');
        $mon = $this->month;
        $code = Str::random(7);

        $check = PaymentActivity::where('month', $mon)
        ->where('year', $yr)->count();

        if($check < 1)
        {
            $emps = User::where('condition', '=', 'Active')
            ->where('utype', '!=', 'ADM')
            ->get(['users.id', 'users.salary']);
            // $emp = User::join('salary_temps', 'users.salary', '=', 'salary_temps.id')
            // ->where('condition', '=', 'Active')->get(['users.id']);
            $rrr = "";
            foreach($emps as $emp)
            {
                $sal =  $emp->salary;
                 $emp_id =  $emp->id;
                // $temp = SalaryTemp::where('id', $sal)->first(['uniqcode', 'amount', 'tax']);
                $temp = DB::select(DB::raw("select tax, amount, uniqcode,name,
                            (select sum(value) from allow_deducts where salary_temps.uniqcode = allow_deducts.temp_code and allow_deducts.type = 'Allowance') as allowance,
                            (select sum(value) from allow_deducts where salary_temps.uniqcode = allow_deducts.temp_code and allow_deducts.type = 'Deduction') as deduction
                            from salary_temps where id = '$sal'
                        "));
                        $temp = $temp[0];
                        $gross = $temp->amount+$temp->allowance;
                        $tax_val = ($temp->tax/100)*$temp->amount;
                        $grandDeduct = $temp->deduction + $tax_val;
                        $net = $gross-$grandDeduct;

                // dd($temp->amount,$temp->allowance,$gross);

                        $crePay = new PaymentActivity();
                        $crePay->employee_id = $emp_id;
                        $crePay->basic = $temp->amount;
                        $crePay->total_allowance = $temp->allowance;
                        $crePay->total_deduction = $temp->deduction;
                        $crePay->gross = $gross;
                        // $crePay->loan = $emp_id;
                        // $crePay->loan_payment = $emp_id;
                        $crePay->net_salary = $net;
                        $crePay->tax = $temp->tax;
                        $crePay->tax_value = $tax_val;
                        $crePay->grand_deduction = $grandDeduct;
                        $crePay->grade = $temp->name;
                        $crePay->code = $code;
                        $crePay->month = $mon;
                        $crePay->year = $yr;
                        $crePay->save();

            }
           $this->dispatchBrowserEvent('success-reload-redirect');

        }else{
            $this->dispatchBrowserEvent('payment-exists');
        }



    }

    public function render()
    {

        $cont = date('m');
        $avail_mons = array();
        for ($i=1; $i <= $cont; $i++) {
            $datObj = DateTime::createFromFormat('!m', $i);
            $mName = $datObj->format('F');
            array_push($avail_mons, ['month_name'=>$mName, 'month_num'=>$i]);
        }
        return view('livewire.h-r.make-payment', ['avail_mons'=>$avail_mons])->layout('layouts.admin');
    }
}
