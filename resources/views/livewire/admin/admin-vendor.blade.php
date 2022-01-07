<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">Vendor List</h4>
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
                                   <th>#</th>
                                  <th>Vendor</th>
                                  <th>Phone</th>
                                  <th>Email</th>
                                  <th>Status</th>
                                  <th>Contact</th>
                                  <th>Join Date</th>
                                  <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($vends as $key=> $vend)
                               <tr>
                                <td>{{ $key + 1}}</td>
                                <td>{{$vend->company}}</td>
                                <td>{{$vend->cphone}}</td>
                                <td>{{$vend->cemail}}</td>
                                <td>
                                    @if ($vend->status =="Approved")
                                        <span class="badge iq-bg-success">{{$vend->status}}</span>
                                    @endif
                                    @if ($vend->status =="Pending")
                                        <span class="badge iq-bg-warning">{{$vend->status}}</span>
                                    @endif
                                    @if ($vend->status =="Declined")
                                        <span class="badge iq-bg-danger">{{$vend->status}}</span>
                                    @endif

                                </td>
                                <td>{{$vend->fname.' '.$vend->lname}}</td>
                                <td>{{$vend->created_at->diffForHumans()}}</td>
                                <td>
                                   {{-- <div class="flex align-items-center list-user-action">
                                      <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                      <a class="iq-bg-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                   </div> --}}
                                   <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <div class="btn-group" role="group">
                                       <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Action
                                       </button>
                                       <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#" onclick="confirm('Are you sure, you want to approve this vendor?') ||event.stopImmediatePropagation()" wire:click.prevent="updateVen({{ $vend->id }})"> Approve Vendor</a>
                                        <a class="dropdown-item" href="" onclick="confirm('Are you sure, you want to decline this vendor?') ||event.stopImmediatePropagation()" wire:click.prevent="declineVen({{ $vend->id }})"> Decline Vendor</a>
                                       </div>
                                    </div>
                                 </div>
                                </td>
                             </tr>
                               @endforeach

                           </tbody>
                         </table>
                      </div>
                         <div class="row justify-content-between mt-3">
                            <div id="user-list-page-info" class="col-md-6">
                               <span>Showing 1 to 1 of 5 entries</span>
                            </div>
                            <div class="col-md-6">
                               <nav aria-label="Page navigation example">
                                  <ul class="pagination justify-content-end mb-0">
                                     <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                     </li>
                                     <li class="page-item active"><a class="page-link" href="#">1</a></li>
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
