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
                              <label>User Department:</label>
                              <select class="form-control" id="selectuserrole" wire:model="role">
                                <option value ="">Select Role</option>
                                <option value ="ADM">Admin User</option>
                                <option value ="CFO">CFO</option>
                                <option value ="MGR">Department Head</option>
                                <option value ="HRM">Head Human Resource</option>
                                <option value ="FIN">Head Finance Dept</option>
                                <option value ="PROC">Head Procurement</option>
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
                                            <option>{{ $dept->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('department')<p style="color: crimson;">{{ $message }}</p> @enderror
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
