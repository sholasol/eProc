<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Approval Workflow</h4>
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
                            <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting Dept.
                                Approval</span>
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
                            <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting Proc.
                                Approval</span>
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
                            <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting Finn.
                                Approval</span>
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
                            <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting CFO.
                                Approval</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








{{-- <div wire:ignore.self id="form" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Request Approval</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="approveRequest" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Remark</label>
                                <textarea class="form-control" wire:model.defer="remark"></textarea>
                                @error('remark')<p style="color: crimson;">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" value="Approve">
                </div>
            </form>
        </div>
    </div>
</div> --}}

@push('scripts')
<script>
    function approvalFunction() {
        var x = document.getElementById("Approval");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
        }
</script>
@endpush
