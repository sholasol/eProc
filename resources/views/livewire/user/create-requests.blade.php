<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12 col-lg-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Purchase Request</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                 <form wire:submit.prevent="createRequest" id="form-wizard1" class="text-center mt-1" enctype="multipart/form-data">
                    @csrf
                     <ul id="top-tab-list" class="p-0">
                         <li class="active" id="account">
                            <a href="javascript:void();">
                                <i class="las la-cart-arrow-down"></i><span>Request Detail</span>
                            </a>
                         </li>
                     </ul>
                         <div class="form-card text-left">
                             <div class="row">
                                 <div class="col-12">
                                     <h3 class="mb-4">Account Information:</h3>
                                 </div>
                             </div>
                             <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                      <label>Location: </label>
                                      <input type="text" class="form-control"  placeholder="Head Quarter" wire:model="location"/>
                                      @error('location')<p style="color: crimson;">{{ $message }}</p> @enderror
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                     <div class="form-group">
                                      <label>Date Required</label>
                                      <input type="date" class="form-control"  placeholder="Y-m-d" wire:model="date"/>
                                      @error('date')<p style="color: crimson;">{{ $message }}</p> @enderror
                                     </div>
                                  </div>
                             </div>
                             <hr class="text-info">
                             <div class="row">
                                <div class="col-10">
                                    <h3 class="mb-4">Order Items</h3>
                                 </div>
                                 <div class="col-2">
                                        <a href="#" wire:click.prevent="AddNew({{ $i }})"><i class="fa fa-plus-circle"></i> Add new</a>
                                 </div>
                             </div>
                             <hr class="text-info">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label>Item Name</label>
                                    <input type="text" class="form-control"  wire:model="item.0"/>
                                    @error('item.0')<p style="color: crimson;">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Qty</label>
                                        <input type="number" class="form-control"  wire:model="qty.0"/>
                                        @error('qty.0')<p style="color: crimson;">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" wire:model="description.0"/>
                                        @error('description.0')<p style="color: crimson;">{{ $message }}</p> @enderror
                                    </div>
                                </div>

                            </div>
                          @foreach ($inputs as $key => $value )
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Item Name</label>
                                        <input type="text" class="form-control"  wire:model="item.{{ $value }}"/>
                                        @error('item.{{ $value }}')<p style="color: crimson;">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Qty</label>
                                        <input type="number" class="form-control" wire:model="qty.{{ $value }}" />
                                        @error('qty.{{ $value }}')<p style="color: crimson;">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Remark</label>
                                        <input type="text" class="form-control" wire:model="description.{{ $value }}"/>
                                        @error('description.{{ $value }}')<p style="color: crimson;">{{ $message }}</p> @enderror
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Supporting document<small>(if any)</small></label>
                                        <input type="file" class="form-control" name="pic" accept="image/*">
                                    </div>
                                </div>
                                  <div class="col-md-12">
                                     <div class="form-group">
                                      <label>Additional Information</label>
                                      <textarea class="form-control" cols="10" rows="5" wire:model="additional_information"></textarea>
                                     </div>
                                  </div>
                            </div>
                            <hr>
                            <div class="row">
                                <button type="submit" name="next" class="btn btn-primary next action-button float-right" value="Submit" >Submit</button>
                                <button type="reset" name="next" class="btn btn-primary next action-button float-right" value="Reset" >Reset</button>
                            </div>
                         </div>


                 </form>
                   </div>
                </div>
             </div>

       </div>
    </div>
 </div>
