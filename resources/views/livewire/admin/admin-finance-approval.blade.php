<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">Approvals</h4>
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
                                      <th scope="col">#</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Item</th>
                                      <th scope="col">Requested</th>
                                      <th scope="col">Approved</th>
                                      <th scope="col">Status</th>
                                   </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                      <td><a href="{{ route('admin.admin-viewapproval') }}">#1234</a></td>
                                      <td>
                                         <div class="iq-media-group">
                                            <a href="{{ route('admin.admin-viewapproval') }}" class="iq-media">
                                            <img class="img-fluid avatar-30 rounded-circle" src="{{  asset('images/user/05.jpg')}}" alt="">
                                            </a>
                                         </div>
                                      </td>
                                      <td><a href="{{ route('admin.admin-viewapproval') }}">Lacer Jet Printer</a></td>
                                      <td>16/01/2020</td>
                                      <td>16/01/2020</td>
                                      <td>
                                         <div class="badge badge-pill badge-success"><a href="{{ route('admin.admin-viewapproval') }}" class="text-white">Approved</a></div>
                                      </td>
                                   </tr>
                                   <tr>
                                      <td>#1234</td>
                                      <td>
                                         <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-30 rounded-circle" src="{{  asset('images/user/05.jpg')}}" alt="">
                                            </a>
                                         </div>
                                      </td>
                                      <td>2 units of HP computers</td>
                                      <td>16/01/2020</td>
                                      <td>16/01/2020</td>
                                      <td>
                                         <div class="badge badge-pill badge-success">Approved</div>
                                      </td>
                                   </tr>
                                   <tr>
                                      <td>#1234</td>
                                      <td>
                                         <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-30 rounded-circle" src="{{  asset('images/user/05.jpg')}}" alt="">
                                            </a>
                                         </div>
                                      </td>
                                      <td>A set of office furniture</td>
                                      <td>16/01/2020</td>
                                      <td>16/01/2020</td>
                                      <td>
                                         <div class="badge badge-pill badge-success">Approved</div>
                                      </td>
                                   </tr>
                                   <tr>
                                      <td>#1234</td>
                                      <td>
                                         <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-30 rounded-circle" src="{{  asset('images/user/05.jpg')}}" alt="">
                                            </a>
                                         </div>
                                      </td>
                                      <td>Claims software development</td>
                                      <td>16/01/2020</td>
                                      <td>16/01/2020</td>
                                      <td>
                                         <div class="badge badge-pill badge-success">Approved</div>
                                      </td>
                                   </tr>
                                   <tr>
                                      <td>#1234</td>
                                      <td>
                                         <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-30 rounded-circle" src="{{  asset('images/user/05.jpg')}}" alt="">
                                            </a>
                                         </div>
                                      </td>
                                      <td>Mobile platform development</td>
                                      <td>16/01/2020</td>
                                      <td>16/01/2020</td>
                                      <td>
                                         <div class="badge badge-pill badge-success">Approved</div>
                                      </td>
                                   </tr>
                                   <tr>
                                      <td>#1234</td>
                                      <td>
                                         <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-30 rounded-circle" src="{{  asset('images/user/05.jpg')}}" alt="">
                                            </a>
                                         </div>
                                      </td>
                                      <td>Server Installation</td>
                                      <td>16/01/2020</td>
                                      <td>16/01/2020</td>
                                      <td>
                                         <div class="badge badge-pill badge-success">Approved</div>
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
