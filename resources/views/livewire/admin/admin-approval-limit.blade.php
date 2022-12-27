<div id="content-page" class="content-page">
    <div class="container-fluid">
       <form wire:submit.prevent="createApproval" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Approval Limit</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="new-user-info">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="fname">Department:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Department Name" wire:model="name">
                                    @error('name')<p style="color: crimson;">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lname">Dept. Head:</label>
                                    <select class="form-control" wire:model="department_head">
                                        <option value="">Department Head</option>
                                        @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{ $user->fname.' '.$user->lname }}</option>
                                        @endforeach
                                    </select>
                                    @error('department_head')<p style="color: crimson;">{{ $message }}</p> @enderror
                                 </div>
                            </div>
                              <hr>
                              <h5 class="mb-3">Approval Limit</h5>
                              <div class="row">
                                 <div class="form-group col-md-12">
                                    <label for="email">Limit:</label>
                                    <input type="text" class="form-control" id="email" placeholder="Set Limit e.g 500,000" wire:model="limit">
                                    @error('limit')<p style="color: crimson;">{{ $message }}</p> @enderror
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-success">Set Approval Limit</button>
                           </form>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
       </form>
    </div>
 </div>
