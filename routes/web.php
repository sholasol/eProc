<?php

use App\Http\Livewire\Redirect;
use App\Http\Livewire\VendorPage;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\HR\HRDashboard;
use App\Http\Livewire\User\UserEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminEmail;
use App\Http\Livewire\Admin\AdminUsers;
use App\Http\Livewire\HR\HRViewRequest;
use App\Http\Livewire\User\CreateEmail;
use App\Http\Livewire\Admin\AdminClaims;
use App\Http\Livewire\Admin\AdminVendor;
use App\Http\Livewire\Admin\Requestlist;
use App\Http\Livewire\Admin\RequestView;
use App\Http\Livewire\User\UserRequests;
use App\Http\Livewire\Admin\AdminFinance;
use App\Http\Livewire\Admin\AdminReceipt;
use App\Http\Livewire\Admin\AdminRequest;
use App\Http\Livewire\Admin\ApprovalView;
use App\Http\Livewire\User\ReceivedOrder;
use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\VendorRegistration;
use App\Http\Livewire\HR\HRRequestDetails;
use App\Http\Livewire\User\CreateRequests;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\FinancePayment;
use App\Http\Livewire\User\UserViewRequest;
use App\Http\Livewire\Admin\AdminCreateDept;
use App\Http\Livewire\Admin\AdminCreateUser;
use App\Http\Livewire\Admin\AdminDepartment;
use App\Http\Livewire\Admin\AdminCreateEmail;
use App\Http\Livewire\Admin\AdminUserRequest;
use App\Http\Livewire\Vendor\VendorDashboard;
use App\Http\Livewire\Admin\AdminClaimProcess;
use App\Http\Livewire\Admin\AdminCreateVendor;
use App\Http\Livewire\Admin\ApprovalLimitList;
use App\Http\Livewire\Admin\AdminApprovalLimit;
use App\Http\Livewire\Admin\AdminCreateRequest;
use App\Http\Livewire\Finance\FinanceDashboard;
use App\Http\Livewire\Admin\AdminFinancePayment;
use App\Http\Livewire\Admin\AdminFinanceRequest;
use App\Http\Livewire\Admin\AdminRequestDetails;
use App\Http\Livewire\Admin\AdminVendorApproval;
use App\Http\Livewire\Admin\AdminFinanceApproval;
use App\Http\Livewire\Procurement\ProcurementDashboard;
use App\Http\Livewire\Procurement\ProcurementViewRequest;

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

Route::get('/', HomeComponent::class)->name('home');
Route::get('/redirect', Redirect::class)->name('redirect');
Route::get('/vendor-registration', VendorRegistration::class)->name('vendor-registration');
Route::get('/vendor-page', VendorPage::class)->name('vendor-page');//VendorPage
//Route::get('/login', HomeComponent::class);

// Route::get('/', function () {
//     return view('welcome');
// });

//Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin/create-user', AdminCreateUser::class)->name('admin.create-user');
    Route::get('/admin/create-department', AdminCreateDept::class)->name('admin.create-department');
    Route::get('/admin/admin-department', AdminDepartment::class)->name('admin.admin-department');
    Route::get('/admin/admin-users', AdminUsers::class)->name('admin.admin-users');
    Route::get('/admin/create-vendor', AdminCreateVendor::class)->name('admin.create-vendor');
    Route::get('/admin/admin-vendors', AdminVendor::class)->name('admin.admin-vendors');
    Route::get('/admin/create-email', AdminCreateEmail::class)->name('admin.create-email'); //
    Route::get('/admin/admin-email', AdminEmail::class)->name('admin.admin-email');
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
    Route::get('/admin/admin-approvallimit/{dept_id}', AdminApprovalLimit::class)->name('admin.admin-approvallimit');
    Route::get('/admin/approval-list', ApprovalLimitList::class)->name('admin.approval-list');
    Route::get('/admin/vendor-approval/{vend_id}', AdminVendorApproval::class)->name('admin.vendor-approval'); //
    Route::get('/admin/admin-reqDetails/{reqNo}', AdminRequestDetails::class)->name('admin.admin-reqDetails'); //
});

//User
Route::middleware(['auth:sanctum', 'verified', 'authuser'])->group(function() {
    Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');
    Route::get('/user/createrequest', CreateRequests::class)->name('user.createrequest');
    Route::get('/user/userrequest', UserRequests::class)->name('user.userrequest');
    Route::get('/user/userreceived', ReceivedOrder::class)->name('user.userreceived');
    Route::get('/user/create-email', CreateEmail::class)->name('user.create-email');
    Route::get('/user/user-email', UserEmail::class)->name('user.user-email');
    Route::get('/user/user-viewrequest/{reqNo}', UserViewRequest::class)->name('user.user-viewrequest');//
});

//Vendor
Route::middleware(['auth:sanctum', 'verified', 'authven'])->group(function() {
    Route::get('/vendor/dashboard', VendorDashboard::class)->name('vendor.dashboard');
});

//Procurement
Route::middleware(['auth:sanctum', 'verified', 'authproc'])->group(function() {
    Route::get('/procurement/dashboard', ProcurementDashboard::class)->name('procurement.dashboard');
    Route::get('/procurement/viewrequest/{reqNo}', ProcurementViewRequest::class)->name('procurement.viewrequest');//
});

//Finance
Route::middleware(['auth:sanctum', 'verified', 'authfin'])->group(function() {
    Route::get('/finance/dashboard', FinanceDashboard::class)->name('finance.dashboard');
});

//HR
Route::middleware(['auth:sanctum', 'verified', 'authhr'])->group(function() {
    Route::get('/h-r/dashboard', HRDashboard::class)->name('h-r.dashboard');
    //Route::get('/h-r/dashboard', ProcurementDashboard::class)->name('hr.dashboard');
    Route::get('/h-r/viewrequest/{reqNo}', HRViewRequest::class)->name('h-r.viewrequest');
    Route::get('/h-r/request-detail/{reqNo}', HRRequestDetails::class)->name('h-r.requestdetail');//
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
