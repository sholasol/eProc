<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-body p-0">
                        <div class="iq-edit-list">
                            <ul class="iq-edit-profile d-flex nav nav-pills">
                                <li class="col-md-4 p-0" wire:ignore>
                                    <a class="nav-link active" data-toggle="pill" href="#personal-information">Personal
                                        Information</a>
                                </li>
                                <li class="col-md-4 p-0" wire:ignore>
                                    <a class="nav-link" data-toggle="pill" href="#chang-pwd">Change Password</a>
                                </li>
                                {{-- <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#emailandsms">Email and SMS</a>
                                </li> --}}
                                <li class="col-md-4 p-0" wire:ignore>
                                    <a class="nav-link" data-toggle="pill" href="#manage-contact">My Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="iq-edit-list-data">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel" wire:ignore.self>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Personal Information</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form>
                                        <div class="form-group row align-items-center">
                                            <div class="col-md-12">
                                                <div class="profile-img-edit">
                                                    <img class="profile-pic" src="{{ asset('asset/image/users') }}/{{ $pr->profile_photo_path }}"
                                                        alt="profile-pic" />
                                                    <div class="p-image">
                                                        <i class="ri-pencil-line upload-button"></i>
                                                        <input class="file-upload" type="file" accept="image/*" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="form-group col-sm-6">
                                                <label for="fname">First Name:</label>
                                                <input readonly type="text" class="form-control" id="fname" value="{{ $pr->fname }}" />
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="lname">Last Name:</label>
                                                <input readonly type="text" class="form-control" id="lname" value="{{ $pr->lname }}" />
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="gender">Gender:</label>
                                                <input readonly type="text" class="form-control" id="gender" value="{{ $pr->gender }}" />
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="dob">Date Of Birth:</label>
                                                <input readonly class="form-control" type="date" id="dob" value="{{ $pr->dob }}" />
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Department:</label>
                                                <input readonly type="text" class="form-control" value="{{ $prdept->name }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Marital Status:</label>
                                                <input readonly type="text" class="form-control" value="{{ $pr->marital }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>State of Origin:</label>
                                                <input readonly type="text" class="form-control" value="{{ $pr->city }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Country:</label>
                                                <input readonly type="text" class="form-control" value="{{ $pr->country }}">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label>Address:</label>
                                                <textarea readonly class="form-control" name="address" rows="5"
                                                style="line-height: 22px;">{{ $pr->address }}</textarea>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>My Emp-ID:</label>
                                                <input readonly type="text" class="form-control" value="{{ $pr->emp_id }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Qualification:</label>
                                                <input readonly type="text" class="form-control" value="{{ $pr->qualification }}">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel" wire:ignore.self>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Change Password</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form method="POST" wire:submit.prevent="changePassword">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="cpass">Current Password:</label>
                                            {{-- <a href="javascripe:void();" class="float-right">Forgot Password</a> --}}
                                            <input type="Password" class="form-control" id="cpass" wire:model.defer="current_password" value="" />
                                            @error('current_password') <small style="color: crimson;">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="npass">New Password:</label>
                                            <input type="password" class="form-control" id="npass" wire:model.defer="password" value="" />
                                            @error('password') <small style="color: crimson;">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="vpass">Verify Password:</label>
                                            <input type="password" class="form-control" id="vpass" wire:model.defer="password_confirmation" value="" />
                                            @error('password_confirmation') <small style="color: crimson;">{{ $message }}</small> @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Email and SMS</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3" for="emailnotification">Email Notification:</label>
                                            <div class="col-md-9 custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="emailnotification" checked="" />
                                                <label class="custom-control-label" for="emailnotification"></label>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3" for="smsnotification">SMS Notification:</label>
                                            <div class="col-md-9 custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="smsnotification"
                                                    checked="" />
                                                <label class="custom-control-label" for="smsnotification"></label>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3" for="npass">When To Email</label>
                                            <div class="col-md-9">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="email01" />
                                                    <label class="custom-control-label" for="email01">You have new
                                                        notifications.</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="email02" />
                                                    <label class="custom-control-label" for="email02">You're sent a
                                                        direct message</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="email03"
                                                        checked="" />
                                                    <label class="custom-control-label" for="email03">Someone adds you
                                                        as a connection</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                            <div class="col-md-9">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="email04" />
                                                    <label class="custom-control-label" for="email04">Upon new
                                                        order.</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="email05" />
                                                    <label class="custom-control-label" for="email05">New membership
                                                        approval</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="email06"
                                                        checked="" />
                                                    <label class="custom-control-label" for="email06">Member
                                                        registration</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button type="reset" class="btn iq-bg-danger">Cancle</button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                        <div class="tab-pane fade" id="manage-contact" role="tabpanel" wire:ignore.self>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">My Contact</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="cno">Contact Number:</label>
                                            <input type="text" class="form-control" readonly id="cno" value="{{ $pr->phone }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" class="form-control" readonly id="email"
                                                value="{{ $pr->email }}" />
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="url">Url:</label>
                                            <input type="text" class="form-control" id="url"
                                                value="https://getbootstrap.com" />
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button type="reset" class="btn iq-bg-danger">Cancle</button> --}}
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
</div>
