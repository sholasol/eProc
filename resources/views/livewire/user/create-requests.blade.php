<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <ul id="top-tab-list" class="p-0 d-flex flex-wrap">
                            <li class="{{ $this->mode === "item" ? 'active' : '' }}" id="account" style="">
                                <a href="javascript:void();" wire:click="$set('mode', 'item')" style="width:250px;">
                                    <i class="las la-cart-arrow-down"></i><span>Purchase&nbsp;Request</span>
                                </a>
                            </li>
                            @if (Auth::user()->utype==="TRN" || Auth::user()->department=="6")
                            <li class="{{ $this->mode === "service" ? 'active' : '' }}" id="account" style="">
                                <a href="javascript:void();" wire:click="$set('mode', 'service')" style="width:250px;">
                                    <i class="las la-cart-arrow-down"></i><span>Car&nbsp;Service</span>
                                </a>
                            </li>
                            @endif
                            <li class="{{ $this->mode === "travel" ? 'active' : '' }}" id="account">
                                <a href="javascript:void();" wire:click="$set('mode', 'travel')">
                                    <i class="las la-cart-arrow-down"></i><span>Travel&nbsp;Expense</span>
                                </a>
                            </li>
                            <li class="{{ $this->mode === "carrequest" ? 'active' : '' }}" id="account">
                                <a href="javascript:void();" wire:click="$set('mode', 'carrequest')">
                                    <i class="las la-cart-arrow-down"></i><span>Car&nbsp;Request</span>
                                </a>
                            </li>
                        </ul>
                        @if ($this->mode)
                            @if ($this->mode === "service")
                                <form wire:submit.prevent="serviceCar" id="form-wizard1" class="text-center mt-1"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-card text-left">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="mb-4">Car Servicing Form:</h3>
                                            </div>
                                        </div>
                                        <hr class="text-info">
                                        {{-- <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Service Name</label>
                                                    <select class="form-control" wire:model="service_name">
                                                        <option value=""> -- choose --</option>
                                                        <option value="car_service">Car Service Request</option>
                                                    </select>
                                                    <input type="text" class="form-control" wire:model="service_name" />
                                                    @error('service_name')<p style="color: crimson;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Vehicle No.</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter vehicle number..." wire:model="vehicle_number" />
                                                    @error('vehicle_number')<p style="color: crimson;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Date Required</label>
                                                    <input type="date" class="form-control" wire:model="service_date" />
                                                    @error('service_date')<p style="color: crimson;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Additional Information</label>
                                                    <textarea class="form-control" cols="10" rows="5"
                                                        wire:model="service_additional_information"></textarea>
                                                    @error('service_additional_information')<p style="color: crimson;">{{
                                                        $message }}</p> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div wire:loading wire:target="serviceCar" class="preloading">
                                                <div>
                                                    <img wire:loading class="hideImg" src="{{ asset('asset/prldr.gif') }}" alt="Preloader Image">
                                                </div>
                                            </div>
                                            <button type="submit" name="next"
                                                class="btn btn-primary next action-button float-right"
                                                value="Submit">Submit</button>
                                            <button type="reset" name="next"
                                                class="btn btn-primary next action-button float-right"
                                                value="Reset">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            @elseif ($this->mode === "item")
                                <form wire:submit.prevent="itemRequest" id="form-wizard1" class="text-center mt-1"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-card text-left">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="mb-4">Purchase Request Form:</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            {{-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Location: </label>
                                                    <input type="text" class="form-control" placeholder="Head Quarter"
                                                        wire:model="location" />
                                                    @error('location')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                </div>
                                            </div> --}}

                                        </div>
                                        <hr class="text-info">
                                        <div class="row">
                                            <div class="col-10">
                                                <h3 class="mb-4">Order Items</h3>
                                            </div>
                                            <div class="col-2">
                                                <a href="#" wire:click.prevent="AddNew({{ $i }})"><i
                                                        class="fa fa-plus-circle"></i> Add new</a>
                                            </div>
                                        </div>
                                        <hr class="text-info">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Item Name</label>
                                                    <input type="text" class="form-control" wire:model="item.0" />
                                                    @error('item.0')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Qty</label>
                                                    <input type="number" class="form-control" wire:model="qty.0" />
                                                    @error('qty.0')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control" wire:model="description.0" />
                                                    @error('description.0')<p style="color: crimson;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        @foreach ($inputs as $key => $value )
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Item Name</label>
                                                    <input type="text" class="form-control"
                                                        wire:model.lazy="item.{{ $value }}" />
                                                    @error('item.{{ $value }}')<p style="color: crimson;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Qty</label>
                                                    <input type="number" class="form-control" wire:model="qty.{{ $value }}" />
                                                    @error('qty.{{ $value }}')<p style="color: crimson;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control"
                                                        wire:model="description.{{ $value }}" />
                                                    @error('description.{{ $value }}')<p style="color: crimson;">{{ $message }}
                                                    </p> @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-1 mt-5">
                                                <div class="form-group">
                                                    <a href="#" wire:click.prevent="Remove({{ $key }})">
                                                        <i class="fa fa-trash text-danger"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Supporting document<small>(if any)</small></label>
                                                    <input type="file" class="form-control" name="pic" accept="image/*">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Date Required</label>
                                                    <input type="date" class="form-control" placeholder="Y-m-d"
                                                        wire:model="date" />
                                                    @error('date')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Additional Information</label>
                                                    <textarea class="form-control" cols="10" rows="5"
                                                        wire:model="additional_information"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div wire:loading wire:target="itemRequest" class="preloading">
                                                <div>
                                                    <img wire:loading class="hideImg" src="{{ asset('asset/prldr.gif') }}" alt="Preloader Image">
                                                </div>
                                            </div>
                                            <button type="submit" name="next"
                                                class="btn btn-primary next action-button float-right"
                                                value="Submit">Submit</button>
                                            <button type="reset" name="next"
                                                class="btn btn-primary next action-button float-right"
                                                value="Reset">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            @elseif ($this->mode === 'travel')
                                <form wire:submit.prevent="travelRequest" id="form-wizard1" class="text-center mt-1"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-card text-left">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="mb-4">Travel Expense Form:</h3>
                                            </div>
                                        </div>
                                        <hr class="text-info">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Destination</label>
                                                    <input type="text" class="form-control" wire:model="travel_destination">
                                                    @error('travel_destination')<p style="color: crimson;">{{ $message }}</p>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Departure</label>
                                                    <input type="date" class="form-control" wire:model="departure" />
                                                    @error('departure')<p style="color: crimson;">{{ $message }}</p>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Duration (in days)</label>
                                                    <input type="text" class="form-control" wire:model="duration">
                                                    @error('duration')<p style="color: crimson;">{{ $message }}</p>@enderror
                                                </div>
                                            </div>
                                            {{-- <div class --}}
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Total Expense</label>
                                                    <input type="text" class="form-control" wire:model="total_expense">
                                                    @error('total_expense')<p style="color: crimson;">{{ $message }}</p>@enderror
                                                </div>
                                            </div>
                                            <h5 class="ml-2">Account Details</h5>
                                            <div class="row col-md-12">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Bank Name</label>
                                                        <input type="text" class="form-control" wire:model="bank">
                                                        @error('bank')<p style="color: crimson;">{{ $message }}</p>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Account No.</label>
                                                        <input type="text" class="form-control" wire:model="acc_no">
                                                        @error('acc_no')<p style="color: crimson;">{{ $message }}</p>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Account Name</label>
                                                        <input type="text" class="form-control" wire:model="acc_name">
                                                        @error('acc_name')<p style="color: crimson;">{{ $message }}</p>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5>Expense Breakdown</h5>
                                                    <textarea class="form-control" cols="10" rows="5" wire:model="travel_additional_information"></textarea>
                                                    @error('travel_additional_information')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div wire:loading wire:target="travelRequest" class="preloading">
                                                <div>
                                                    <img wire:loading class="hideImg" src="{{ asset('asset/prldr.gif') }}" alt="Preloader Image">
                                                </div>
                                            </div>
                                            <button type="submit" name="next"
                                                class="btn btn-primary next action-button float-right"
                                                value="Submit">Submit</button>
                                            <button type="reset" name="next"
                                                class="btn btn-primary next action-button float-right"
                                                value="Reset">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            @elseif ($this->mode === "carrequest")
                                <form wire:submit.prevent="carRequest" id="form-wizard1" class="text-center mt-1"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-card text-left">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="mb-4">Car Request Form:</h3>
                                            </div>
                                        </div>
                                        <hr class="text-info">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Pickup Location</label>
                                                    <input type="text" class="form-control" placeholder="Enter location..." wire:model="pick_location" />
                                                    @error('pick_location')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Destination</label>
                                                    <input type="text" class="form-control" placeholder="Enter destination..."
                                                        wire:model="desired_destination" />
                                                    @error('desired_destination')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Date Required</label>
                                                    <input type="date" class="form-control" placeholder="Y-m-d" wire:model="request_date" />
                                                    @error('request_date')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Time Required</label>
                                                    <input type="time" class="form-control" placeholder="Y-m-d"
                                                        wire:model="request_time" />
                                                    @error('request_time')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Additional Information</label>
                                                    <textarea class="form-control" cols="10" rows="5"
                                                        wire:model="car_additional_information"></textarea>
                                                    @error('car_additional_information')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div wire:loading wire:target="carRequest" class="preloading">
                                                <div>
                                                    <img wire:loading class="hideImg" src="{{ asset('asset/prldr.gif') }}" alt="Preloader Image">
                                                </div>
                                            </div>
                                            <button type="submit" name="next"
                                                class="btn btn-primary next action-button float-right"
                                                value="Submit">Submit</button>
                                            <button type="reset" name="next"
                                                class="btn btn-primary next action-button float-right"
                                                value="Reset">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        @else
                            <div class="iq-card col-md-12 d-flex justify-content-center">
                                <img width="50%" src="{{ asset('asset/select_an_option.jpg') }}" alt="">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
