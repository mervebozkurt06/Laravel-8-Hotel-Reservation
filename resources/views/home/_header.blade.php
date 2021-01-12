

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('assets')}}/images/logo.png" alt="logo" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>

        @php
            $parentCategories = \App\Http\Controllers\HomeController::categoryList()
        @endphp


        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        @foreach($parentCategories as $rs)
                            <div>
                                {{$rs->title}}
                                <div>
                                    @if(count($rs->children))
                                        @include('home.categorytree',['children'=>$rs->children])
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">New hotels</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{route('faq')}}" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        FAQ
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="404.html">404</a>
                        <a class="dropdown-item" href="pricing.html">Pricing Table</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('references')}}">References</a>
                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (Auth::guest())LOGIN @else My Account @endif

                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        @if (Auth::guest())
                            <a class="dropdown-item" href="/login">Login</a>
                            <a class="dropdown-item" href="{{route('register')}}">Join</a>
                        @else
                            <a class="dropdown-item" href="{{route('myprofile')}}">{{ Auth::user()->name }}</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                        @endif




                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
