<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">All Request</h4>
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
                                        <th>Profile</th>
                                        <th>User</th>
                                        <th>ReqNo</th>
                                        <th>Date&nbsp;Time&nbsp;Req.</th>
                                        <th>Destination</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requests as $req)
                                    <tr>
                                        <td class="text-center">
                                            <img class="rounded-circle img-fluid avatar-40" src="
                                            <?php if(!empty($req->profile_img) && file_exists('asset/image/users/'.$req->profile_img)){
                                                    echo asset('asset/image/users').'/'.$req->profile_img;
                                                } else{ echo asset('asset/image/users/dummy.png');} ?>" alt="profile">
                                        </td>
                                        <td>{{ $req->fname . ' ' . $req->lname }}</td>
                                        <td>{{ $req->reqNo }}</td>
                                        <td>{{ $req->req_date. ' '. $req->req_time }}</td>
                                        <td>{{ $req->destination }}</td>
                                        <td>
                                            @if ($req->dept_approval=="Approved")
                                                <span class='text-success'>{{$req->dept_approval}}</span>
                                            @elseif ($req->dept_approval=="Declined")
                                                <span class='text-danger'>{{$req->dept_approval}}</span>
                                            @elseif ($req->dept_approval=="Revised")
                                                <span class='text-warning'>{{$req->dept_approval}}</span>
                                            @else
                                                <span style='color: blue;'>Awaiting</span>
                                            @endif
                                        </td>
                                        <td>{{ $req->created_at->format('Y-m-d') }}</td>
                                        <td width="5%">
                                            <div class="btn-group" role="group"
                                                aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <a id="btnGroupDrop1" type="button" class="btn btn-primary"
                                                        href="{{ route('system.request-view-carrequest',['reqNo'=>$req->reqNo]) }}"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-file"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="d-flex justify-content-center align-items-center">
                                <img width="550px" src="{{ asset('asset/no-record.png') }}">
                            </div>
                            @endif
                        </div>
                        <div class="row">
                            {{ $requests->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
