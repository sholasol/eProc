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


            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Pool Car Request</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        @if ($req->dept_approval =="")
                            <a wire:click="$set('method', 'approve')" class="btn btn-success">
                                <i class="fa fa-check text-white"></i><span class="text-white">Approve Now?</span>
                            </a>
                            <a wire:click="$set('method', 'decline')" class="btn btn-danger">
                                <i class="fa fa-times text-white"></i><span class="text-white">Decline Request?</span>
                            </a>
                        @else
                            <a class="btn btn-success">
                                <i class="fa fa-check text-white"></i><span class="text-white">Passed Dept. Approval</span>
                            </a>
                            <hr>
                            <h4>My Remark</h4>
                            <p>{{ $req->dept_remark }}</p>
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
                                                <img wire:loading class="hideImg" src="{{ asset('asset/prldr.gif') }}"
                                                    alt="Preloader Image">
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-success" wire:loading.attr="disabled"
                                            value="Approve Request">
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
                                                <img wire:loading class="hideImg" src="{{ asset('asset/prldr.gif') }}"
                                                    alt="Preloader Image">
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



            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="font-weight-bolder">User Profile</h4>
                                <div class="iq-card-body">
                                    <div class="user_details">
                                        <div class="user_image">
                                            <img style="width:200px;height:200px;"
                                                class="rounded-circle img-fluid avatar-40" src="<?php if(!empty($req->profile_img) && file_exists('asset/image/users/'.$req->profile_img)){
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
