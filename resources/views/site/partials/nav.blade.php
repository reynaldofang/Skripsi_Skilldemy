<div id="activenav">
    <nav class="nav-menu d-none d-lg-block">
        <ul>
          
            <li class="{{ Route::currentRouteNamed('workshop') ? 'active' : '' }}"><a
                    href="{{ route('homepage') }}">Workshop</a>
            </li>
            <li class="{{ Route::currentRouteNamed('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a>
            </li>
            @guest
            <li class="get-started"><a href="{{ route('peserta.login') }}">Be Learner</a></li>
            <li class="get-started"><a href="{{ route('instructor.login') }}">Be Instructor</a></li>
            @endguest
            @auth('instructor')
            <li class="{{ Route::currentRouteNamed('instructor.class.list') ? 'active' : '' }}"><a href="{{ route('instructor.class.list') }}">My Classes</a>
            </li>
            <li class="get-started"><a href="{{ route('instructor.class.create')}}">Add New Class</a></li>
            <li class="get-started nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Orders</a>
                    <a class="dropdown-item" href="{{ route('instructor.logout') }}"><i
                            class="fa fa-sign-out fa-lg"></i>
                        Logout</a>
            </li>
            @endauth
            @auth('peserta')
            <li class="get-started nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Orders</a>
                    <a class="dropdown-item" href="{{ route('instructor.logout') }}"><i
                            class="fa fa-sign-out fa-lg"></i>
                        Logout</a>
            </li>
            @endauth
        </ul>

</div>




</nav><!-- .nav-menu -->
</div>