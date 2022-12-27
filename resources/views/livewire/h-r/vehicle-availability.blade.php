<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="col-md-12 iq-header-title d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Pool Car Availability</h4>
                        <a href="{{ route('h-r.onboard', ['stat'=>'pool']) }}"
                            style="position:fixed;right:45px;z-index:1000;" class="btn btn-primary iq-waves-effect">Add
                            Vehicle</a>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex flex-wrap">
                            @foreach ($availCars as $ac)
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="ais-Hits-item iq-product-item iq-card">
                                    <div class="text-center">
                                        <a href="javascript:void(0)">
                                            <span style="position:absolute;left:34px;">
                                                <span class="badge badge-success">
                                                    {{ $ac->vno }}
                                                </span>
                                            </span>
                                            <div
                                                class="h-56 d-flex align-items-center justify-content-center bg-white iq-border-radius-15">
                                                <img class="w-100 h-100" style="border-radius:15px 15px 0 0" src="
                                                @if (file_exists(" {{ asset('asset/image/vehicles') }}/{{ $ac->vehicle_image }}"))
                                                    {{ asset('asset/image/vehicles/') }}/{{ $ac->vehicle_image }}
                                                @else
                                                    {{ asset('asset/image/vehicles/') }}/{{ $ac->vehicle_image }}
                                                @endif
                                                " alt="" align="left">
                                            </div>
                                        </a>
                                        <div class="card-body">
                                            <div class="text-justify">
                                                <a href="javascript:void(0)" class="text-capitalize">{{ $ac->name }}</a>
                                                <div class="row">
                                                    @livewire('h-r.avail-calculator', ['cid'=>$ac->id])
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
