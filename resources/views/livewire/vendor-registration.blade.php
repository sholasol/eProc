<div>
    <form wire:submit.prevent="createVen" enctype="multipart/form-data">
        @csrf
    <div id="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12">
                 <div class="iq-card">
                    <div class="iq-card-body p-0">
                       <div class="iq-edit-list mt-2">
                          <ul class="iq-edit-profile d-flex nav nav-pills">
                             <li class="col-md-3 p-0">
                                <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                   Vendor Registration
                                </a>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-12">
                 <div class="iq-edit-list-data">
                    <div class="tab-content">
                       <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                               <div class="iq-header-title">
                                  <h4 class="card-title">Vendor Information</h4>
                               </div>
                            </div>
                            <div class="iq-card-body">
                               <div class="new-user-info">
                                   <div class="row">
                                       <div class="form-group col-md-12">
                                           <label for="cname">Company Name:</label>
                                           <input type="text" class="form-control" id="cname" wire:model="company_name">
                                           @error('company_name')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                           <label for="mobno">Company Email:</label>
                                           <input type="email" class="form-control" id="mobno"  wire:model="company_email">
                                           @error('company_email')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                           <label for="mobno">Company Tel:</label>
                                           <input type="text" class="form-control" id="mobno"  wire:model="company_phone">
                                           @error('company_phone')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                           <label for="add2">Company Address</label>
                                           <input type="text" class="form-control" id="add2" wire:model="address">
                                           @error('address')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                     </div>
                                     <h5 class="mb-3">Contact Person</h5>
                                     <div class="row">
                                        <div class="form-group col-md-6">
                                           <label for="fname">First Name:</label>
                                           <input type="text" class="form-control" id="fname" placeholder="First Name" wire:model="fname">
                                           @error('fname')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                           <label for="lname">Last Name:</label>
                                           <input type="text" class="form-control" id="lname" placeholder="Last Name" wire:model="lname">
                                           @error('lname')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                           <label for="mobno">Mobile Number:</label>
                                           <input type="text" class="form-control" id="mobno" placeholder="Mobile Number" wire:model="phone">
                                           @error('phone')<p style="color: crimson;">{{ $message }}</p> @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="mobno">Contact Person Email:</label>
                                            <input type="email" class="form-control" id="mobno"  wire:model="email">
                                            @error('email')<p style="color: crimson;">{{ $message }}</p> @enderror
                                         </div>

                                     </div>
                                     <hr>
                                     <h5 class="mb-3">Additional Information</h5>
                                     <div class="row">
                                        <div class="form-group col-md-12">
                                           <input type="text" class="form-control" id="additional_information" placeholder="Additional Information" >
                                        </div>
                                     </div>
                                     <button type="submit" class="btn btn-success">Submit Registration</button>

                               </div>
                            </div>
                         </div>
                       </div>

                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    </form>
</div>




