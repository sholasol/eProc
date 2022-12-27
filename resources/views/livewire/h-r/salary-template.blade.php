<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Salary Template List</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <div class="row justify-content-between">
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
                                        <a class="iq-bg-primary" href="{{route('h-r.createsalarytemplate')}}">
                                            Set New Salary
                                        </a>

                                        <!-- <a class="iq-bg-primary" href="javascript:void();">
                                       Excel
                                     </a>
                                     <a class="iq-bg-primary" href="javascript:void();">
                                       Pdf
                                     </a> -->
                                    </div>
                                </div>
                            </div>
                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid"
                                aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>

                                        <th>SN</th>
                                        <th>Salary Grade</th>
                                        <th>Basic Salary(₦)</th>
                                        <th>Tax</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($temps as $key => $temp )
                                        <tr>
                                            <td>
                                                {{$key + 1}}
                                            </td>
                                            <td>
                                               {{$temp->name}}
                                            </td>
                                            <td>
                                                {{$temp->amount}}
                                            </td>
                                            <td>
                                                {{$temp->tax}}%
                                            </td>
                                            <td>
                                                {{$temp->created_at->DiffForHumans()}}
                                            </td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-info" href="{{route('h-r.SalaryTemplateDetails', ['code'=>$temp->uniqcode])}}"><i class="fa fa-file text-success"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-between mt-3">
                            {{-- <div id="user-list-page-info" class="col-md-6">

                                <span>Showing 1 to 5 of 5 entries</span>
                            </div>
                            <div class="col-md-6">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> --}}
                            {{$temps->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Wrapper END -->

