<div id="content-page" class="content-page">
    <div class="container-fluid">
       <form wire:submit.prevent="createUsr" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-3">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Add New User</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                           <div class="form-group">
                              <div class="add-img-user profile-img-edit">
                                 @if ($image)
                                    <img class="profile-pic img-fluid" src="{{ $image->temporaryUrl() }}" width="120" alt="">
                                @endif
                                 <div class="p-image">
                                   <a href="javascript:void();" class="upload-button btn iq-bg-success"><small>Upload Profile Pic</small></a>
                                   <input class="file-upload" type="file" accept="image/*" wire:model="image">
                                </div>
                              </div>
                             <div class="img-extension mt-3">
                                <div class="d-inline-block align-items-center">
                                    <span>Only</span>
                                   <a href="javascript:void();">.jpg</a>
                                   <a href="javascript:void();">.png</a>
                                   <a href="javascript:void();">.jpeg</a>
                                   <span>allowed</span>
                                </div>
                             </div>
                           </div>
                           <div class="form-group">
                              <label>User Role:</label>
                              <select class="form-control" id="selectuserrole" wire:model="role">
                                <option value ="">Select Role</option>
                                <option value ="ADM">Admin User</option>
                                <option value ="CFO">CFO</option>
                                <option value ="MGR">Department Head</option>
                                <option value ="HRM">Head Human Resource</option>
                                <option value ="FIN">Head Finance Dept</option>
                                <option value ="PROC">Head Procurement</option>
                                <option value ="TRN">Head Transportation</option>
                                <option value ="USR">System Users</option>
                              </select>
                              @error('role')<p style="color: crimson;">{{ $message }}</p> @enderror
                           </div>
                     </div>
                  </div>
            </div>
            <div class="col-lg-9">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">New User Information</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="new-user-info">
                           <form>
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
                                    <label for="lname">Department</label>
                                    <select class="form-control" wire:model="department">
                                        <option value="">Select Department</option>
                                        @foreach ($depts as $dept)
                                        <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('department')<p style="color: crimson;">{{ $message }}</p> @enderror
                                 </div>
                                <div class="form-group col-md-6">
                                    <label for="lname">Employee Type</label>
                                    <select class="form-control" wire:model="emptype">
                                        <option value="">Select Type</option>
                                        <option value="Advisor">Advisor</option>
                                        <option value="Contract">Contract Staff</option>
                                        {{-- <option value="Casual">Casual Staff</option> --}}
                                    </select>
                                    @error('emptype')<p style="color: crimson;">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Marital Status:</label>
                                    <select class="form-control" id="" wire:model="marital">
                                        <option selected="">Single</option>
                                        <option>Married</option>
                                        <option>Widowed</option>
                                        <option>Divorced</option>
                                        <option>Separated</option>
                                    </select>
                                    @error('marital')<p style="color: crimson;">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="d-block">Gender:</label>
                                    <div class="custom-control custom-radio custom-control-inline" wire:click="$set('gender', 'Male')">
                                        <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input" />
                                        <label class="custom-control-label" for="customRadio6">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline" wire:click="$set('gender', 'Female')">
                                        <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input" />
                                        <label class="custom-control-label" for="customRadio7">Female</label>
                                    </div>
                                    @error('gender')<p style="color: crimson;">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="qualification">Qualification:</label>
                                    <input type="text" class="form-control" id="qualification" placeholder="Enter qualification..." wire:model="qualification">
                                    @error('qualification')<p style="color: crimson;">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lname">Salary Grade</label>
                                    <select class="form-control" wire:model="salary">
                                        <option value="">Select Department</option>
                                        @foreach ($salaryTemp as $sal)
                                        <option value="{{ $sal->id }}">{{ $sal->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('salary')<p style="color: crimson;">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="dob">Date Of Birth:</label>
                                    <input class="form-control" type="date" id="dob" wire:model="dob" />
                                    @error('dob')<p style="color: crimson;">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter Address" wire:model="address">
                                    @error('address')<p style="color: crimson;">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">State of Origin:</label>
                                    <input class="form-control" type="text" placeholder="Enter state of origin..." id="city" wire:model="city" />
                                    @error('city')<p style="color: crimson;">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="country">Country:</label>
                                    <input class="form-control" type="text" placeholder="Enter country of birth..." id="country" wire:model="country" />
                                    @error('country')<p style="color: crimson;">{{ $message }}</p> @enderror
                                </div>
                              </div>
                              <hr>
                              <h5 class="mb-3">User Authentication</h5>
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email" wire:model="email">
                                    @error('email')<p style="color: crimson;">{{ $message }}</p> @enderror
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="pass">Password:</label>
                                    <input type="password" class="form-control" id="pass" placeholder="Password" wire:model="password">
                                    @error('password')<p style="color: crimson;">{{ $message }}</p> @enderror
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-success">Add New User</button>
                           </form>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
       </form>
    </div>
 </div>
