@extends('site.app')
@section('title', 'Detail Workshop')
@section('content')

    <main id="main" class="main-background">
        
        <div class="row">

            <div class="card middle" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-xl">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                </div>
            </div>


            <div class="card text-center middle" style="max-width: 800px">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text card-text-color">
                        Some quick example text to build on the card title and make up the bulk of the
                        card's content.
                    </p>
                    <a href="#!" class="btn btn-primary btn-block">Button</a>
                </div>
            </div>
        </div>


        <div class="background-detail-class">
            <div class="card ml-5 background-detail-class" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title card-color">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

            <div class="row mt-5 ">

                <div class="col-sm-6">
                    <div class="ml-5 background-detail-class">
                        <div class="card-body">
                            <h5 class="card-title card-color">What will you get?</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <ul class="card-text card-color">
                                <li>Lorem ipsum dolor sit amet, consectetur</li>
                                <li>apdisoiop elit, sed</li>
                                <li>Nam tempor arcu sit amet tortor viverra</li>
                                <li>sit amet finibus metus</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mr-5 background-detail-class">
                        <div class="card-body">
                            <h5 class="card-title card-color">You should Prepared:</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <ul class="card-text card-color">
                                <li>Lorem ipsum dolor sit amet, consectetur</li>
                                <li>apdisoiop elit, sed</li>
                                <li>Nam tempor arcu sit amet tortor viverra</li>
                                <li>sit amet finibus metus</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>


@endsection
