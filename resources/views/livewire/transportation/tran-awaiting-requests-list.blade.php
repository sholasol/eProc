<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Request for Quote</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table">
                            {{-- <div class="row justify-content-between">
                                <div class="col-sm-12 col-md-6">
                                    <div id="user_list_datatable_info" class="dataTables_filter">
                                        <form class="mr-3 position-relative">
                                            <div class="form-group mb-0">
                                                <input type="search" class="form-control" id="exampleInputSearch"
                                                    placeholder="Search" aria-controls="user-list-table">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="user-list-files d-flex float-right">
                                        <a class="iq-bg-primary" href="javascript:void();">
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
                            </div> --}}
                            @if ($requests->count() > 0)
                            <table id="example" class="table table-striped table-bordered mt-4" role="grid"
                                aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>
                                        <th width="5%">Profile</th>
                                        <th>User</th>
                                        <th>Request No.</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th width="5%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requests as $req)
                                    <tr>
                                        <td class="text-center">
                                            <img class="rounded-circle img-fluid avatar-40" src="
                                            <?php if(!empty($req->profile_img) && file_exists('asset/image/users/'.$req->profile_img)){
                                                    echo asset('asset/image/users').'/'.$req->profile_img;
                                                } else{ echo asset('asset/image/users/dummy.png');} ?>"
                                            alt="profile">
                                        </td>
                                        <td>{{ $req->fname . ' ' . $req->lname }}</td>
                                        <td>
                                            {{$req->reqNo}}
                                            @if ($req->dept_approval=="")
                                            <p class="text-danger">{{$req ->dept_remark}}</p>
                                            @else
                                            <p class="text-primary">{{$req ->dept_remark}}</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($req->tran_approval=="Approved")
                                                <span class='text-success'>{{$req->tran_approval}}</span>
                                            @elseif ($req->tran_approval=="Declined")
                                                <span class='text-danger'>{{$req->tran_approval}}</span>
                                            @elseif ($req->tran_approval=="Revised")
                                                <span class='text-warning'>{{$req->tran_approval}}</span>
                                            @else
                                                <span class='text-info'>Awaiting</span>
                                            @endif
                                        </td>
                                        <td>{{$req->created_at->diffForHumans()}}</td>
                                        <td>
                                            <div class="flex align-items-center list-user-action">
                                                <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                    title="View Request Items" data-original-title="Edit"
                                                    href="{{route('transport.awaiting-servicerequests', ['reqNo'=>$req->reqNo])}}"><i class="fa fa-file"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="d-flex justify-content-center align-items-enter">
                                <img width="550px" src="{{ asset('asset/no-record.png') }}">
                            </div>
                            @endif
                        </div>
                        {{-- <div class="row">
                            {{ $requests->links() }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
