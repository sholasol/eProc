<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">Departmets Approval Limits</h4>
                         </div>
                      </div>
                      <div class="iq-card-body">
                         <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Department Head</th>
                                    <th>Approval Limit</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($depts as $key=>$dept)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $dept->name }}</td>
                                    <td>{{ $dept->fname.' '.$dept->lname  }}</td>
                                    <td>{{ $dept->approval }}</td>
                                    <td>{{ $dept->created_at->diffForHumans() }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Department Head</th>
                                    <th>Approval Limit</th>
                                    <th>Created</th>
                                </tr>
                            </tfoot>
                        </table>
                         </div>
                      </div>
                   </div>
          </div>
       </div>

    </div>
 </div>
