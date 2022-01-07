<div id="content-page" class="content-page">
    <div class="container-fluid">
       <form wire:submit.prevent="createDept" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Department Information</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="new-user-info">
                           <form>
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="fname">Department:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Department Name" wire:model="name">
                                    @error('name')<p style="color: crimson;">{{ $message }}</p> @enderror
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="lname">Dept. Head:</label>
                                    <select class="form-control" wire:model="head">
                                        <option value="">Department Head</option>
                                        @foreach ($users as $user)
                                            <option>{{ $user->fname.' '.$user->lname }}</option>
                                        @endforeach
                                    </select>
                                    @error('head')<p style="color: crimson;">{{ $message }}</p> @enderror
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Create Department</button>
                           </form>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
       </form>
    </div>
 </div>
