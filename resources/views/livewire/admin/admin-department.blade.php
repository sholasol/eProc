<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">Departments</h4>
                         </div>
                      </div>
                      <div class="iq-card-body">
                         <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Created</th>
                                    @if (Auth::user()->utype==="ADM" || Auth::user()->utype==="HRM")
                                        <th width="5%"></th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($depts as $key=>$dept)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $dept->name }}</td>
                                    <td>{{ $dept->created_at->diffForHumans() }}</td>
                                    @if (Auth::user()->utype==="ADM" || Auth::user()->utype==="HRM")
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <a class="dropdown-item"
                                                            href="{{ route('system.system-approvallimit', ['dept_id'=>$dept->id])  }}">Edit Department</a>
                                                        <a class="dropdown-item" href="#" onclick="confirm('Are you sure, you want to delete this department?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteDept({{ $dept->id }})">
                                                            Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                         </div>
                      </div>
                   </div>
          </div>
       </div>

    </div>
 </div>
