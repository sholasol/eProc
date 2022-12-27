<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Upload Commission (.csv file)</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div id="table" class="table-editable">



                            <div class="iq-card">

                                <div class="iq-card-body">
                                    <form wire:submit.prevent="import">
                                        @csrf
                                        <div class="row">

                                            <div class="form-group col-md-8">
                                                <!-- <label for="exampleInputText1">Select Month</label> -->
                                                <input type="file" wire:model="xlsx" class="form-control"/>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary float-right mr-2">Upload File</button>
                                            </div>
                                            <div class="col-md-12">
                                                @error('xlsx') <p style="color: crimson">{{ $message }}</p> @enderror
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
