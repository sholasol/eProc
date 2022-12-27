<div id="content-page" class="content-page">
    <div class="container-fluid">
       {{-- <div class="row">
         <div class="col-sm-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="iq-advance-course d-flex align-items-center justify-content-between">
                     <div class="left-block">
                        <div class="d-flex align-items-center">
                           <img src="{{ asset('images/page-img/29.png')}}" class="img-fluid" alt="icon-img">
                           <div class=" ml-3">
                               <h4 class="">Achieve Your Goal By Signing Up To Our Advanced Course </h4>
                               <p class="mb-0">Sign up and boost your professional career by adding new skills with our advanced courses.</p>
                         </div>
                        </div>
                     </div>
                     <div class="right-block position-relativ">
                         <a href="#" class="btn btn-primary">Start Now</a>
                         <img src="{{ asset('images/page-img/34.png')}}" class="img-fluid image-absulute image-absulute-1" alt="icon-img">
                         <img src="{{ asset('images/page-img/35.png')}}" class="img-fluid image-absulute image-absulute-2" alt="icon-img">
                     </div>
                  </div>
               </div>
            </div>
         </div>
       </div> --}}
       <div id="card-slider" class="row">
         <div class="col-md-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="bg-success p-3 rounded d-flex align-items-center justify-content-between mb-3">
                     <h5 class="text-white">Purchase Requests</h5>
                     <div class="rounded-circle iq-card-icon bg-white">
                        <i class="ri-layout-line text-success"></i>
                     </div>
                   </div>
                   <h4 class="mb-2">Total Request: {{$purchase}}</h4>
                   <div class="row align-items-center justify-content-between mt-3">
                      <div class="col-sm-6">
                         <p class="mb-0">Request:</p>
                         <h6>{{$purchase}} requests</h6>
                      </div>
                      <div class="col-sm-6">
                         <div class="iq-progress-bar">
                            <span class="bg-success" data-percent="99"></span>
                         </div>
                   </div>
                </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="bg-cobalt-blue p-3 rounded d-flex align-items-center justify-content-between mb-3">
                     <h5 class="text-white">Pool Car Request</h5>
                     <div class="rounded-circle iq-card-icon bg-white">
                        <i class="fa fa-car text-cobalt-blue"></i>
                     </div>
                   </div>
                   <h4 class="mb-2">Total Requests: {{$total_car_request}}</h4>
                   <div class="row align-items-center justify-content-between mt-3">
                      <div class="col-sm-6">
                         <p class="mb-0">Request</p>
                         <h6>{{$total_car_request}} requests</h6>
                      </div>
                      <div class="col-sm-6">
                         <div class="iq-progress-bar">
                            <span class="bg-cobalt-blue" data-percent="99"></span>
                         </div>
                   </div>
                </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="bg-danger p-3 rounded d-flex align-items-center justify-content-between mb-3">
                     <h5 class="text-white">Car Service Requests</h5>
                     <div class="rounded-circle iq-card-icon bg-white">
                        <i class="fa fa-car text-danger"></i>
                     </div>
                   </div>
                   <h4 class="mb-2">Car Service: {{$total_service_request}}</h4>
                   <div class="row align-items-center justify-content-between mt-3">
                      <div class="col-sm-6">
                         <p class="mb-0">Request:</p>
                         <h6>{{$total_service_request}} requests</h6>
                      </div>
                      <div class="col-sm-6">
                         <div class="iq-progress-bar">
                            <span class="bg-danger" data-percent="98"></span>
                         </div>
                   </div>
                </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="bg-amber p-3 rounded d-flex align-items-center justify-content-between mb-3">
                     <h5 class="text-white">Travel Requests</h5>
                     <div class="rounded-circle iq-card-icon bg-white">
                        <i class="fa fa-plane text-amber"></i>
                     </div>
                   </div>
                   <h4 class="mb-2">Total Request: {{$travel}}</h4>
                   <div class="row align-items-center justify-content-between mt-3">
                      <div class="col-sm-6">
                         <p class="mb-0">Requests</p>
                         <h6>{{$travel}} requests</h6>
                      </div>
                      <div class="col-sm-6">
                         <div class="iq-progress-bar">
                            <span class="bg-amber" data-percent="97"></span>
                         </div>
                   </div>
                </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="bg-pink p-3 rounded d-flex align-items-center justify-content-between mb-3">
                     <h5 class="text-white">Total Vendors</h5>
                     <div class="rounded-circle iq-card-icon bg-white">
                        <i class="las la-user-friends text-pink"></i>
                     </div>
                   </div>
                   <h4 class="mb-2">Vendors: {{$vendor}}</h4>
                   <div class="row align-items-center justify-content-between mt-3">
                      <div class="col-sm-6">
                         <p class="mb-0">Vendors</p>
                         <h6>{{$vendor}} vendors</h6>
                      </div>
                      <div class="col-sm-6">
                         <div class="iq-progress-bar">
                            <span class="bg-pink" data-percent="85"></span>
                         </div>
                   </div>
                </div>
               </div>
            </div>
         </div>
       </div>

       <div class="row">
         <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <h6>Staff</h6>
                     <span class="iq-icon"><i class="ri-information-fill"></i></span>
                  </div>
                  <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon iq-bg-primary mr-2"> <i class="ri-user-fill"></i></div>
                        <h2>{{ $staff }}</h2>
                     </div>
                     <div class="iq-map text-primary font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <h6>Pool Cars</h6>
                     <span class="iq-icon"><i class="ri-information-fill"></i></span>
                  </div>
                  <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon iq-bg-danger mr-2"><i class="fa fa-briefcase"></i></div>
                        <h2>720</h2></div>
                      <div class="iq-map text-danger font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <h6>Total Requests</h6>
                     <span class="iq-icon"><i class="ri-information-fill"></i></span>
                  </div>
                  <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon iq-bg-warning mr-2"><i class="ri-price-tag-3-line"></i></div>
                        <h2>28</h2></div>
                      <div class="iq-map text-warning font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <h6>Status Cars</h6>
                     <span class="iq-icon"><i class="ri-information-fill"></i></span>
                  </div>
                  <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon iq-bg-info mr-2"><i class="ri-refund-line"></i></div>
                        <h2>39</h2></div>
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
                     <h4 class="card-title">Awaiting Approval</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                        <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                           <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View All</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                    <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                        @if ($requests->count() > 0)
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                               <th>Item</th>
                               <th width="20%">Date</th>
                               <th width="5%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $key => $request)
                            <tr>
                                <td class="text-center">{{ $key + 1}}</td>
                                <td>{{$request->reqNo}}</td>
                                <td>{{$request->created_at->diffForHumans()}}</td>
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="View Request Items"
                                            data-original-title="Edit" href="{{route('procurement.viewrequest', ['reqNo'=>$request->reqNo])}}"><i
                                                class="fa fa-file"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                         @else
                         <div class="d-flex justify-content-center align-items-center">
                             <img width="400px" src="{{ asset('asset/no-record.png') }}">
                         </div>
                         @endif
                      </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title"> Pool Car Awaiting Approval</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" >
                        <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
                           <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                 <ul class="suggestions-lists m-0 p-0">
                    @foreach ($poolcars as $car)
                        <li class="d-flex mb-4 align-items-center">
                            <div class="profile-icon iq-bg-danger">
                                <span>
                                   <a href="{{ route('procurement.awaiting-view-carrequest',['reqNo'=>$car->reqNo]) }}">
                                    <i class="ri-car-fill text-pink"></i>
                                   </a>
                                </span>
                            </div>
                            <div class="media-support-info ml-3">
                                <h6><a href="{{ route('procurement.awaiting-view-carrequest',['reqNo'=>$car->reqNo]) }}"> {{$car->reqNo}} </a></h6>
                                <p class="mb-0"><span class="text-pink">FROM</span>
                                    {{$car->from}} <span class="text-primary">==></span> {{$car->destination}}
                                </p>
                            </div>
                            <div class="media-support-amount ml-3">
                                <h6><span class="text-secondary"><i class="ri-calendar-fill"></i></span>
                                    <b> 
                                    <a href="{{ route('procurement.awaiting-view-carrequest',['reqNo'=>$car->reqNo]) }}">
                                        {{$car->req_date}}
                                    </a>
                                    </b>
                                </h6>
                                <p class="mb-0">{{$car->req_time}}</p>
                            </div>
                        </li>
                    @endforeach


               </ul>
               </div>
            </div>
         </div>
      </div>
      {{-- <div class="row">
         <div class="col-lg-8 row m-0 p-0">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Claim Status</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton3" data-toggle="dropdown">
                        <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3" style="">
                           <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                           <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                           <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                           <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                           <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <table class="table mb-0 table-borderless">
                        <thead>
                           <tr>
                              <th scope="col">Policy No</th>
                              <th scope="col">Customers</th>
                              <th scope="col">Phone</th>
                              <th scope="col">Created</th>
                              <th scope="col">Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>OM/LAG/1234</td>
                              <td>
                                 <div class="iq-media-group">
                                    Temitope Taiwo
                                 </div>
                              </td>
                              <td>
                                 <p class="mb-2">08099977766</p>
                              </td>
                              <td>16/01/2020</td>
                              <td>
                                 <div class="badge badge-pill badge-success">Settled</div>
                              </td>
                           </tr>

                           <tr>
                              <td>OM/LAG/1234</td>
                              <td>
                                 <div class="iq-media-group">
                                    Temitope Taiwo
                                 </div>
                              </td>
                              <td>
                                 <p class="mb-2">08099977766</p>
                              </td>
                              <td>16/01/2020</td>
                              <td>
                                 <div class="badge badge-pill badge-warning">Pending</div>
                              </td>
                           </tr>


                           <tr>
                              <td>OM/LAG/1234</td>
                              <td>
                                 <div class="iq-media-group">
                                    Temitope Taiwo
                                 </div>
                              </td>
                              <td>
                                 <p class="mb-2">08099977766</p>
                              </td>
                              <td>16/01/2020</td>
                              <td>
                                 <div class="badge badge-pill badge-info">Processed</div>
                              </td>
                           </tr>

                           <tr>
                              <td>OM/LAG/1234</td>
                              <td>
                                 <div class="iq-media-group">
                                    Temitope Taiwo
                                 </div>
                              </td>
                              <td>
                                 <p class="mb-2">08099977766</p>
                              </td>
                              <td>16/01/2020</td>
                              <td>
                                 <div class="badge badge-pill badge-danger">Rejected</div>
                              </td>
                           </tr>

                           <tr>
                              <td>OM/LAG/1234</td>
                              <td>
                                 <div class="iq-media-group">
                                    Temitope Taiwo
                                 </div>
                              </td>
                              <td>
                                 <p class="mb-2">08099977766</p>
                              </td>
                              <td>16/01/2020</td>
                              <td>
                                 <div class="badge badge-pill badge-warning">Pending</div>
                              </td>
                           </tr>
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
                     <h4 class="card-title">Settled Comissions</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton-four" data-toggle="dropdown" >
                        <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-four" style="">
                           <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                           <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                           <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                           <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                           <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                 <ul class="suggestions-lists m-0 p-0">
                  <li class="d-flex mb-4 align-items-center">
                     <div class="profile-icon bg-info"><span><i class="ri-check-line"></i></span></div>
                     <div class="media-support-info ml-3">
                        <h6>Maureen Ojo</h6>
                        <p class="mb-0">20 Aug, 2021</p>
                     </div>
                     <div class="media-support-amount ml-3">
                        <h6 class="text-info">₦10,000</h6>
                        <p class="mb-0">NGN</p>
                     </div>
                  </li>

                  <li class="d-flex mb-4 align-items-center">
                     <div class="profile-icon bg-info"><span><i class="ri-check-line"></i></span></div>
                     <div class="media-support-info ml-3">
                        <h6>John Idowu</h6>
                        <p class="mb-0">1 Oct, 2021</p>
                     </div>
                     <div class="media-support-amount ml-3">
                        <h6 class="text-info">₦10,000</h6>
                        <p class="mb-0">NGN</p>
                     </div>
                  </li>

                  <li class="d-flex mb-4 align-items-center">
                     <div class="profile-icon bg-info"><span><i class="ri-check-line"></i></span></div>
                     <div class="media-support-info ml-3">
                        <h6>Phillip Sage</h6>
                        <p class="mb-0">8 Sept, 2021</p>
                     </div>
                     <div class="media-support-amount ml-3">
                        <h6 class="text-info">₦10,000</h6>
                        <p class="mb-0">NGN</p>
                     </div>
                  </li>

                  <li class="d-flex mb-4 align-items-center">
                     <div class="profile-icon bg-info"><span><i class="ri-check-line"></i></span></div>
                     <div class="media-support-info ml-3">
                        <h6>Binta Adeleke</h6>
                        <p class="mb-0">5 Sept, 2021</p>
                     </div>
                     <div class="media-support-amount ml-3">
                        <h6 class="text-info">₦10,000</h6>
                        <p class="mb-0">NGN</p>
                     </div>
                  </li>

                  <li class="d-flex mb-4 align-items-center">
                     <div class="profile-icon bg-info"><span><i class="ri-check-line"></i></span></div>
                     <div class="media-support-info ml-3">
                        <h6>David Oyetunde</h6>
                        <p class="mb-0">12 Oct, 2021</p>
                     </div>
                     <div class="media-support-amount ml-3">
                        <h6 class="text-info">₦10,000</h6>
                        <p class="mb-0">NGN</p>
                     </div>
                  </li>
               </ul>
               </div>
            </div>
         </div>
         </div>
      </div> --}}
    </div>
 </div>
