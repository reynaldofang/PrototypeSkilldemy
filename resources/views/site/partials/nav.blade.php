<div id="activenav">
    <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="{{ Route::currentRouteNamed('workshop') ? 'active' : '' }}"><a href="{{ route('workshop') }}">Workshop</a>
            </li>
            <li class="{{ Route::currentRouteNamed('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
            <li class="get-started"><a href="/account">Be Learner</a></li>
            <li class="get-started"><a href="{{route ('admin.login')}}">Be Instructor</a></li>
        </ul>
    </nav><!-- .nav-menu -->
</div>
