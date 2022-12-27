<div class="iq-sidebar-small" style="background-color: rgb(35, 150, 102);">
    <div class="sidebar-top">
        {{-- <div class="iq-sidebar-small-logo">
            <a href="#">
                <img src="{{ asset('asset/logo.jpg') }}" class="img-fluid" alt="">
            </a>
        </div> --}}
        <div class="sidebar-menu-icon">
            <a href="{{ route('transport.dashboard') }}" class="iq-waves-effect" data-toggle="tooltip"
                data-placement="right" title="" data-original-title="Home"><i class="ri-home-2-fill"></i></a>
            <a href="javascript:void(0);" class="iq-waves-effect" data-toggle="tooltip" data-placement="right" title=""
                data-original-title="Search"><i class="ri-search-fill"></i></a>
            <a href="" class="iq-waves-effect" data-toggle="tooltip" data-placement="right" title=""
                data-original-title="Mail"><i class="ri-mail-open-fill"></i></a>
            <a href="profile.html" class="iq-waves-effect" data-toggle="tooltip" data-placement="right" title=""
                data-original-title="Social"><i class="ri-command-fill"></i></a>
            <a href="javascript:void(0);" class="iq-waves-effect" data-toggle="tooltip" data-placement="right" title=""
                data-original-title="Upload"><i class="ri-file-upload-fill"></i></a>
            <a href="javascript:void(0);" class="iq-waves-effect" data-toggle="tooltip" data-placement="right" title=""
                data-original-title="Cloud"><i class="ri-cloud-fill"></i></a>
        </div>
    </div>
    <div class="sidebar-bottom">
        <div class="sidebar-menu-icon">
            <a href="account-setting.html" class="iq-waves-effect" data-toggle="tooltip" data-placement="right" title=""
                data-original-title="Sign Out"><i class="fa fa-power-off"></i></a>
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="menu-close"><i class="ri-arrow-left-line"></i></div>
                    <div class="menu-open"><i class="ri-arrow-right-line"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="{{ route('transport.dashboard') }}">
            <span style="text-transform: capitalize !important">Old Mutual</span>
        </a>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Admin Menu</span></li>
                <li class="{{ request()->is('finance/dashboard') ? 'active' :' ' }}">
                    <a href="{{ route('transport.dashboard') }}" class="iq-waves-effect"><i
                            class="ri-computer-line"></i><span>Dashboard </span></a>
                </li>
                <li class="{{ request()->is('system/system-users') ? 'active' :' ' }}">
                    <a href="#user" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                            class="ri-user-line"></i><span>Drivers</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="user" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ route('system.system-users') }}"><i class="ri-file-list-line"></i>Drivers</a>
                        </li>
                    </ul>
                </li>
                <li
                    class="{{ request()->is('admin/create-email') || request()->is('admin/admin-email') ? 'active' :' ' }}">
                    <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                            class="ri-mail-line"></i><span>Email/Messaging</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ route('admin.admin-email') }}"><i class="ri-inbox-line"></i>Inbox</a></li>
                        <li><a href="{{ route('admin.create-email') }}"><i class="ri-edit-line"></i>Email Compose</a>
                        </li>
                    </ul>
                </li>
                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Procurement Process</span></li>
                <li>
                    <a href="#request" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                            class="ri-pages-line"></i><span>Request</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="request" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ route('request.request') }}"><i class="ri-pages-line"></i>Purchase Requests</a></li>
                        <li><a href="{{ route('request.request-travelexpense') }}"><i class="ri-pages-line"></i>Travel Expense Requests</a>
                        </li>
                        {{-- <li><a href="{{ route('request.request-carrequest') }}"><i class="ri-pages-line"></i>Travel Expense
                                Requests</a></li> --}}
                        <li><a href="{{ route('request.request-carrequest') }}"><i class="ri-pages-line"></i>Pool Car Requests</a></li>
                        <li><a href="{{ route('request.createrequest') }}"><i class="ri-pages-line"></i>Create Request</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#approve" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                            class="ri-chat-check-line"></i><span>Department Approval</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="approve" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ route('system.requestlist') }}"><i class="ri-pages-line"></i>Purchase Request</a></li>
                        <li><a href="{{ route('system.travelrequestlist') }}"><i class="ri-pages-line"></i>Travel Expense Request</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#ecommerce" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>Operations</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="ecommerce" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ route('transport.awaiting-requests') }}"><i class="ri-pages-line"></i>Waiting List</a></li>
                        <li><a href="{{ route('admin.create-request') }}"><i class="ri-pages-line"></i>Assignment History</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>

<!-- TOP Nav Bar -->
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <div class="iq-sidebar-logo">
            <div class="top-logo">
                <a href="{{ route('admin.dashboard') }}" class="logo">
                    <img src="{{ asset('asset/logo.jpg') }}" class="img-fluid" alt="">
                    <span style="text-transform: capitalize !important;">Old Mutual</span>
                </a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="navbar-left">
                {{-- <ul id="topbar-data-icon" class="d-flex p-0 topbar-menu-icon">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link font-weight-bold search-box-toggle"><i
                                class="ri-home-4-line"></i></a>
                    </li>
                    <li><a href="chat.html" class="nav-link"><i class="ri-message-line"></i></a></li>
                    <li><a href="e-commerce-product-list.html" class="nav-link"><i class="ri-file-list-line"></i></a>
                    </li>
                    <li><a href="profile.html" class="nav-link"><i class="ri-question-answer-line"></i></a></li>
                    <li><a href="todo.html" class="nav-link router-link-exact-active router-link-active"><i
                                class="ri-chat-check-line"></i></a></li>
                    <li><a href="app/index.html" class="nav-link"><i class="ri-inbox-line"></i></a></li>
                </ul> --}}
                <div class="iq-search-bar">
                    <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        <div class="searchbox-datalink">
                            <h6 class="pl-3 pt-3">Pages</h6>
                            <ul class="m-0 pl-3 pr-3 pb-3">
                                <li class="iq-bg-primary-hover rounded"><a href="index.html"
                                        class="nav-link router-link-exact-active router-link-active pr-2"><i
                                            class="ri-home-4-line pr-2"></i>Dashboard</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="dashboard-1.html"
                                        class="nav-link router-link-exact-active router-link-active pr-2"><i
                                            class="ri-home-3-line pr-2"></i>Dashboard-1</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="chat.html" class="nav-link"><i
                                            class="ri-message-line pr-2"></i>Chat</a></li>
                                {{-- <li class="iq-bg-primary-hover rounded"><a href="calendar.html" class="nav-link"><i
                                            class="ri-calendar-2-line pr-2"></i>Calendar</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="profile.html" class="nav-link"><i
                                            class="ri-profile-line pr-2"></i>Profile</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="todo.html" class="nav-link"><i
                                            class="ri-chat-check-line pr-2"></i>Todo</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="app/index.html" class="nav-link"><i
                                            class="ri-mail-line pr-2"></i>Email</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="e-commerce-product-list.html"
                                        class="nav-link"><i class="ri-message-line pr-2"></i>Product Listing</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="e-commerce-product-detail.html"
                                        class="nav-link"><i class="ri-file-list-line pr-2"></i>Product Details</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="pages-faq.html" class="nav-link"><i
                                            class="ri-compasses-line pr-2"></i>Faq</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="form-wizard.html" class="nav-link"><i
                                            class="ri-clockwise-line pr-2"></i>Form-wizard</a></li> --}}
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list">

                    <li class="nav-item">
                        <a href="#" class="search-toggle iq-waves-effect">
                            <div id="lottie-beil"></div>
                            <span class="bg-danger dots"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">All Notifications<small
                                                class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>

                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Emma Watson Nik</h6>
                                                <small class="float-right font-size-12">Just Now</small>
                                                <p class="mb-0">95 MB</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New customer is join</h6>
                                                <small class="float-right font-size-12">5 days ago</small>
                                                <p class="mb-0">Jond Nik</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Two customer is left</h6>
                                                <small class="float-right font-size-12">2 days ago</small>
                                                <p class="mb-0">Jond Nik</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                <small class="float-right font-size-12">3 days ago</small>
                                                <p class="mb-0">Jond Nik</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="search-toggle iq-waves-effect">
                            <div id="lottie-mail"></div>
                            <span class="bg-primary count-mail"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">All Messages<small
                                                class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Nik Emma Watson</h6>
                                                <small class="float-left font-size-12">13 Jun</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                <small class="float-left font-size-12">20 Apr</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Why do we use it?</h6>
                                                <small class="float-left font-size-12">30 Jun</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Variations Passages</h6>
                                                <small class="float-left font-size-12">12 Sep</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                <small class="float-left font-size-12">5 Dec</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="navbar-list">
                <li>
                    <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                        <img class="rounded img-fluid mr-3" src="
                        <?php if(!empty(Auth::user()->profile_photo_path) && file_exists('asset/image/users/'.Auth::user()->profile_photo_path)){
                                echo asset('asset/image/users').'/'.Auth::user()->profile_photo_path;
                            } else{ echo asset('asset/image/users/dummy.png');} ?>" alt="profile">
                        <div class="caption">
                            <h6 class="mb-0 line-height">{{ Auth::user()->fname }}</h6>
                            <span class="font-size-12">Online</span>
                        </div>
                    </a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                        <div class="iq-card shadow-none m-0">
                            <div class="iq-card-body p-0 ">
                                <div class="bg-info p-3">
                                    <h5 class="mb-0 text-white line-height">Hello {{ Auth::user()->fname }}</h5>
                                    <span class="text-white font-size-12">Available</span>
                                </div>
                                <a href="#" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-success">
                                            <i class="ri-file-user-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">My Profile</h6>
                                            <p class="mb-0 font-size-12">View personal profile details.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="iq-sub-card iq-bg-success-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-success">
                                            <i class="ri-profile-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Edit Profile</h6>
                                            <p class="mb-0 font-size-12">Modify your personal details.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="iq-sub-card iq-bg-success-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-success">
                                            <i class="ri-account-box-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Account settings</h6>
                                            <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-danger iq-sign-btn" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                </div>
                                <form id="logout-form" method="post" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>

    </div>
</div>
<!-- TOP Nav Bar END -->
