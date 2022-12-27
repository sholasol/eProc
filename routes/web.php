<?php

use App\Http\Livewire\Redirect;
use App\Http\Livewire\HR\ViewCar;
use App\Http\Livewire\VendorPage;
use App\Http\Livewire\HR\PoolCars;
use App\Http\Livewire\HR\CreateCar;
use App\Http\Livewire\HR\ManageCar;
use App\Http\Livewire\User\Profile;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\HR\StatusCars;
use App\Http\Livewire\HR\HRDashboard;
use App\Http\Livewire\HR\MakePayment;
use App\Http\Livewire\User\UserEmail;
use App\Http\Livewire\Vendor\RFQList;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminEmail;
use App\Http\Livewire\Admin\AdminUsers;
use App\Http\Livewire\HR\HRViewRequest;
use App\Http\Livewire\User\CreateEmail;
use App\Http\Livewire\Admin\AdminClaims;
use App\Http\Livewire\Admin\AdminVendor;
use App\Http\Livewire\Admin\Requestlist;
use App\Http\Livewire\Admin\RequestView;
use App\Http\Livewire\HR\SalaryTemplate;
use App\Http\Livewire\User\UserProfiles;
use App\Http\Livewire\User\UserRequests;
use App\Http\Livewire\Vendor\RFQDetails;
use App\Http\Livewire\Admin\AdminFinance;
use App\Http\Livewire\Admin\AdminReceipt;
use App\Http\Livewire\Admin\AdminRequest;
use App\Http\Livewire\Admin\AdvisorUsers;
use App\Http\Livewire\Admin\ApprovalView;
use App\Http\Livewire\HR\MonthlySchedule;
use App\Http\Livewire\User\ReceivedOrder;
use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\VendorRegistration;
use App\Http\Livewire\Admin\ContractUsers;
use App\Http\Livewire\Admin\InactiveUsers;
use App\Http\Livewire\HR\HRRequestDetails;
use App\Http\Livewire\HR\NewTravelExpense;
use App\Http\Livewire\User\CreateRequests;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\FinancePayment;
use App\Http\Livewire\HR\TravelExpenseList;
use App\Http\Livewire\User\ServiceRequests;
use App\Http\Livewire\User\UserViewRequest;
use App\Http\Livewire\Admin\AdminCreateDept;
use App\Http\Livewire\Admin\AdminCreateUser;
use App\Http\Livewire\Admin\AdminDepartment;
use App\Http\Livewire\HR\GenerateCommission;
use App\Http\Livewire\Procurement\SelectRFQ;
use App\Http\Livewire\User\EditUserProfiles;
use App\Http\Livewire\Admin\AdminCreateEmail;
use App\Http\Livewire\Admin\AdminUserRequest;
use App\Http\Livewire\HR\VehicleAvailability;
use App\Http\Livewire\Procurement\VendorList;
use App\Http\Livewire\User\UserTravelExpense;
use App\Http\Livewire\Vendor\PurchaseInvoice;
use App\Http\Livewire\Vendor\VendorDashboard;
use App\Http\Livewire\Admin\AdminClaimProcess;
use App\Http\Livewire\Admin\AdminCreateVendor;
use App\Http\Livewire\Admin\ApprovalLimitList;
use App\Http\Livewire\HR\CreateSalaryTemplate;
use App\Http\Livewire\Procurement\ViewRequest;
use App\Http\Livewire\User\DeptCarRequestList;
use App\Http\Livewire\User\UserCarRequestList;
use App\Http\Livewire\Admin\AdminApprovalLimit;
use App\Http\Livewire\Admin\AdminCreateRequest;
use App\Http\Livewire\Finance\FinanceDashboard;
use App\Http\Livewire\HR\SalaryTemplateDetails;
use App\Http\Livewire\Procurement\CreateVendor;
use App\Http\Livewire\Procurement\DeptApproved;
use App\Http\Livewire\Admin\AdminFinancePayment;
use App\Http\Livewire\Admin\AdminFinanceRequest;
use App\Http\Livewire\Admin\AdminRequestDetails;
use App\Http\Livewire\Admin\AdminVendorApproval;
use App\Http\Livewire\User\DeptCarRequestSingle;
use App\Http\Livewire\User\UserCarRequestSingle;
use App\Http\Livewire\Admin\AdminFinanceApproval;
use App\Http\Livewire\Procurement\ApproveRequest;
use App\Http\Livewire\Procurement\ProcurementRFQ;
use App\Http\Livewire\User\UserViewTravelExpense;
use App\Http\Livewire\Finance\FinanceDeptApproved;
use App\Http\Livewire\User\PurchaseRequestDetails;
use App\Http\Livewire\Procurement\AwaitingApproval;
use App\Http\Livewire\User\CarServiceRequestSingle;
use App\Http\Livewire\Procurement\AwaitingCarService;
use App\Http\Livewire\Procurement\ProcurementViewRFQ;
use App\Http\Livewire\Finance\FinanceAwaitingApproval;
use App\Http\Livewire\Finance\FinAwaitingTravelExpense;
use App\Http\Livewire\Procurement\ProcurementCreateRFQ;
use App\Http\Livewire\Procurement\ProcurementDashboard;
use App\Http\Livewire\User\DepartmentTravelRequestList;
use App\Http\Livewire\Procurement\AwaitingTravelExpense;
use App\Http\Livewire\Procurement\ApprovedCarRequestList;
use App\Http\Livewire\Procurement\ProcurementViewRequest;
use App\Http\Livewire\User\DepartmentTravelRequestAction;
use App\Http\Livewire\Procurement\ApprovedCarRequestSingle;
use App\Http\Livewire\Procurement\AwaitingCarServiceSingle;
use App\Http\Livewire\Finance\FinAwaitingTravelExpenseSingle;
use App\Http\Livewire\Transportation\TransportationDashboard;
use App\Http\Livewire\Procurement\AwaitingTravelExpenseSingle;
use App\Http\Livewire\Transportation\TranAwaitingRequestsList;
use App\Http\Livewire\Transportation\TranAwaitingRequestsAction;
use App\Http\Livewire\Procurement\RequestList as ProcRequestList;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', HomeComponent::class)->name('home');
Route::get('/home', HomeComponent::class)->name('home');
Route::get('/redirect', Redirect::class)->name('redirect');
Route::get('/vendor-registration', VendorRegistration::class)->name('vendor-registration');
Route::get('/vendor-page', VendorPage::class)->name('vendor-page');//VendorPage


//Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin/create-vendor', AdminCreateVendor::class)->name('admin.create-vendor');
    Route::get('/admin/admin-vendors', AdminVendor::class)->name('admin.admin-vendors');

    Route::get('/admin/admin-rfq', AdminRequest::class)->name('admin.admin-rfq');
    Route::get('/admin/user-request', AdminUserRequest::class)->name('admin.user-request');
    Route::get('/admin/create-request', AdminCreateRequest::class)->name('admin.create-request');
    Route::get('/admin/finance-request', AdminFinanceRequest::class)->name('admin.finance-request');
    Route::get('/admin/finance', AdminFinance::class)->name('admin.finance');
    Route::get('/admin/finance-approval', AdminFinanceApproval::class)->name('admin.finance-approval');
    Route::get('/admin/finance-payment', AdminFinancePayment::class)->name('admin.finance-payment');
    Route::get('/admin/claim-process', AdminClaimProcess::class)->name('admin.claim-process');
    Route::get('/admin/admin-claims', AdminClaims::class)->name('admin.admin-claims');
    Route::get('/admin/admin-allrequest', Requestlist::class)->name('admin.admin-allrequest');
    Route::get('/admin/admin-viewrequest', RequestView::class)->name('admin.admin-viewrequest');
    Route::get('/admin/admin-viewapproval', ApprovalView::class)->name('admin.admin-viewapproval');
    Route::get('/admin/admin-finpayment', FinancePayment::class)->name('admin.admin-finpayment');
    Route::get('/admin/admin-receipt', AdminReceipt::class)->name('admin.admin-receipt');
    Route::get('/admin/vendor-approval/{vend_id}', AdminVendorApproval::class)->name('admin.vendor-approval'); //
    Route::get('/admin/admin-reqDetails/{reqNo}', AdminRequestDetails::class)->name('admin.admin-reqDetails'); //

});

//User
Route::middleware(['auth:sanctum', 'verified', 'authuser'])->group(function() {
    Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');

    Route::get('/user/create-email', CreateEmail::class)->name('user.create-email');
    Route::get('/user/user-email', UserEmail::class)->name('user.user-email');
    Route::get('/user/user-viewrequest/{reqNo}', UserViewRequest::class)->name('user.user-viewrequest');//
});



//Procurement
Route::middleware(['auth:sanctum', 'verified', 'authproc'])->group(function() {
    Route::get('/procurement/dashboard', ProcurementDashboard::class)->name('procurement.dashboard');
    Route::get('/procurement/viewrequest/{reqNo}', ProcurementViewRequest::class)->name('procurement.viewrequest');//
    Route::get('/procurement/create-vendor', CreateVendor::class)->name('procurement.create-vendor');
    Route::get('/procurement/vendors', VendorList::class)->name('procurement.vendorlist');
    Route::get('/procurement/create-rfq', ProcurementCreateRFQ::class)->name('procurement.create-rfq');
    Route::get('/procurement/rfq', ProcurementRFQ::class)->name('procurement.rfq');
    Route::get('/procurement/rfq/{reqNo}', ProcurementViewRFQ::class)->name('procurement.view-rfq');
    Route::get('/procurement/requests', ViewRequest::class)->name('procurement.requests');
    Route::get('/procurement/approval/{reqNo}', ApproveRequest::class)->name('procurement.approval');
    Route::get('/procurement/select-rfq/{reqNo}', SelectRFQ::class)->name('procurement.select-rfq');

    Route::get('/procurement/awaiting-request', DeptApproved::class)->name('procurement.awaiting-request');
    Route::get('/procurement/awaiting-approval/{reqNo}', AwaitingApproval::class)->name('procurement.awaiting-approval');

    Route::get('/procurement/awaiting-servicelist', AwaitingCarService::class)->name('procurement.awaiting-servicelist');
    Route::get('/procurement/awaiting-carservice/{reqNo}', AwaitingCarServiceSingle::class)->name('procurement.awaiting-carservice-single');

    Route::get('/procurement/awaiting-travellist', AwaitingTravelExpense::class)->name('procurement.awaiting-travellist');
    Route::get('/procurement/awaiting-travelexpense/{reqNo}', AwaitingTravelExpenseSingle::class)->name('procurement.awaiting-travelexpense-single');

    Route::get('/procurement/awaiting-carrequest', ApprovedCarRequestList::class)->name('procurement.awaiting-carrequest');
    Route::get('/procurement/awaiting-view-carrequest/{reqNo}', ApprovedCarRequestSingle::class)->name('procurement.awaiting-view-carrequest');


});

//Finance
Route::middleware(['auth:sanctum', 'verified', 'authfin'])->group(function() {
    Route::get('/finance/dashboard', FinanceDashboard::class)->name('finance.dashboard');
    Route::get('/finance/awaiting-requests', FinanceDeptApproved::class)->name('finance.awaiting-request');
    Route::get('/finance/awaiting-approval/{reqNo}', FinanceAwaitingApproval::class)->name('finance.awaiting-approval');

    Route::get('/finance/awaiting-travellist', FinAwaitingTravelExpense::class)->name('finance.awaiting-travellist');
    Route::get('/finance/awaiting-travelexpense/{reqNo}', FinAwaitingTravelExpenseSingle::class)->name('finance.awaiting-travelexpense-single');

});

//HR
Route::middleware(['auth:sanctum', 'verified', 'authhr'])->group(function() {
    Route::get('/h-r/dashboard', HRDashboard::class)->name('h-r.dashboard');
    //Route::get('/h-r/dashboard', ProcurementDashboard::class)->name('hr.dashboard');
    Route::get('/h-r/viewrequest/{reqNo}', HRViewRequest::class)->name('h-r.viewrequest');
    Route::get('/h-r/salarytemplate', SalaryTemplate::class)->name('h-r.salarytemplate');
    Route::get('/h-r/createsalarytemplate', CreateSalaryTemplate::class)->name('h-r.createsalarytemplate');//
    Route::get('/h-r/SalaryTemplateDetails/{code}', SalaryTemplateDetails::class)->name('h-r.SalaryTemplateDetails');
    Route::get('/payroll/history', MonthlySchedule::class)->name('payroll.history');//

    Route::get('/h-r/onboard-vehicle/{stat?}', CreateCar::class)->name('h-r.onboard');
    Route::get('/h-r/manage-vehicles', ManageCar::class)->name('h-r.managevehicles');
    Route::get('/h-r/view-vehicle/{vid}', ViewCar::class)->name('h-r.viewvehicle');
    Route::get('/h-r/createtravelexpense', NewTravelExpense::class)->name('h-r.createtravexp');
    Route::get('/h-r/travelexpenselist', TravelExpenseList::class)->name('h-r.travexplist');
    Route::get('/h-r/type/poolcars', PoolCars::class)->name('h-r.poolcars');
    Route::get('/h-r/type/statuscars', StatusCars::class)->name('h-r.statuscars');
    Route::get('/h-r/vehicleavailability', VehicleAvailability::class)->name('h-r.vehicleavailability');
});

//Vendor
Route::middleware(['auth:sanctum', 'verified', 'authven'])->group(function() {
    Route::get('/vendor/dashboard', VendorDashboard::class)->name('vendor.dashboard');
    Route::get('/vendor/rfq-list', RFQList::class)->name('vendor.rfq-list');
    Route::get('/vendor/rfq-details/{reqNo}', RFQDetails::class)->name('vendor.rfq-details');
    Route::get('/vendor/invoice/{reqNo}', PurchaseInvoice::class)->name('vendor.invoice');
});

//TRANSPORTATION
Route::middleware(['auth:sanctum', 'verified', 'authtran'])->group(function() {
    Route::get('/transport/dashboard', TransportationDashboard::class)->name('transport.dashboard');
    Route::get('/transport/awaiting-requests', TranAwaitingRequestsList::class)->name('transport.awaiting-requests');
    Route::get('/transport/awaiting-servicerequests/{reqNo}', TranAwaitingRequestsAction::class)->name('transport.awaiting-servicerequests');
    //Route::get('/h-r/dashboard', ProcurementDashboard::class)->name('hr.dashboard');

});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified', 'common'])->group(function() {
    Route::get('/system/create-email', AdminCreateEmail::class)->name('system.create-email'); //
    Route::get('/system/email', AdminEmail::class)->name('system.email');
    Route::get('/request/createrequest', CreateRequests::class)->name('request.createrequest');
    Route::get('/request/request', UserRequests::class)->name('request.request');
    Route::get('/request/service-request', ServiceRequests::class)->name('request.servicerequest');
    Route::get('/request/carservice-request/{reqNo}', CarServiceRequestSingle::class)->name('request.carservicerequest');

    Route::get('/request/request-carrequest', UserCarRequestList::class)->name('request.request-carrequest');
    Route::get('/request/request-view-carrequest/{reqNo}', UserCarRequestSingle::class)->name('request.request-view-carrequest');

    Route::get('/system/request-carrequest', DeptCarRequestList::class)->name('system.request-carrequest');
    Route::get('/system/request-view-carrequest/{reqNo}', DeptCarRequestSingle::class)->name('system.request-view-carrequest');

    Route::get('/request/received', ReceivedOrder::class)->name('request.received');

    Route::get('/request/purchaserequest-detail/{reqNo}', PurchaseRequestDetails::class)->name('request.purchaserequest-detail');//
    Route::get('/request/request-detail/{reqNo}', HRRequestDetails::class)->name('request.requestdetail');//
    Route::get('/request/request-travel/{reqNo}', UserViewTravelExpense::class)->name('request.requesttravel');//

    Route::get('/system/approval-list', ApprovalLimitList::class)->name('system.approval-list');
    Route::get('/system/create-user', AdminCreateUser::class)->name('system.create-user');
    Route::get('/system/create-department', AdminCreateDept::class)->name('system.create-department');
    Route::get('/system/system-department', AdminDepartment::class)->name('system.system-department');
    Route::get('/system/system-users', AdminUsers::class)->name('system.system-users');
    Route::get('/system/system-advisor', AdvisorUsers::class)->name('system.system-advisor');
    Route::get('/system/system-contract', ContractUsers::class)->name('system.system-contract');
    Route::get('/system/system-inactive', InactiveUsers::class)->name('system.system-inactive');

    Route::get('/system/requestlist', ProcRequestList::class)->name('system.requestlist');

    Route::get('/system/create-vendor', AdminCreateVendor::class)->name('system.create-vendor');
    Route::get('/system/system-vendors', AdminVendor::class)->name('system.system-vendors');

    Route::get('/system/system-approvallimit/{dept_id}', AdminApprovalLimit::class)->name('system.system-approvallimit');

    Route::get('/system/system-profile', Profile::class)->name('system.system-profile');

    Route::get('/system/system-userprofile/{uid}', UserProfiles::class)->name('system.system-userprofile');

    Route::get('/system/system-edituserprofile/{uid}', EditUserProfiles::class)->name('system.system-edituserprofile');
    Route::get('/request/request-travelexpense', UserTravelExpense::class)->name('request.request-travelexpense');//
    Route::get('/system/travelrequestlist', DepartmentTravelRequestList::class)->name('system.travelrequestlist');//
    Route::get('/system/dept-travelapproval/{reqNo}', DepartmentTravelRequestAction::class)->name('system.dept-travelapproval');//
        //Payroll
    Route::get('/generate/payroll', MakePayment::class)->name('generate.payroll');//GenerateCommission

    Route::get('/generate/commission', GenerateCommission::class)->name('generate.commission');//




    // Route::get('/send-mail', function(){
    //     $mailData = [
    //         "name" => "Workflow Approval",
    //         "Testing"=> "This is a testing email"
    //     ];

    //     Mail::to('sholasolomon@yahoo.com')->send(new WorkFlowMail($mailData));
    //     dd("Mail Sent Successfully");
    // })->name('system.send-email');

});
