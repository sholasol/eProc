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
                    </div>
                </div>
            </div>
            {{-- @if (Auth::user()->utype =='USR')
            @else
            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Purchase Request</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        @if ($req->dept_approval =="")
                        <a wire:click="$set('method', 'approve')" class="btn btn-success">
                            <i class="fa fa-check text-white"></i><span class="text-white">Approve Now?</span>
                        </a>
                        <a wire:click="$set('method', 'revise')" class="btn btn-warning">
                            <i class="fa fa-refresh text-white"></i><span class="text-white">Send for Revision?</span>
                        </a>
                        <a wire:click="$set('method', 'decline')" class="btn btn-danger">
                            <i class="fa fa-times text-white"></i><span class="text-white">Decline Request?</span>
                        </a>
                        @else
                        <a class="btn btn-success">
                            <i class="fa fa-check text-white"></i><span class="text-white">Passed Dept. Approval</span>
                        </a>
                        @endif

                        @if ($method =="approve")
                        <div class="col-md-12" id="Approval">
                            <hr class="text-info">
                            <form wire:submit.prevent="approveRequest" enctype="multipart/form-data">
                                @csrf
                                <h4><b>Approve Request</b></h4>
                                <div class="row">
                                    <div class="col-md-12 d-none">
                                        <div class="form-group">
                                            <label>Action</label>
                                            <select class="form-control" wire:model="approval">
                                                <option>Approve</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Remark</label>
                                            <textarea class="form-control" wire:model="remark"></textarea>
                                            @error('remark')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="btn btn-success"
                                            wire:click.prevent="updateReq({{ $req->reqNo }})">Approve</a>
                                        <input type="submit" class="btn btn-success" value="Approve Request">
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif

                        @if ($method =="revise")
                        <div class="col-md-12" id="Approval">
                            <hr class="text-info">
                            <form wire:submit.prevent="reviseRequest" enctype="multipart/form-data">
                                @csrf
                                <h4><b>Send For Revision</b></h4>
                                <div class="row">
                                    <div class="col-md-12 d-none">
                                        <div class="form-group">
                                            <label>Action</label>
                                            <select class="form-control" wire:model="approval">
                                                <option>Revise</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Remark</label>
                                            <textarea class="form-control" wire:model="remark"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-warning" value="Send for Revision">
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif

                        @if ($method =="decline")
                        <div class="col-md-12" id="Approval">
                            <hr class="text-info">
                            <form wire:submit.prevent="declineRequest" enctype="multipart/form-data">
                                @csrf
                                <h4><b>Decline Request</b></h4>
                                <div class="row">
                                    <div class="col-md-12 d-none">
                                        <div class="form-group">
                                            <label>Action</label>
                                            <select class="form-control" wire:model="approval">
                                                <option>Decline</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Remark</label>
                                            <textarea class="form-control" wire:model="remark"></textarea>
                                            @error('remark')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-danger" value="Decline Request">
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endif --}}

            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="row">
                            <div class="col-sm-12 mt-3">
                                <h4 class="font-weight-bolder">Request Details</h4>
                                <div class="request_details">
                                    <div class="iq-card-body">
                                        <div class="table-responsive-sm">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>Pickup Location</th>
                                                    <td>{{ $req->from}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Destination</th>
                                                    <td>{{ $req->destination }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Date Required</th>
                                                    <td>{{ $req->req_date}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Time Required</th>
                                                    <td>{{ $req->req_time}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Additional Information</th>
                                                    <td>{{ $req->additional_information}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
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
