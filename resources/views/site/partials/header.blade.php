<header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

        <div class="logo mr-auto">
            {{-- <h1 class="text-light"><a href="index.html"><span>Ninestars</span></a></h1> --}}
            <a href="{{route('workshop')}}"><img src="{{ asset('frontend/img/icons/skilldemy.png') }}" class="img-fluid animated" alt="Logo"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        @include('site.partials.nav')

    </div>

</header>
