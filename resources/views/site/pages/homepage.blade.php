@extends('site.app')
@section('title', 'Workshop')
@section('content')

    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
                    <h1>Skilldemy #BeMoreBeDifferent</h1>
                    <h2>Discover, learn, and enrich your softskills with us to be more be different.</h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('frontend/img/icons/roket3.png') }}"
                        class="img-fluid animated homepage-photo" alt="">
                </div>
            </div>
        </div>

    </section>

    <div class="d-flex justify-content-center font-weight-bold p-4 flex-workshop">
        @foreach ($categories as $category)
            <div class="item-icon">
                <a href="{{ route('listclass.category', $category->slug) }}">
                    <img src="{{ asset('storage/icons') }}/{{ $category->iconImage }}"
                      class="item-size"/>
                        <span class="item-caption">{{ $category->name }}</span>
                </a>
            </div>

        @endforeach
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
                                                <img src="{{ asset('storage/images') }}/{{ $listclass->fileimage }}"
                                                    style="max-height:217px; max-width: 217px;" />
                                                <i class="course-link-icon fa fa-link"></i>
                                            </a>
                                            <a class="course-title"
                                                href="{{ route('listclass.show', $listclass->slug) }}">{{ $listclass->name }}</a>
                                            <div class="course-details">
                                                <span class="course-category">{{ $listclass->category->name }}</span>
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
