<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="col-md-12 iq-header-title d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Status Car List</h4>
                        <a href="{{ route('h-r.onboard', ['stat'=>'status']) }}" style="position:fixed;right:45px;z-index:1000;"
                            class="btn btn-primary iq-waves-effect">Add Vehicle</a>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex flex-wrap">
                            @foreach ($statuscars as $status)
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="ais-Hits-item iq-product-item iq-card">
                                        <div class="text-center">
                                            <a href="javascript:void(0)">
                                                <div class="h-56 d-flex align-items-center justify-content-center bg-white iq-border-radius-15">
                                                    <img class="w-100 h-100" style="border-radius:15px 15px 0 0" src="
                                                    @if (file_exists("{{ asset('asset/image/vehicles') }}/{{ $status->vehicle_image }}"))
                                                        {{ asset('asset/image/vehicles/') }}/{{ $status->vehicle_image }}
                                                    @else
                                                        {{ asset('asset/image/vehicles/') }}/{{ $status->vehicle_image }}
                                                    @endif
                                                    " alt="" align="left">
                                                </div>
                                            </a>
                                            <div class="card-body">
                                                <div class="text-justify">
                                                    <a href="javascript:void(0)" class="text-capitalize">{{ $status->name }}</a>
                                                    <div class="d-flex justify-content-between align-items-center text-capitalize">
                                                        <span class="font-size-16">No.:</span>
                                                        <span>{{ $status->vno }}</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center text-capitalize">
                                                        <span class="font-size-16">Color:</span>
                                                        <span>{{ $status->color }}</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center text-capitalize">
                                                        <span class="font-size-16">Status:</span>
                                                        <span class="{{ $status->status == 'Active' ? 'badge bg-success' : 'badge bg-primary'  }}">{{ $status->status }}</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center my-2">
                                                    <div>
                                                        {{-- <a href="" class="text-white btn btn-primary iq-waves-effect" style="padding: .25rem .16rem .25rem .5rem;" data-toggle="tooltip" data-placement="top" data-original-title="View Schedule">
                                                            <i class="las la-list-ul"></i>
                                                        </a> --}}
                                                        <a href="{{ route('h-r.viewvehicle', ['vid'=>$status->id]) }}" class="text-white btn btn-primary iq-waves-effect" style="padding: .25rem .16rem .25rem .5rem;" data-toggle="tooltip" data-placement="top" data-original-title="Edit Vehicle">
                                                            <i class="las la-cog"></i>
                                                        </a>
                                                    </div>
                                                    <p class="font-size-16 font-weight-bold float-right"><b>N</b>{{ number_format($status->price,2) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $statuscars->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
