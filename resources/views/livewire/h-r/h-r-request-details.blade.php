<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">Purchase Request {{Auth::user()->id}}</h4>
                      </div>
                   </div>
                   <div class="iq-card-body">
                            @if ($req->dept_approval =="")
                            {{-- <a wire:click.prevent="AddNew"  class="btn btn-danger" href="javascript:void(0);">
                                <i class="fa fa-check text-white"></i><span class="text-white">Approval Now?</span>
                            </a> --}}
                            <a wire:click="$set('approve', true)" class="btn btn-success">
                                <i class="fa fa-check text-white"></i><span class="text-white">Approve Now?</span>
                            </a>
                            <a wire:click="$set('revise', true)" class="btn btn-primary" >
                                <i class="fa fa-check text-white"></i><span class="text-white">Send for Revision?</span>
                            </a>
                            <a wire:click="$set('decline', true)" class="btn btn-danger">
                                <i class="fa fa-check text-white"></i><span class="text-white">Decline Request?</span>
                            </a>
                            @else
                            <a class="btn btn-success">
                                <i class="fa fa-check text-white"></i><span class="text-white">Passed Dept. Approval</span>
                            </a>
                            @endif

                            @if ($approve)
                            <div class="col-md-12" id="Approval">
                                <hr class="text-info">
                                <form wire:submit.prevent="approveRequest"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
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
                                             <textarea class="form-control"  wire:model="remark"></textarea>
                                             @error('remark')<p style="color: crimson;">{{ $message }}</p> @enderror
                                            </div>
                                         </div>
                                         <div class="col-md-12">
                                             {{-- <a href="" class="btn btn-success" wire:click.prevent="updateReq({{ $req->reqNo }})">Approve</a> --}}
                                             <input type="submit" class="btn btn-success" value="Approve">
                                         </div>
                                     </div>
                                </form>
                            </div>
                            @endif

                            @if ($revise)
                            <div class="col-md-12" id="Approval">
                                <hr class="text-info">
                                <form wire:submit.prevent="reviseRequest"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
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
                                             <textarea class="form-control"  wire:model="remark"></textarea>
                                            </div>
                                         </div>
                                         <div class="col-md-12">
                                             <input type="submit" class="btn btn-warning" value="Send for Revision">
                                         </div>
                                     </div>
                                </form>
                            </div>
                            @endif

                            @if ($decline)
                            <div class="col-md-12" id="Approval">
                                <hr class="text-info">
                                <form wire:submit.prevent="declineRequest"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
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
                                             <textarea class="form-control"  wire:model="remark"></textarea>
                                             @error('remark')<p style="color: crimson;">{{ $message }}</p> @enderror
                                            </div>
                                         </div>
                                         <div class="col-md-12">
                                             <input type="submit" class="btn btn-success" value="Decline Request">
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

                            {{-- <div class="col-sm-12 mt-5">
                                <b class="text-danger">Remark:</b>
                                @if ($rem->dept_approval=="")
                                    <p class="text-danger">{{$rem ->dept_remark}}</p>
                                @else
                                    <p class="text-primary">{{$rem ->dept_remark}}</p>
                                @endif
                            </div> --}}
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>








{{-- <div  wire:ignore.self id="form" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title">Request Approval</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <form wire:submit.prevent="approveRequest"  enctype="multipart/form-data">
            @csrf
          <div class="modal-body">
             <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                     <label>Remark</label>
                     <textarea class="form-control"  wire:model.defer="remark"></textarea>
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
