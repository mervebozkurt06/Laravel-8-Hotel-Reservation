<!-- Categories Widget -->
@auth
    <div class="card my-2">
        <h5 class="card-header">User Panel</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-10">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="{{route('myprofile')}}">My Profile</a>
                        </li>
                        <li>
                            <a href="{{route('user_hotels')}}">My Hotels</a>
                        </li>
                        <li>
                            <a href="{{route('myreviews')}}">My Reviews</a>
                        </li>

                        <li>
                            <a href="{{route('user_reservation')}}">My Reservations</a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}">Logout</a>
                        </li>

                        @php
                            $userRoles = Auth::user()->roles->pluck('name');
                        @endphp
                        @if($userRoles->contains('admin'))
                            <li>
                                <a href="{{route('admin_home')}}" target="_blank">Admin Page</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endauth
