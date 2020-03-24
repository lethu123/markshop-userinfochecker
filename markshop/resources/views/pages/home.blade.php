@extends('layouts.app')
@section('content')
    @include('layouts.slider')

    <div class="home-page-icon-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box active">
                        <figure class="d-flex justify-content-center">
                            <img src="../../assets/thecharity/images/hands-gray.png" alt="">
                            <img src="../../assets/thecharity/images/hands-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Become a Volunteer</h3>
                        </header>

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris
                                quis aliquam. </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="../../assets/thecharity/images/donation-gray.png" alt="">
                            <img src="../../assets/thecharity/images/donation-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Dance & Music</h3>
                        </header>

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris
                                quis aliquam. </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="../../assets/thecharity/images/charity-gray.png" alt="">
                            <img src="../../assets/thecharity/images/charity-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Online Conference</h3>
                        </header>

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris
                                quis aliquam. </p>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->


    {{--    =================== Product ======================--}}
    <div class="our-causes">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Our Causes</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="row">
                @foreach($product as $key)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="cause-wrap">
                            <figure class="m-0">
                                <img src={{$key->thumbnail}} alt="">
                            </figure>

                            <div class="cause-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    @if(strlen($key->description) > 50)
                                        <p class="m-0">{{substr($key->description, 0, 100)."..."}}</p>
                                    @else
                                        <p class="m-0">{{$key->description}}</p>
                                    @endif

                                </div><!-- .entry-content -->

                                <div class="fund-raised w-100">

                                    <div
                                        class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                        <div class="fund-raised-total mt-4">
                                            Price: {{$key->price}}
                                        </div><!-- .fund-raised-total -->

                                        <div class="fund-raised-goal mt-4">
                                            vnd
                                        </div><!-- .fund-raised-goal -->
                                    </div><!-- .fund-raised-details -->
                                    <p class="btnDonate text-center mt-3">
                                        <a href="#" class="btn orange-border btn-block">Add to cart</a>
                                    </p>
                                </div><!-- .fund-raised -->
                            </div><!-- .cause-content-wrap -->
                        </div><!-- .cause-wrap -->
                    </div><!-- .col -->

                @endforeach

            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->
    {{--    ================= end product =======================--}}

    <div class="home-page-events">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="upcoming-events">
                        <div class="section-heading">
                            <h2 class="entry-title">Upcoming Events</h2>
                        </div><!-- .section-heading -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="../../assets/thecharity/images/event-1.jpg" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Fundraiser for Kids</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Aug 25, 2018 </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                        tempus vestib ulum mauris.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="../../assets/thecharity/images/event-2.jpg" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Aug 25, 2018 </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                        tempus vestib ulum mauris.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="../../assets/thecharity/images/event-3.jpg" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Aug 25, 2018 </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                        tempus vestib ulum mauris.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->
                    </div><!-- .upcoming-events -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6">
                    <div class="featured-cause">
                        <div class="section-heading">
                            <h2 class="entry-title">Featured Cause</h2>
                        </div><!-- .section-heading -->

                        <div class="cause-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="../../assets/thecharity/images/featured-causes.jpg" alt="">
                            </figure>

                            <div class="cause-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Fundraiser for Kids</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Aug 25, 2018 </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                        tempus vestib ulum mauris. Lorem ipsum dolor sit amet, consectetur.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .cause-content-wrap -->

                            <div class="fund-raised w-100">
                                <div class="featured-fund-raised-bar barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div><!-- .tipWrap -->

                                    <span class="fill" data-percentage="83"></span>
                                </div><!-- .fund-raised-bar -->

                                <div
                                    class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">
                                        Raised: $56 880
                                    </div><!-- .fund-raised-total -->

                                    <div class="fund-raised-goal mt-4">
                                        Goal: $70 000
                                    </div><!-- .fund-raised-goal -->

                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-wrap -->
                    </div><!-- .featured-cause -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-events -->



    {{--    <div class="home-page-limestone">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row align-items-end">--}}
    {{--                <div class="coL-12 col-lg-6">--}}
    {{--                    <div class="section-heading">--}}
    {{--                        <h2 class="entry-title">We love to help all the children that have problems in the world. After 15 years we have many goals achieved.</h2>--}}

    {{--                        <p class="mt-5">Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet.</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-12 col-lg-6">--}}
    {{--                    <div class="milestones d-flex flex-wrap justify-content-between">--}}
    {{--                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">--}}
    {{--                            <div class="counter-box">--}}
    {{--                                <div class="d-flex justify-content-center align-items-center">--}}
    {{--                                    <img src="../../assets/thecharity/images/teamwork.png" alt="">--}}
    {{--                                </div>--}}

    {{--                                <div class="d-flex justify-content-center align-items-baseline">--}}
    {{--                                    <div class="start-counter" data-to="120" data-speed="2000"></div>--}}
    {{--                                    <div class="counter-k">K</div>--}}
    {{--                                </div>--}}

    {{--                                <h3 class="entry-title">Children helped</h3>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">--}}
    {{--                            <div class="counter-box">--}}
    {{--                                <div class="d-flex justify-content-center align-items-center">--}}
    {{--                                    <img src="../../assets/thecharity/images/donation.png" alt="">--}}
    {{--                                </div>--}}

    {{--                                <div class="d-flex justify-content-center align-items-baseline">--}}
    {{--                                    <div class="start-counter" data-to="79" data-speed="2000"></div>--}}
    {{--                                </div>--}}

    {{--                                <h3 class="entry-title">Water wells</h3>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">--}}
    {{--                            <div class="counter-box">--}}
    {{--                                <div class="d-flex justify-content-center align-items-center">--}}
    {{--                                    <img src="../../assets/thecharity/images/dove.png" alt="">--}}
    {{--                                </div>--}}

    {{--                                <div class="d-flex justify-content-center align-items-baseline">--}}
    {{--                                    <div class="start-counter" data-to="253" data-speed="2000"></div>--}}
    {{--                                </div>--}}

    {{--                                <h3 class="entry-title">Volunteeres</h3>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <!-- Sponsor -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-header text-center">
                        <h3 class="section-title">Our <span class="theme-color">Sponsors</span></h3>
                        <p class="section-subtext">Moluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div id="sponsors-carousel" class="sponsors-carousel owl-carousel">
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/1.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/2.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/3.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/4.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/5.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/6.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/1.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/2.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/3.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/4.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/5.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/6.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/1.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/2.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/3.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/4.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/5.png" alt="Sponsor Logo">
                        </a>
                        <a class="sponsor" href="#">
                            <img src="../../assets/charityhope/images/sponsors/6.png" alt="Sponsor Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sponsor End -->

@endsection
