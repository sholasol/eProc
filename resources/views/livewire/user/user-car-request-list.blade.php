<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">My Car Request(s)</h4>
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
                            @if ($requests->count() >0 )
                            <table id="example" class="table table-striped table-bordered mt-4" role="grid"
                                aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Request&nbsp;No.</th>
                                        <th>Date&nbsp;Time&nbsp;Req.</th>
                                        <th>Pickup Location</th>
                                        <th>Destination</th>
                                        <th>Requested</th>
                                        <th width="3%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requests as $key => $request)
                                    <tr>
                                        <td class="text-center">{{ $key + 1}}</td>
                                        <td>
                                            {{$request->reqNo}}
                                        </td>
                                        <td>{{ $request->req_date. ' ' .$request->req_time }}</td>
                                        <td>{{ $request->from }}</td>
                                        <td>{{ $request->destination }}</td>
                                        <td>{{$request->created_at->format('Y-m-d')}}</td>
                                        <td>
                                            <div class="flex align-items-center list-user-action">
                                                <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                    title="View Request Items" data-original-title="Edit"
                                                    href="{{route('request.request-view-carrequest', ['reqNo'=>$request->reqNo])}}"><i
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
