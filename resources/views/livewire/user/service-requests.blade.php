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
                            @if ($requests->count() >0 )
                            <table id="example" class="table table-striped table-bordered mt-4" role="grid"
                                aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Request No.</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th width="5%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requests as $key=> $request)
                                    <tr>
                                        <td class="text-center">{{ $key + 1}}</td>
                                        <td>
                                            {{$request->reqNo}}
                                            @if ($request->dept_approval=="")
                                            <p class="text-danger">{{$request ->dept_remark}}</p>
                                            @else
                                            <p class="text-primary">{{$request ->dept_remark}}</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($request->tran_approval=="Approved")
                                                <span class='text-success'>{{$request->tran_approval}}</span>
                                            @elseif ($request->tran_approval=="Declined")
                                                <span class='text-danger'>{{$request->tran_approval}}</span>
                                            @elseif ($request->tran_approval=="Revised")
                                                <span class='text-warning'>{{$request->tran_approval}}</span>
                                            @else
                                                <span class='text-info'>Awaiting</span>
                                            @endif
                                        </td>
                                        <td>{{$request ->created_at->diffForHumans()}}</td>
                                        <td>
                                            <div class="flex align-items-center list-user-action">
                                                <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                    title="View Request Items" data-original-title="Edit"
                                                    href="{{route('request.carservicerequest', ['reqNo'=>$request->reqNo])}}"><i
                                                        class="fa fa-file"></i></a>
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
