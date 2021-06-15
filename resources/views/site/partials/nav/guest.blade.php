<div id="activenav">
    <nav class="nav-menu d-none d-lg-block">
        <ul>
          
            <li class="{{ Route::currentRouteNamed('workshop') ? 'active' : '' }}"><a
                    href="{{ route('homepage') }}">Workshop</a>
            </li>
            <li class="{{ Route::currentRouteNamed('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a>
            </li>
            <li class="get-started"><a href="{{ route('peserta.login') }}">Be Learner</a></li>
            <li class="get-started"><a href="{{ route('instructor.login') }}">Be Instructor</a></li>
 
        </ul>

</div>




</nav><!-- .nav-menu -->
</div>