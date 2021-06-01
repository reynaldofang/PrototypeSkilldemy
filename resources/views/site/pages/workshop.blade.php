@extends('site.app')
@section('title', 'Workshop')
@section('content')

    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
                    <h1>Skilldemy #BeMoreBeDifferent</h1>
                    <h2>Discover, learn, and enrich your softskills with us to be more be different.</h2>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('frontend/img/icons/roket3.png') }}" style="max-width: 250px"
                        class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>

    <div class="d-flex font-weight-bold p-2 flex-workshop">
        <div class="p-2 bd-hightlight" style="color:white;"><i class='bx bxs-cake'>Dudu</i></div>
        <div class="p-2 bd-hightlight" style="color:white;"><i class="fa fa-laptop" aria-hidden="true">Dudu</i></div>
        <div class="p-2 bd-hightlight" style="color:white;"><i class='bx bxs-cake'>Dudu</i></div>
        <div class="p-2 bd-hightlight" style="color:white;"><i class='bx bxs-cake'>Dudu</i></div>
        <div class="p-2 bd-hightlight" style="color:white;"><i class='bx bxs-cake'>Dudu</i></div>

    </div>

    <main id="main">

        <section id="portfolio" class="portfolio">
            <!-- Courses -->
            <div id="courses" class="section">

                <!-- container -->
                <div class="container">

                    <!-- row -->

                    <div class="section-title">
                        <h2 data-aos="fade-in">Explore Courses</h2>
                        <p data-aos="fade-in">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                    </div>

                    <!-- /row -->

                    <!-- courses -->
                    <div id="courses-wrapper">

                        <!-- row -->
                        <div class="row">


                            <!-- single course -->
                            @if (count($listclasses) > 0)
                                @foreach ($listclasses as $listclass)
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="course">
                                            <a href="#" class="course-img">
                                                <img src="assets/img/course/course10.jpg" alt="">
                                                <i class="course-link-icon fa fa-link"></i>
                                            </a>
                                            <a class="course-title" href="#">{{ $listclass->name }}</a>
                                            <div class="course-details">
                                                <span class="course-category">{{ $listclass->category }}</span>
                                                <span class="course-price course-premium">Rp
                                                    {{ number_format($listclass->price, 0, ',', '.') }}</span>
                                                <span
                                                    class="course-date">{{ date('d F Y', strtotime($listclass->date)) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif




                        </div>
                        <!-- /row -->


                    </div>
                    <!-- /courses -->
                    @if (count($listclasses) > 0)
                        <p class="text-center mt-4 mb-5"><button class="load-more btn btn-dark"
                                data-totalResult="{{ App\Listclass::count() }}">Load More</button>
                    @endif
                    <!-- /single course -->

                    <div class="row">
                        <div class="center-btn">
                            <a class="main-button icon-button" href="#">More Courses</a>
                        </div>
                    </div>

                </div>
                <!-- container -->

            </div>
            <!-- /Courses -->

        </section>

    </main>

@stop
