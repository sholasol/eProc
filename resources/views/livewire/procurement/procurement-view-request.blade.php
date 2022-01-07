<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">Purchase Request </h4>
                      </div>
                   </div>
                   <div class="iq-card-body">
                            @if ($req->dept_approval =="")
                            {{-- <a wire:click.prevent="AddNew"  class="btn btn-danger" href="javascript:void(0);">
                                <i class="fa fa-check text-white"></i><span class="text-white">Approval Now?</span>
                            </a> --}}
                            <a class="btn btn-danger" onclick="confirm('Are you sure, you want to approve this request?') || event.stopImmediatePropagation()" wire:click.prevent="approvalProcess({{ $req->reqNo}})">
                                <i class="fa fa-check text-white"></i><span class="text-white">Approval Now?</span>
                            </a>
                            @else
                            <a class="btn btn-success">
                                <i class="fa fa-check text-white"></i><span class="text-white">Passed Dept. Approval</span>
                            </a>
                            @endif

                            @if ($req->proc_approval =="")
                                <a class="btn btn-danger">
                                    <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting Proc. Approval</span>
                                </a>
                            @else
                            <a class="btn btn-success">
                                <i class="fa fa-check text-white"></i><span class="text-white">Passed Proc. Approval</span>
                            </a>
                            @endif

                            @if ($req->fin_approval =="")
                                <a class="btn btn-danger">
                                    <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting Finn. Approval</span>
                                </a>
                            @else
                            <a class="btn btn-success">
                                <i class="fa fa-check text-white"></i><span class="text-white">Passed Finn. Approval</span>
                            </a>
                            @endif

                            @if ($req->cfo_approval =="")
                                <a class="btn btn-danger">
                                    <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting CFO Approval</span>
                                </a>
                            @else
                            <a class="btn btn-success">
                                <i class="fa fa-check text-white"></i><span class="text-white">Passed CFO Approval</span>
                            </a>
                            @endif

                            @if ($req->final_approval =="")
                                <a class="btn btn-danger">
                                    <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting Delivery</span>
                                </a>
                            @else
                            <a class="btn btn-success">
                                <i class="fa fa-check text-white"></i><span class="text-white">Request Delivered</span>
                            </a>
                            @endif
                   </div>
                </div>
            </div>



            <div class="col-sm-12">
                <div class="iq-card">

                    <div class="iq-card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>Request Summary</h5>
                                <div class="table-responsive-sm">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">#</th>
                                                <th scope="col">Item</th>
                                                <th class="text-center" scope="col">Quantity</th>
                                                <th class="text-center" scope="col">description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($details as $key=> $detail )
                                            <tr>
                                                <th class="text-center" scope="row">{{$key + 1 }}</th>
                                                <td>
                                                    <h6 class="mb-0">{{$detail->item}}</h6>
                                                </td>
                                                <td class="text-center">{{$detail->quantity}}</td>
                                                <td>
                                                    <p class="mb-0">{{$detail->description}}</p>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6"></div>
                            {{-- <div class="col-sm-6 text-right">
                                <button type="button" class="btn btn-primary"><i class="ri-printer-line"></i> Print</button>
                            </div> --}}
                            <div class="col-sm-12 mt-5">
                                <b class="text-danger">Notes:</b>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                        </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>








<div  wire:ignore.self id="form" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title">Modal title</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">
             <p>
                 <a class="btn btn-success text-white btn-block" onclick="confirm('Are you sure, you want to approve this request?') ||event.stopImmediatePropagation()" wire:click.prevent="approvalProcess({{ $req->reqNo}})">
                     Approve this Request?
                    </a>
                </p>
             <p><a class="btn btn-warning text-white btn-block">Send Request for revision?</a></p>
             <p><a class="btn btn-danger text-white btn-block">Decline this Request?</a></p>
          </div>
          {{-- <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary">Save changes</button>
          </div> --}}
       </div>
    </div>
 </div>
