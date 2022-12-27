<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Vehicle List ({{ $vehicles->count() }})</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table">
                            <div class="row justify-content-between">
                                <div class="col-sm-12 col-md-4">
                                    <div id="user_list_datatable_info" class="dataTables_filter">
                                        <form class="mr-3 position-relative">
                                            <div class="form-group mb-0">
                                                <input type="search" class="form-control" id="exampleInputSearch"
                                                    placeholder="Search" aria-controls="user-list-table">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid"
                                aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Img</th>
                                        <th>Vehicle No.</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Color</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Onboard Date</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehicles as $key => $veh )
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <img class="rounded-circle img-fluid avatar-40" src="
                                            <?php if(!empty($veh->vehicle_image) && file_exists('asset/image/vehicles/'.$veh->vehicle_image)){
                                                echo asset('asset/image/vehicles').'/'.$veh->vehicle_image;
                                            } else{ echo asset('asset/image/vehicles/dummy.png');} ?>" alt="profile">
                                        </td>
                                        <td>{{ $veh->vno }}</td>
                                        <td>{{ $veh->name }}</td>
                                        <td>{{ number_format($veh->price, 2) }}</td>
                                        <td>
                                            <span class="badge" style="background-color: {{ $veh->color }}; color: black !important;">
                                                {{ $veh->color }}
                                            </span>
                                        </td>
                                        <td>{{ $veh->type }}</td>
                                        <td>{{ $veh->status }}</td>
                                        <td>{{ $veh->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="flex align-items-center list-user-action">
                                                <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Details"
                                                    href="{{ route('h-r.viewvehicle', ['vid'=>$veh->id]) }}">
                                                    <i class="ri-eye-fill text-white"></i>
                                                </a>
                                                <a class="{{ $veh->status == "Active" ? 'bg-info' : 'bg-warning' }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ $veh->status == "Active" ? 'De-activate' : 'Activate' }} Vehicle"
                                                    href="javascript:void(0)"
                                                    onclick="confirm('Are you sure, you want to de-activate this vehicle?') || event.stopImmediatePropagation()"
                                                    wire:click.prevent="deactVehicle({{ $veh->id }})">
                                                    <i class="ri-pencil-line text-white"></i>
                                                </a>
                                                <a class="bg-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                                    href="javascript:void();"
                                                    onclick="confirm('Are you sure, you want to delete this vehicle?') || event.stopImmediatePropagation()"
                                                    wire:click.prevent="deleteVehicle({{ $veh->id }})">
                                                    <i class="ri-delete-bin-line text-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                {{ $vehicles->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @push('scripts') --}}
<script>
    // $(document).ready(function(){
    //     // $(".relative a").each(function () {
    //     //     console.log($(this).attr('href'));

    //     // })
    //     $(".relative a").on("click", function (e) {
    //         e.preventDefault();
    //         let vt = $(this).attr('href');
    //         let num = vt.split("=")
    //         let fin = vt.slice(-1);
    //         // console.log(fin)
    //         window.location.href = "/system/system-users?page="+fin
    //     })
    // })
</script>
{{-- @endpush --}}
