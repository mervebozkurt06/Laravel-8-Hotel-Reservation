<!-- Categories Widget -->

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
                </ul>
            </div>
        </div>
    </div>
</div>
