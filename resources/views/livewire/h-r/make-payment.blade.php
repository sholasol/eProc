<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Make Payment</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div id="table" class="table-editable">



                            <div class="iq-card">

                                <div class="iq-card-body">
                                    <form wire:submit.prevent="generatePayment">
                                        @csrf
                                        <div class="row">

                                            <div class="form-group col-md-8">
                                                <!-- <label for="exampleInputText1">Select Month</label> -->
                                                <select wire:model="month" class="form-control" id="exampleFormControlSelect1">
                                                    <option selected="" value="">-- Select Month --</option>
                                                    @foreach ($avail_mons as $month)
                                                        <option value="{{ $month['month_num'] }}">{{ $month['month_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <div wire:loading wire:target="generatePayment" class="preloading">
                                                    <div>
                                                        <img wire:loading class="hideImg" src="{{ asset('asset/prldr.gif') }}" alt="Preloader Image">
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary float-right mr-2">Generate Schedule</button>
                                            </div>
                                            <div class="col-md-12">
                                                @error('month') <p style="color: crimson">{{ $message }}</p> @enderror
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

    </div>
</div>
