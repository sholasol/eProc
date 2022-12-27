<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">Purchase Request</h4>
                      </div>
                   </div>
                   <div class="iq-card-body">
                    @if ($req->dept_approval =="Approved")
                    <a class="btn btn-success">
                        <i class="fa fa-check text-white"></i><span class="text-white">Passed Dept. Approval</span>
                    </a>
                    @elseif ($req->dept_approval =="Revised")
                    <a class="btn btn-warning">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Revise Request</span>
                    </a>
                    @elseif ($req->dept_approval =="Declined")
                    <a class="btn btn-danger">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Request Declined</span>
                    </a>
                    @else
                    <a class="btn btn-danger">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting Dept. Approval</span>
                    </a>
                    @endif

                    @if ($req->proc_approval =="Approved")
                    <a class="btn btn-success">
                        <i class="fa fa-check text-white"></i><span class="text-white">Passed Proc. Approval</span>
                    </a>
                    @elseif ($req->proc_approval =="Revised")
                    <a class="btn btn-warning">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Revise Request</span>
                    </a>
                    @elseif ($req->proc_approval =="Declined")
                    <a class="btn btn-danger">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Request Declined</span>
                    </a>
                    @else
                    <a class="btn btn-danger">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting Proc. Approval</span>
                    </a>
                    @endif

                    @if ($req->fin_approval =="Approved")
                    <a class="btn btn-success">
                        <i class="fa fa-check text-white"></i><span class="text-white">Passed Finn. Approval</span>
                    </a>
                    @elseif ($req->fin_approval =="Revised")
                    <a class="btn btn-warning">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Revise Request</span>
                    </a>
                    @elseif ($req->fin_approval =="Declined")
                    <a class="btn btn-danger">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Request Declined</span>
                    </a>
                    @else
                    <a class="btn btn-danger">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting Finn. Approval</span>
                    </a>
                    @endif

                    @if ($req->cfo_approval =="Approved")
                    <a class="btn btn-success">
                        <i class="fa fa-check text-white"></i><span class="text-white">Passed CFO. Approval</span>
                    </a>
                    @elseif ($req->cfo_approval =="Revised")
                    <a class="btn btn-warning">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Revise Request</span>
                    </a>
                    @elseif ($req->cfo_approval =="Declined")
                    <a class="btn btn-danger">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Request Declined</span>
                    </a>
                    @else
                    <a class="btn btn-danger">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting CFO. Approval</span>
                    </a>
                    @endif

                    @if ($req->final_approval =="")
                    <a class="btn btn-danger">
                        <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting
                            Delivery</span>
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
