<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">User List ({{ $users->count() }})</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table">
                            <div class="row justify-content-between">
                                <div class="col-sm-12 col-md-4">
                                    <div id="user_list_datatable_info" class="dataTables_filter">
                                        <form class="mr-3 position-relative">
                                            <div class="form-group mb-0">
                                                <input type="search" class="form-control" id="exampleInputSearch"
                                                    placeholder="Search" aria-controls="user-list-table">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @if (Auth::user()->utype === "ADM" || Auth::user()->utype === "HRM")
                                <div class="col-sm-12 col-md-8">
                                    <div class="user-list-files d-flex float-right">
                                        <a class="iq-bg-primary" href="{{route('system.system-users')}}" style="width: 120px;">
                                            <span style="color:#000;"><i class="ri-user-line"></i> All Staff</span>
                                        </a>
                                        <a class="iq-bg-info" href="{{route('system.system-advisor')}}" style="width: 120px;">
                                            <span style="color:#000;"><i class="ri-user-line"></i> Advisors</span>
                                        </a>
                                        <a class="iq-bg-success" href="{{ route('system.system-contract') }}" style="width: 120px;">
                                            <span style="color:#000;"><i class="ri-user-line"></i> Contracts</span>
                                        </a>
                                        <a class="iq-bg-danger" href="{{ route('system.system-inactive') }}">
                                            <span style="color:#000;"><i class="ri-user-line"></i> In-Active</span>
                                        </a>
                                        {{-- <div class="col-md-2">
                                            <select wire:model="staff" class="form-control">
                                                <option value="">All</option>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                        </div> --}}
                                    </div>
                                </div>
                                @endif
                            </div>

                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid"
                                aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>
                                        <th>Emp. Id</th>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Join Date</th>
                                        @if (Auth::user()->utype === "ADM" || Auth::user()->utype === "HRM")
                                        <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user )
                                    <tr>
                                        <td>{{ $user->emp_id }}</td>
                                        <td>
                                            <img class="rounded-circle img-fluid avatar-40" src="
                                            <?php if(!empty($user->profile_photo_path) && file_exists('asset/image/users/'.$user->profile_photo_path)){
                                                echo asset('asset/image/users').'/'.$user->profile_photo_path;
                                            } else{ echo asset('asset/image/users/dummy.png');} ?>"
                                            alt="profile">
                                        </td>
                                        <td>{{ $user->fname.' '. $user->lname }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td><span class="badge iq-bg-primary" style="color: black !important;">{{
                                                $user->deptname }}</span></td>
                                        <td>{{ $user->created_at->diffForHumans() }}</td>
                                        @if (Auth::user()->utype === "ADM" || Auth::user()->utype === "HRM")
                                        <td>
                                            <div class="flex align-items-center list-user-action flex-nowrap">
                                                <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Profile"
                                                    href="{{ route('system.system-userprofile', ['uid'=>$user->id]) }}">
                                                    <i class="ri-eye-fill text-white"></i>
                                                </a>
                                                <a class="bg-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Profile"
                                                    href="{{ route('system.system-edituserprofile', ['uid'=>$user->id]) }}">
                                                    <i class="ri-pencil-line text-white"></i>
                                                </a>
                                                <a class="bg-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                                    href="javascript:void();"
                                                    onclick="confirm('Are you sure, you want to de-activate this user?') ||event.stopImmediatePropagation()"
                                                    wire:click.prevent="updateUsr({{ $user->id }})">
                                                    <i class="ri-delete-bin-line text-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                        @else

                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="row">
                                {{ $users->links() }}
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @push('scripts') --}}
<script>
    $(document).ready(function(){
        // $(".relative a").each(function () {
        //     console.log($(this).attr('href'));

        // })
        $(".relative a").on("click", function (e) {
            e.preventDefault();
            let vt = $(this).attr('href');
            let num = vt.split("=")
            let fin = vt.slice(-1);
            // console.log(fin)
            window.location.href = "/system/system-users?page="+fin
        })
    })
</script>
{{-- @endpush --}}
