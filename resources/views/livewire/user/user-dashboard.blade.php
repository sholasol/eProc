<div id="content-page" class="content-page">
    <div class="container-fluid">

       <div class="row">
         <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <h6>Requests</h6>
                     <span class="iq-icon"><i class="ri-information-fill"></i></span>
                  </div>
                  <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon iq-bg-primary mr-2"> <i class="ri-calculator-fill"></i></div>
                        <h2>{{ $reqs }}</h2>
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
                     <h6>Approvals</h6>
                     <span class="iq-icon"><i class="ri-information-fill"></i></span>
                  </div>
                  <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon iq-bg-danger mr-2"><i class="fa fa-briefcase"></i></div>
                        <h2>0</h2></div>
                      <div class="iq-map text-danger font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <h6>Total</h6>
                     <span class="iq-icon"><i class="ri-information-fill"></i></span>
                  </div>
                  <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon iq-bg-warning mr-2"><i class="ri-price-tag-3-line"></i></div>
                        <h2>200800</h2></div>
                      <div class="iq-map text-warning font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <h6>Received</h6>
                     <span class="iq-icon"><i class="ri-information-fill"></i></span>
                  </div>
                  <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle iq-card-icon iq-bg-info mr-2"><i class="ri-refund-line"></i></div>
                        <h2>1</h2></div>
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
                     <h4 class="card-title">Recent Item Requests</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                        <i class="ri-more-fill"></i>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <table class="table mb-0 table-hover">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Req No</th>
                              <th scope="col">Item</th>
                              <th scope="col">Qty</th>
                              <th scope="col">Description</th>
                              <th scope="col">Created</th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $key=> $request)
                            <tr>
                                <td>{{ $key + 1}}</td>
                                <td>{{$request ->reqNo}}</td>
                                <td>{{$request ->item}}</td>
                                <td>{{$request ->quantity}}</td>
                                <td>{{$request ->description}}</td>
                                <td>{{$request ->created_at->diffForHumans()}}</td>
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
                     <h4 class="card-title">Approval Requests</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" >
                        <i class="ri-more-fill"></i>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                 <ul class="suggestions-lists m-0 p-0">
                     @foreach ($allReqs as $all)
                        @if ($all->dept_approval =="")
                        <li class="d-flex mb-4 align-items-center">
                            <div class="profile-icon iq-bg-warning"><span><i class="ri-check-fill"></i></span></div>
                            <div class="media-support-info ml-3">
                               <h6>{{$all->reqNo}}</h6>
                               <p class="mb-0"><span class="text-warning">Awaiting</span> Departmental Approval</p>
                            </div>
                            <div class="media-support-amount ml-3">
                               <h6><span class="text-secondary"><i class="fa fa-calendar"></i></span><b> {{$all->created_at->diffForHumans()}}</b></h6>
                               <p class="mb-0">{{$all->dept_remark}}</p>
                            </div>
                         </li>
                         @else
                         <li class="d-flex mb-4 align-items-center">
                            <div class="profile-icon iq-bg-primary"><span><i class="ri-check-fill"></i></span></div>
                            <div class="media-support-info ml-3">
                               <h6>{{$all->reqNo}}</h6>
                               <p class="mb-0"><span class="text-primary">Passed</span> Departmental Approval</p>
                            </div>
                            <div class="media-support-amount ml-3">
                               <h6><span class="text-secondary"><i class="fa fa-calendar"></i></span><b> {{$all->created_at->diffForHumans()}}</b></h6>
                               <p class="mb-0">Created</p>
                            </div>
                         </li>
                        @endif

                     @endforeach
               </ul>
               </div>
            </div>
         </div>
      </div>
    </div>
 </div>
