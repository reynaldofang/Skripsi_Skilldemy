@extends('site.app')
@section('title', 'List Class Categories')
@section('content')
    <main id="main" class="main-background">
        @foreach ($listclasses as $listclass)
            <div class="container">
                <div class="card-columns d-flex justify-content-center">
                    <div class="container">
                        <div class="row">
                            @foreach ($categories as $category)
                                <div class="col pt-5 pb-5">

                                    <div class="card text-center middle" style="max-width: 800px">
                                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">


                                            <img src="{{ asset('storage/images') }}/{{ $category->fileimage }}"
                                                class="category-photo" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>



                                <div class="col pt-5">
                                    <h1 class="card-title text-xl detail-title">{{ $category->name }}</h1>
                                    <div class="tile-footer">
                                        <p class="card-text">{{ $category->about }}</p>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <div class="class-category">
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


                    </div>
                    <!-- container -->

                </div>
                <!-- /Courses -->

            </section>

        </div>
    </main>
