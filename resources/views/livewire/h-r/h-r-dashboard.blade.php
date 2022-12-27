use App\Models\ServiceRequest;
<div id="content-page" class="content-page">
    <style>
        h2 {
            font-size: 14px;
            font-weight: 800;
        }
    </style>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6>Staff</h6>
                            <span class="iq-icon">
                                <i class="las la-user-friends"></i>
                            </span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle iq-card-icon iq-bg-primary mr-2"> <i
                                        class="ri-user-fill"></i></div>
                                <h2>{{$staff}}</h2>
                            </div>
                            <div class="iq-map text-primary font-size-32"><i class="ri-bar-chart-grouped-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6>Last Schedule(Sum)</h6>
                            <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle iq-card-icon iq-bg-danger mr-2"><i
                                        class="fa fa-briefcase"></i></div>
                                <h2>{{ number_format($tot_sal->salary) }}</h2>
                            </div>
                            <div class="iq-map text-danger font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6>Pending Commission</h6>
                            <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle iq-card-icon iq-bg-warning mr-2"><i
                                        class="ri-price-tag-3-line"></i></div>
                                <h2>28</h2>
                            </div>
                            <div class="iq-map text-warning font-size-32"><i class="ri-bar-chart-grouped-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6>Settled Commission</h6>
                            <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle iq-card-icon iq-bg-info mr-2"><i class="ri-refund-line"></i>
                                </div>
                                <h2>39</h2>
                            </div>
                            <div class="iq-map text-info font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Requests</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle text-primary" id="dropdownMenuButton5"
                                    data-toggle="dropdown">
                                    <i class="ri-more-fill"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid"
                                aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Item</th>
                                        <th width="20%">Date</th>
                                        <th width="5%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requests as $key=> $request)
                                    <tr>
                                        <td class="text-center">{{ $key + 1}}</td>
                                        <td>{{$request ->reqNo}}</td>
                                        <td>{{$request ->created_at->diffForHumans()}}</td>
                                        <td>
                                            <div class="flex align-items-center list-user-action">
                                                <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                    title="View Request Items" data-original-title="Edit"
                                                    href="{{route('request.requestdetail', ['reqNo'=>$request->reqNo])}}">
                                                    <i class="fa fa-file"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Salary Grades</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                                    <i class="ri-more-fill"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1"
                                    style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <ul class="suggestions-lists m-0 p-0">
                            @foreach($sal_temps as $temp)
                            <li class="d-flex mb-4 align-items-center">
                                <div class="profile-icon iq-bg-success">
                                    <span>
                                        <a href="{{route('h-r.SalaryTemplateDetails', ['code'=>$temp->uniqcode])}}">
                                            <i class="fa fa-credit-card"></i>
                                        </a>
                                    </span>
                                </div>
                                <div class="media-support-info ml-3">
                                    <h6>{{$temp->name}}</h6>
                                    <p class="mb-0">
                                        <a href="{{route('h-r.SalaryTemplateDetails', ['code'=>$temp->uniqcode])}}">
                                            <span class="text-success">Basic</span> salary
                                        </a>
                                    </p>
                                </div>
                                <div class="media-support-amount ml-3">
                                    <h6><span class="text-secondary">₦</span>
                                        <b>
                                            <a href="{{route('h-r.SalaryTemplateDetails', ['code'=>$temp->uniqcode])}}">
                                             {{number_format($temp->amount)}}
                                            </a>
                                        </b>
                                    </h6>
                                    <p class="mb-0">Tax: {{$temp->tax}}%</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Employee Payroll: Month: {{ $this->mv }}, Year: {{ $this->yv }}</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table">
                            <table id="example" data-month="{{ $this->mv }}" data-year="{{ $this->yv }}"
                                class="table table-striped table-bordered mt-4 table-responsive" role="grid"
                                aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Basic</th>
                                        <th>Allowance(s)</th>
                                        <th>Gross</th>
                                        {{-- <th>Deduction(s)</th>
                                        <th>Tax</th> --}}
                                        <th>Tot.&nbsp;Deduction</th>
                                        <th>Net&nbsp;Salary</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tables as $key => $table )
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td class="">
                                            <img class="rounded-circle img-fluid avatar-40"
                                                src="
                                                                    <?php if(!empty($table->profile_photo_path) && file_exists('asset/image/users/'.$table->profile_photo_path)){
                                                                            echo asset('asset/image/users').'/'.$table->profile_photo_path;
                                                                        } else{ echo asset('asset/image/users/dummy.png');} ?>" alt="profile">
                                        </td>
                                        <td>{{ $table->fname}}&nbsp;{{$table->lname }}</td>
                                        <td>{{ $table->dept_name }}</td>
                                        <td><b>₦</b>{{ number_format($table->basic,2) }}</td>
                                        <td><b>₦</b>{{ number_format($table->total_allowance,2) }}</td>
                                        <td><b>₦</b>{{ number_format($table->gross,2) }}</td>
                                        {{-- <td class="text-danger"><b>₦</b>{{ number_format($table->total_deduction,2)
                                            }}</td>
                                        <td class="text-danger"><b>₦</b>{{ number_format($table->tax_value,2) }}</td>
                                        --}}
                                        <td class="text-danger"><b>₦</b>{{ number_format($table->grand_deduction,2) }}
                                        </td>
                                        <td class="text-success"><b>₦</b>{{ number_format($table->net_salary,2) }}</td>
                                        <td>
                                            <div class="flex align-items-center list-user-action flex-nowrap">
                                                <a class="bg-primary" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="View Profile"
                                                    href="{{ route('system.system-userprofile', ['uid'=>$table->id]) }}">
                                                    <i class="ri-eye-fill text-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <p>
                                {{-- {{$tables->links()}} --}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
