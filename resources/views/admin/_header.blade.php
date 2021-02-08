<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="{{route('admin_home')}}">Concept</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item">
                        <div id="custom-search" class="top-search-bar">
                            @include('home.message')
                        </div>
                    </li>


                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="{{ asset('assets')}}/admin/#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(Auth::user()->profile_photo_path)
                                <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="100" style="border-radius: 20px" alt="" class="user-avatar-md rounded-circle"></a>
                        @endif
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            @auth
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{Auth::user()->name}} </h5>
                                </div>
                                <a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            @endauth
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
</div>
