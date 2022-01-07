<div id="content-page" class="content-page">
    <div class="container-fluid">

       <div class="row">
         <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <h6>Customers</h6>
                     <span class="iq-icon"><i class="ri-information-fill"></i></span>
                  </div>
                  <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon iq-bg-primary mr-2"> <i class="ri-user-fill"></i></div>
                        <h2>3200</h2>
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
                     <h6>Total Policies</h6>
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
                     <h6>Pending Claims</h6>
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
                     <h6>Settled Claims</h6>
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
                     <h4 class="card-title">Open Invoices</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                        <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
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
                    <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
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
                                    href="{{route('h-r.requestdetail', ['reqNo'=>$request->reqNo])}}">
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
                     <h4 class="card-title">Recent Requests</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" >
                        <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
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
                     <div class="profile-icon iq-bg-success"><span><i class="ri-check-fill"></i></span></div>
                     <div class="media-support-info ml-3">
                        <h6>Camelun ios</h6>
                        <p class="mb-0"><span class="text-success">17 paid</span> month out of 23</p>
                     </div>
                     <div class="media-support-amount ml-3">
                        <h6><span class="text-secondary">$</span><b> 12,434.00</b></h6>
                        <p class="mb-0">per month</p>
                     </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center">
                     <div class="profile-icon iq-bg-warning"><span><i class="ri-check-fill"></i></span></div>
                     <div class="media-support-info ml-3">
                        <h6>React</h6>
                        <p class="mb-0"><span class="text-warning">Late payment 12 week</span> - pay invoice</p>
                     </div>
                     <div class="media-support-amount ml-3">
                        <h6><span class="text-secondary">$</span><b> 12,434.00</b></h6>
                        <p class="mb-0">per month</p>
                     </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center">
                     <div class="profile-icon iq-bg-success"><span><i class="ri-check-fill"></i></span></div>
                     <div class="media-support-info ml-3">
                        <h6>Camelun ios</h6>
                        <p class="mb-0"><span class="text-success">17 paid</span> month out of 23</p>
                     </div>
                     <div class="media-support-amount ml-3">
                        <h6><span class="text-secondary">$</span><b> 12,434.00</b></h6>
                        <p class="mb-0">per month</p>
                     </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center">
                     <div class="profile-icon iq-bg-danger"><span><i class="ri-check-fill"></i></span></div>
                     <div class="media-support-info ml-3">
                        <h6>Camelun ios</h6>
                        <p class="mb-0"><span class="text-danger">17 paid</span> month out of 23</p>
                     </div>
                     <div class="media-support-amount ml-3">
                        <h6><span class="text-secondary">$</span><b> 12,434.00</b></h6>
                        <p class="mb-0">per month</p>
                     </div>
                  </li>
               </ul>
               </div>
            </div>
         </div>
      </div>
    </div>
 </div>
