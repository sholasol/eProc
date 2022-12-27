<div id="content-page" class="content-page">
    <form method="POST" action="" wire:submit.prevent="subTravTemp">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">New Travel Template</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form wire:submit.prevent="createTemp">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefaultUsernamessjsj">Location</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text " id="inputGroupPrepend2">
                                                    <i class="fa fa-map-marker"></i></span>
                                            </div>
                                            <input type="text" class="form-control" wire:model="destination"
                                                id="validationDefaultUsernamessjsj" aria-describedby="inputGroupPrepend2">
                                        </div>
                                        @error('destination') <p style="color: crimson">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefaultUsername">Salary Grade</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text " id="inputGroupPrepend2"><i class="fa fa-area-chart"></i></span>
                                            </div>
                                            <select class="form-control" wire:model="grade" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2">
                                                <option value=""> -- select --</option>
                                                @foreach($salaryTemp as $sal)
                                                    <option value="{{ $sal->id }}">{{ $sal->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('grade') <p style="color: crimson">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefaultUsernamessjksk">Branch</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text " id="jsjsjjdbsjbx"><i class="fa fa-area-chart"></i></span>
                                            </div>
                                            <select class="form-control" wire:model="branch" id="validationDefaultUsernamessjksk" aria-describedby="jsjsjjdbsjbx">
                                                <option value=""> -- select --</option>
                                                @foreach($salaryTemp as $sal)
                                                    <option value="{{ $sal->id }}">{{ $sal->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('branch') <p style="color: crimson">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="skskkdjskd">Accomodation</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text " id="inputGroupPrepend2dksdksj">
                                                    <i class="fa fa-money"></i></span>
                                            </div>
                                            <input type="text" class="form-control" wire:model="accomodation"
                                                id="skskkdjskd" aria-describedby="inputGroupPrepend2dksdksj">
                                        </div>
                                        @error('accomodation') <p style="color: crimson">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="skskkdjskd">Feeding</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text " id="djjdjhd">
                                                    <i class="fa fa-money"></i></span>
                                            </div>
                                            <input type="text" class="form-control" wire:model="feeding"
                                                id="skskkdjskd" aria-describedby="djjdjhd">
                                        </div>
                                        @error('feeding') <p style="color: crimson">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="dsnjdsnncd">Transport</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text " id="dhbdvtgbj">
                                                    <i class="fa fa-money"></i></span>
                                            </div>
                                            <input type="text" class="form-control" wire:model="transport"
                                                id="dsnjdsnncd" aria-describedby="dhbdvtgbj">
                                        </div>
                                        @error('transport') <p style="color: crimson">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="dsjedjsdh">Allowance</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text " id="dhbdvtgbjdjsj">
                                                    <i class="fa fa-money"></i></span>
                                            </div>
                                            <input type="text" class="form-control" wire:model="allowance"
                                                id="dsjedjsdh" aria-describedby="dhbdvtgbjdjsj">
                                        </div>
                                        @error('allowance') <p style="color: crimson">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
            </div>
        </div>
    </form>
</div>
