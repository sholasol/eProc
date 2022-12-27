<div id="content-page" class="content-page">

    <div wire:loading wire:target="approveRequest" class="preloading">
        <div>
            <img wire:loading class="hideImg" src="{{ asset('asset/prldr.gif') }}" alt="Preloader Image">
        </div>
    </div>

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
                    </div>
                </div>
            </div>
            @if (Auth::user()->utype =='USR')
            @else
            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Travel Expense Request</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        @if ($req->dept_approval =="")
                        {{-- <a wire:click.prevent="AddNew" class="btn btn-danger" href="javascript:void(0);">
                            <i class="fa fa-check text-white"></i><span class="text-white">Approval Now?</span>
                        </a> --}}
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
                                        <div wire:loading wire:target="approveRequest" class="preloading">
                                            <div>
                                                <img wire:loading class="hideImg" src="{{ asset('asset/prldr.gif') }}" alt="Preloader Image">
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-success" wire:loading.attr="disabled" value="Approve Request">
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
                                            @error('remark')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div wire:loading wire:target="reviseRequest" class="preloading">
                                            <div>
                                                <img wire:loading class="hideImg" src="{{ asset('asset/prldr.gif') }}" alt="Preloader Image">
                                            </div>
                                        </div>
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
                                        <div wire:loading wire:target="declineRequest" class="preloading">
                                            <div>
                                                <img wire:loading class="hideImg" src="{{ asset('asset/prldr.gif') }}" alt="Preloader Image">
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-danger" value="Decline Request">
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endif



            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="font-weight-bolder">User Profile</h4>
                                <div class="iq-card-body">
                                    <div class="user_details">
                                        <div class="user_image">
                                            <img style="width:200px;height:200px;" class="rounded-circle img-fluid avatar-40"
                                            src="<?php if(!empty($req->profile_img) && file_exists('asset/image/users/'.$req->profile_img)){
                                                            echo asset('asset/image/users').'/'.$req->profile_img;
                                                        } else{ echo asset('asset/image/users/dummy.png');} ?>"
                                            alt="profile">
                                        </div>
                                        <div class="text__dets mt-2" style="gap:10px;">
                                            <h5>
                                                <b>Name:</b>
                                                {{ $req->fname }}&nbsp;{{$req->lname }}
                                            </h5>
                                            <h5>
                                                <b>Department:</b>
                                                {{ $req->name }}
                                            </h5>
                                            <h5>
                                                <b>Email Address:</b>
                                                {{ $req->email }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <h4 class="font-weight-bolder">Request Details</h4>
                                <div class="request_details">
                                    <div class="iq-card-body">
                                        <div class="table-responsive-sm">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>Destination</th>
                                                    <td>{{ $req->destination }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Duration</th>
                                                    <td>{{ $req->duration}}&nbsp;{{ $req->duration > 1 ? 'days' : 'day' }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Departure</th>
                                                    <td>{{ $req->departure }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Return Date</th>
                                                    <td>{{ \Carbon\Carbon::parse($req->return_date)->format('Y-m-d') }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Total Expense</th>
                                                    <td><b>&#8358;</b>{{ number_format($req->total_expense,2) }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Bank Name</th>
                                                    <td>{{ $req->bank }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Account Number</th>
                                                    <td>{{ $req->acc_no }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Account Name</th>
                                                    <td>{{ $req->acc_name }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="note">
                                        <h5 style="color:crimson;">Additional Information</h5>
                                        <p style="font-size: calc(100% + 2px)">{{ $req->additional_information }}</p>
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
