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
                        @if ($req->tran_approval =="Approved")
                            <a class="btn btn-success">
                                <i class="fa fa-check text-white"></i><span class="text-white">Passed Tran. Approval</span>
                            </a>
                        @elseif ($req->tran_approval =="Declined")
                            <a class="btn btn-danger">
                                <i class="fa fa-exclamation text-white"></i><span class="text-white">Request Declined</span>
                            </a>
                        @else
                            <a class="btn btn-danger">
                                <i class="fa fa-exclamation text-white"></i><span class="text-white">Awaiting Tran.
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
                            <h4 class="card-title">Car Service Request</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        @if ($req->tran_approval ==="Approved" )
                        <div class="iq-card">
                            <div class="col-md-12">
                                <h4>Garage:</h4>
                                {{ $req->garage }}
                            </div>
                            <div class="col-md-12">
                                <h4>Instruction:</h4>
                                {{ $req->tran_remark }}
                            </div>
                        </div>
                        @elseif ($req->tran_approval ==="Declined")
                            <h4>H.O.D Remark</h4>
                            <p>
                                {{ $req->tran_remark }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>

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
                                                    <th>Vehicle No.</th>
                                                    <td>{{ $req->vehicle_no }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Date Required.</th>
                                                    <td>{{ $req->req_date }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Additional Information</th>
                                                    <td>{{ $req->additional_information }}</td>
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
