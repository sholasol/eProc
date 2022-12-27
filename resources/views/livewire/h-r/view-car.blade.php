<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <form wire:submit.prevent="updateVehicle" id="form-wizard1" class="text-center mt-1"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="mb-4">Vehicle Details and Assignment:</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="img">
                                        <img class="w-100" src="
                                            <?php if(!empty($this->vehicle_image) && file_exists('asset/image/vehicles/'.$this->vehicle_image)){
                                                echo asset('asset/image/vehicles').'/'.$this->vehicle_image;
                                            } else{ echo asset('asset/image/vehicles/dummy.png');} ?>"
                                        alt="" class="rounded-circle">
                                        <div class="col-12">
                                            <h4 class="ml-4">Assigned To:
                                                <span class="badge bg-primary">
                                                    {{
                                                        ($this->fname == ""|| $this->fname == null) && ($this->lname = "" || $this->lname == null)
                                                        ? 'No Assignee'
                                                        : $this->fname . ' ' . $this->lname
                                                    }}
                                                </span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <hr class="text-info">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Vehicle Name</label>
                                            <input type="text" class="form-control" placeholder="Enter vehicle name..."
                                                wire:model="name" />
                                            @error('name')<p style="color: crimson;">{{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Vehicle No.</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter vehicle number..." wire:model="vno" />
                                            @error('vno')<p style="color: crimson;">{{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="form-control" placeholder="Enter vehicle price..."
                                                wire:model="price" />
                                            @error('price')<p style="color: crimson;">{{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Vehicle Color</label>
                                            <input type="text" class="form-control" placeholder="Enter vehicle color"
                                                wire:model="color" />
                                            @error('color')<p style="color: crimson;">{{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Vehicle Type</label>
                                            <select type="text" class="form-control" wire:model="type">
                                                <option value=""> -- select --</option>
                                                <option value="pool">Pool Car</option>
                                                <option value="status">Status Car</option>
                                            </select>
                                            @error('type')<p style="color: crimson;">{{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" wire:ignore>
                                            <label>Assign Vehicle (optional)</label>
                                            <select class="form-control select2" id="sel2">
                                                <option selected value="{{ $this->assignee }}">{{ $this->assigneename }}</option>
                                                @foreach ($dris as $dri)
                                                <option value="{{ $dri->id }}">{{ $dri->fname.' '.$dri->lname.' -
                                                    '.$dri->dept_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('assignee') <p style="color: crimson;">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Additional Information</label>
                                            <textarea class="form-control" cols="10" rows="5"
                                                placeholder="Enter other necessary information..."
                                                wire:model="additional_information"></textarea>
                                            @error('additional_information')<p style="color: crimson;">{{ $message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div wire:loading wire:target="vehicleOnboard" class="preloading">
                                        <div>
                                            <img wire:loading class="hideImg" src="{{ asset('asset/prldr.gif') }}"
                                                alt="Preloader Image">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@push('scripts')
<script>
    $(document).ready(function () {
        // @this.set('assignee', {{ $this->assignee }})
        $("#sel2").on("change", function (e) {
            @this.set('assignee', e.target.value);
        });
        $(".select2").select2({
            placeholder: "Select an option",
            width: 'resolve'
        });
    });
</script>
@endpush
