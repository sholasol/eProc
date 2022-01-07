<div>
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-body">
                         <div class="d-flex align-items-center justify-content-between">
                            <h6>Revenue</h6>
                            <span class="iq-icon"><i class="ri-information-fill"></i></span>
                         </div>
                         <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                            <div class="d-flex align-items-center">
                               <div class="rounded-circle iq-card-icon iq-bg-primary mr-2"> <i class="ri-calculator-fill"></i></div>
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
                            <h6>Requistion</h6>
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
                <div class="col-sm-12">
                      <div class="iq-card">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title"> Recent Claims</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <div class="table-responsive">
                               <div class="row justify-content-between">
                                  <div class="col-sm-12 col-md-6">
                                     <div id="user_list_datatable_info" class="dataTables_filter">
                                        <form class="mr-3 position-relative">
                                           <div class="form-group mb-0">
                                              <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                           </div>
                                        </form>
                                     </div>
                                  </div>
                                  <div class="col-sm-12 col-md-6">
                                     <div class="user-list-files d-flex float-right">
                                        <a class="iq-bg-primary" href="javascript:void();" >
                                           Print
                                         </a>
                                        <a class="iq-bg-primary" href="javascript:void();">
                                           Excel
                                         </a>
                                         <a class="iq-bg-primary" href="javascript:void();">
                                           Pdf
                                         </a>
                                       </div>
                                  </div>
                               </div>
                               <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                 <thead>
                                     <tr>
                                        <th>Profile</th>
                                        <th>User</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Company</th>
                                        <th>Join Date</th>
                                        <th></th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                        <td class="text-center"><a href="{{ route('admin.admin-viewrequest') }}"> <img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/01.jpg')}}" alt="profile"></a></td>
                                        <td>Anna Sthesia</td>
                                        <td>+234 7607 567 568</td>
                                        <td>annasthesia@gmail.com</td>
                                        <td><span class="badge iq-bg-primary">Active</span></td>
                                        <td><a href="{{ route('admin.admin-viewrequest') }}"> Acme Corporation</a></td>
                                        <td>2019/12/01</td>
                                        <td>
                                          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                             <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                   <a class="dropdown-item" href="{{ route('admin.admin-viewrequest') }}">Details</a>
                                                   <a class="dropdown-item" href="#">Approve</a>
                                                   <a class="dropdown-item" href="#">Decline</a>
                                                </div>
                                             </div>
                                          </div>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/02.jpg')}}" alt="profile"></td>
                                        <td>Brock Lee</td>
                                        <td>+234 5689 458 658</td>
                                        <td>brocklee@gmail.com</td>
                                        <td><span class="badge iq-bg-primary">Active</span></td>
                                        <td>Soylent Corp</td>
                                        <td>2019/12/01</td>
                                        <td>
                                          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                             <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                   <a class="dropdown-item" href="{{ route('admin.admin-viewrequest') }}">Details</a>
                                                   <a class="dropdown-item" href="#">Approve</a>
                                                   <a class="dropdown-item" href="#">Decline</a>
                                                </div>
                                             </div>
                                          </div>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/03.jpg')}}" alt="profile"></td>
                                        <td>Dan Druff</td>
                                        <td>+234 6523 456 856</td>
                                        <td>dandruff@gmail.com</td>
                                        <td><span class="badge iq-bg-warning">Pending</span></td>
                                        <td>Umbrella Corporation</td>
                                        <td>2019/12/01</td>
                                        <td>
                                          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                             <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                   <a class="dropdown-item" href="{{ route('admin.admin-viewrequest') }}">Details</a>
                                                   <a class="dropdown-item" href="#">Approve</a>
                                                   <a class="dropdown-item" href="#">Decline</a>
                                                </div>
                                             </div>
                                          </div>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/04.jpg')}}" alt="profile"></td>
                                        <td>Hans Olo</td>
                                        <td>+234 2586 253 125</td>
                                        <td>hansolo@gmail.com</td>
                                        <td><span class="badge iq-bg-danger">Inactive</span></td>
                                        <td>Vehement Capital</td>
                                        <td>2019/12/01</td>
                                        <td>
                                          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                             <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                   <a class="dropdown-item" href="{{ route('admin.admin-viewrequest') }}">Details</a>
                                                   <a class="dropdown-item" href="#">Approve</a>
                                                   <a class="dropdown-item" href="#">Decline</a>
                                                </div>
                                             </div>
                                          </div>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/05.jpg')}}" alt="profile"></td>
                                        <td>Lynn Guini</td>
                                        <td>+234 2563 456 589</td>
                                        <td>lynnguini@gmail.com</td>
                                        <td><span class="badge iq-bg-primary">Active</span></td>
                                        <td>Massive Dynamic</td>
                                        <td>2019/12/01</td>
                                        <td>
                                          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                             <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                   <a class="dropdown-item" href="{{ route('admin.admin-viewrequest') }}">Details</a>
                                                   <a class="dropdown-item" href="#">Approve</a>
                                                   <a class="dropdown-item" href="#">Decline</a>
                                                </div>
                                             </div>
                                          </div>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/06.jpg')}}" alt="profile"></td>
                                        <td>Eric Shun</td>
                                        <td>+234 25685 256 589</td>
                                        <td>ericshun@gmail.com</td>
                                        <td><span class="badge iq-bg-warning">Pending</span></td>
                                        <td>Globex Corporation</td>
                                        <td>2019/12/01</td>
                                        <td>
                                          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                             <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                   <a class="dropdown-item" href="{{ route('admin.admin-viewrequest') }}">Details</a>
                                                   <a class="dropdown-item" href="#">Approve</a>
                                                   <a class="dropdown-item" href="#">Decline</a>
                                                </div>
                                             </div>
                                          </div>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/07.jpg')}}" alt="profile"></td>
                                        <td>aaronottix</td>
                                        <td>+2347 607 65 2658</td>
                                        <td>budwiser@ymail.com</td>
                                        <td><span class="badge iq-bg-info">Hold</span></td>
                                        <td>Acme Corporation</td>
                                        <td>2019/12/01</td>
                                        <td>
                                          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                             <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                   <a class="dropdown-item" href="{{ route('admin.admin-viewrequest') }}">Details</a>
                                                   <a class="dropdown-item" href="#">Approve</a>
                                                   <a class="dropdown-item" href="#">Decline</a>
                                                </div>
                                             </div>
                                          </div>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/08.jpg')}}" alt="profile"></td>
                                        <td>Marge Arita</td>
                                        <td>+234 5625 456 589</td>
                                        <td>margearita@gmail.com</td>
                                        <td><span class="badge iq-bg-success">Complite</span></td>
                                        <td>Vehement Capital</td>
                                        <td>2019/12/01</td>
                                        <td>
                                          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                             <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                   <a class="dropdown-item" href="{{ route('admin.admin-viewrequest') }}">Details</a>
                                                   <a class="dropdown-item" href="#">Approve</a>
                                                   <a class="dropdown-item" href="#">Decline</a>
                                                </div>
                                             </div>
                                          </div>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/09.jpg')}}" alt="profile"></td>
                                        <td>Bill Dabear</td>
                                        <td>+234 2563 456 589</td>
                                        <td>billdabear@gmail.com</td>
                                        <td><span class="badge iq-bg-primary">active</span></td>
                                        <td>Massive Dynamic</td>
                                        <td>2019/12/01</td>
                                        <td>
                                          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                             <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                   <a class="dropdown-item" href="{{ route('admin.admin-viewrequest') }}">Details</a>
                                                   <a class="dropdown-item" href="#">Approve</a>
                                                   <a class="dropdown-item" href="#">Decline</a>
                                                </div>
                                             </div>
                                          </div>
                                        </td>
                                     </tr>
                                 </tbody>
                               </table>
                            </div>
                               <div class="row justify-content-between mt-3">
                                  <div id="user-list-page-info" class="col-md-6">
                                     <span>Showing 1 to 5 of 5 entries</span>
                                  </div>
                                  <div class="col-md-6">
                                     <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end mb-0">
                                           <li class="page-item disabled">
                                              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                           </li>
                                           <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                                           <li class="page-item">
                                              <a class="page-link" href="#">Next</a>
                                           </li>
                                        </ul>
                                     </nav>
                                  </div>
                               </div>
                         </div>
                      </div>
                </div>
             </div>
        </div>
     </div>
</div>
