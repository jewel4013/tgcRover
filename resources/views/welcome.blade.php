{{-- @extends('tgcLayout') --}}
<x-app-layout>

    @section('pageTitle', 'Tongi Govt College Rover & Girl-in Rover Unit')
    @section('bodyContent') 
                @include('partials.slider')
                <!-- Start Schedule Area -->
                <section class="schedule">
                    <div class="container">
                        <div class="schedule-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 ">
                                    <!-- single-schedule -->
                                    <div class="single-schedule first">
                                        <div class="inner m-0 p-3">
                                            <div class="d-flex flex-column justify-content-start align-items-center">
                                                <img src="{{ asset('img/Principlesir.jpg') }}" style="max-width: 85%" class="img-thumbnail" alt="">
                                                <span class="h5 mt-2 mb-0">Prof. Md. Rafiqul Islam</span>
                                                <span class="p-0">President of TGC Rover</span>
                                                <h4 class="mt-3">বাণী</h4>
                                                <p class="text-justify mt-1">
                                                    শিক্ষা শুধু বই পড়া নয়। মানুষের জীবনে বিকল্প কোনো কিছু নেই। শিক্ষার মাধ্যমে একজন মানুষ দক্ষ, বিনয়ী ও প্রকৃত মানুষ হয়ে উঠে।
                                                    শিক্ষা শুধু বই পড়া নয়। মানুষের জীবনে বিকল্প কোনো কিছু নেই। শিক্ষার মাধ্যমে একজন মানুষ দক্ষ, বিনয়ী ও প্রকৃত মানুষ হয়ে উঠে ...
                                                    <a href="#" class="m-0 p-0">Read More<i class="fa fa-long-arrow-right"></i></a>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 ">
                                    <!-- single-schedule -->
                                    <div class="single-schedule first">
                                        <div class="inner m-0 p-3">
                                            <div class="d-flex flex-column justify-content-start align-items-center">
                                                <img src="{{ asset('img/RSL1.jpg') }}" style="max-width: 85%" class="img-thumbnail" alt="">
                                                <span class="h5 mt-2 mb-0">Prof. Md. Sarowar Hosen</span>
                                                <span class="p-0">Rover Scout Leader Rover</span>
                                                <h4 class="mt-3">বাণী</h4>
                                                <p class="text-justify mt-1">
                                                    শিক্ষা শুধু বই পড়া নয়। মানুষের জীবনে বিকল্প কোনো কিছু নেই। শিক্ষার মাধ্যমে একজন মানুষ দক্ষ, বিনয়ী ও প্রকৃত মানুষ হয়ে উঠে।
                                                    শিক্ষা শুধু বই পড়া নয়। মানুষের জীবনে বিকল্প কোনো কিছু নেই। শিক্ষার মাধ্যমে একজন মানুষ দক্ষ, বিনয়ী ও প্রকৃত মানুষ হয়ে উঠে ...
                                                    <a href="#" class="m-0 p-0">Read More<i class="fa fa-long-arrow-right"></i></a>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 ">
                                    <!-- single-schedule -->
                                    <div class="single-schedule first">
                                        <div class="inner m-0 p-3">
                                            <div class="d-flex flex-column justify-content-start align-items-center">
                                                <img src="{{ asset('img/RSL2.jpg') }}" style="max-width: 85%" class="img-thumbnail" alt="">
                                                <span class="h5 mt-2 mb-0">Prof. Md. Rafiqul Islam</span>
                                                <span class="p-0">Rover Scout Leader Girl</span>
                                                <h4 class="mt-3">বাণী</h4>
                                                <p class="text-justify mt-1">
                                                    শিক্ষা শুধু বই পড়া নয়। মানুষের জীবনে বিকল্প কোনো কিছু নেই। শিক্ষার মাধ্যমে একজন মানুষ দক্ষ, বিনয়ী ও প্রকৃত মানুষ হয়ে উঠে।
                                                    শিক্ষা শুধু বই পড়া নয়। মানুষের জীবনে বিকল্প কোনো কিছু নেই। শিক্ষার মাধ্যমে একজন মানুষ দক্ষ, বিনয়ী ও প্রকৃত মানুষ হয়ে উঠে ...
                                                    <a href="#" class="m-0 p-0">Read More<i class="fa fa-long-arrow-right"></i></a>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{-- <div class="col-lg-4 col-md-12 col-12">
                                    <!-- single-schedule -->
                                    <div class="single-schedule last">
                                        <div class="inner">
                                            <div class="icon">
                                                <i class="icofont-ui-clock"></i>
                                            </div>
                                            <div class="single-content">
                                                <span>Donec luctus</span>
                                                <h4>Opening Hours</h4>
                                                <ul class="time-sidual">
                                                    <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                                                    <li class="day">Saturday <span>9.00-18.30</span></li>
                                                    <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                                                </ul>
                                                <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </section>
                <!--/End Start schedule Area -->

                <!-- Start Feautes -->
                <section class="Feautes section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2>We Are Always Ready to Help You</h2>
                                    {{-- <img src="img/section-img.png" alt="#"> --}}
                                    <p>
                                        সকল স্কাউটদের মূলমন্ত্র হলো “সদা প্রস্তুত”। মটো শব্দের অর্থ হলো সংক্ষিপ্ত নীতি বাক্য বা মূলমন্ত্র। স্কাউট মূলমন্ত্র হচ্ছে “সদা প্রস্তুত থাকা” যাকে ইংরেজিতে “Be Prepared” বলা হয়।
                                        যার অর্থ হচ্ছে মানসিক ও শারীরিকভাবে দায়িত্ব পালনের জন্য সবসময় প্রস্তুত থাকা।
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <!-- Start Single features -->
                                <div class="single-features">
                                    <div class="signle-icon">
                                        <i class="icofont-read-book"></i>
                                    </div>
                                    <h3>Get admission in college</h3>
                                    <p>রোভারিং এ যোগদানের জন্য অবশ্যই আপনাকে অত্র কলেজের শিক্ষার্থী হতে হবে।</p>
                                </div>
                                <!-- End Single features -->
                            </div>
                            <div class="col-lg-4 col-12">
                                <!-- Start Single features -->
                                <div class="single-features">
                                    <div class="signle-icon">
                                        <i class="icofont-ui-user-group"></i>
                                    </div>
                                    <h3>Join Rover Scout</h3>
                                    <p>রোভারিং এ যোগদানের জন্য অবশ্যই আপনাকে অত্র কলেজের শিক্ষার্থী হতে হবে।</p>
                                </div>
                                <!-- End Single features -->
                            </div>
                            <div class="col-lg-4 col-12">
                                <!-- Start Single features -->
                                <div class="single-features last">
                                    <div class="signle-icon">
                                        <i class="icofont-aids"></i>
                                    </div>
                                    <h3>Give service</h3>
                                    <p>রোভারিং এ যোগদানের জন্য অবশ্যই আপনাকে অত্র কলেজের শিক্ষার্থী হতে হবে।</p>
                                </div>
                                <!-- End Single features -->
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ End Feautes -->

                <!-- Start Fun-facts -->
                <div id="fun-facts" class="fun-facts section overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Start Single Fun -->
                                <div class="single-fun">
                                    <i class="icofont-brand-ubuntu"></i>
                                    <div class="content">
                                        <span class="counter">4</span>
                                        <p>Units</p>
                                    </div>
                                </div>
                                <!-- End Single Fun -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Start Single Fun -->
                                <div class="single-fun">
                                    <i class="icofont-people"></i>
                                    <div class="content">
                                        <span class="counter">2749</span>
                                        <p>Members</p>
                                    </div>
                                </div>
                                <!-- End Single Fun -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Start Single Fun -->
                                <div class="single-fun">
                                    <i class="icofont-ui-home"></i>
                                    <div class="content">
                                        <span class="counter">652</span>
                                        <p>Events</p>
                                    </div>
                                </div>
                                <!-- End Single Fun -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Start Single Fun -->
                                <div class="single-fun">
                                    <i class="icofont-award"></i>
                                    <div class="content">
                                        <span class="counter">779</span>
                                        <p>Awards</p>
                                    </div>
                                </div>
                                <!-- End Single Fun -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Fun-facts -->

                {{-- <!-- Start Why choose -->
                <section class="why-choose section" >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2>We Offer Different Services To Improve Your Health</h2>
                                    <img src="img/section-img.png" alt="#">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <!-- Start Choose Left -->
                                <div class="choose-left">
                                    <h3>Who We Are</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo. </p>
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="list">
                                                <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
                                                <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                                <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="list">
                                                <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
                                                <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                                <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Choose Left -->
                            </div>
                            <div class="col-lg-6 col-12">
                                <!-- Start Choose Rights -->
                                <div class="choose-right">
                                    <div class="video-image">
                                        <!-- Video Animation -->
                                        <div class="promo-video">
                                            <div class="waves-block">
                                                <div class="waves wave-1"></div>
                                                <div class="waves wave-2"></div>
                                                <div class="waves wave-3"></div>
                                            </div>
                                        </div>
                                        <!--/ End Video Animation -->
                                        <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <!-- End Choose Rights -->
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ End Why choose -->

                <!-- Start Call to action -->
                <section class="call-action overlay" data-stellar-background-ratio="0.5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="content">
                                    <h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
                                    <div class="button">
                                        <a href="#" class="btn">Contact Now</a>
                                        <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ End Call to action -->

                <!-- Start portfolio -->
                <section class="portfolio section" >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
                                    <img src="img/section-img.png" alt="#">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="owl-carousel portfolio-slider">
                                    <div class="single-pf">
                                        <img src="img/pf1.jpg" alt="#">
                                        <a href="portfolio-details.html" class="btn">View Details</a>
                                    </div>
                                    <div class="single-pf">
                                        <img src="img/pf2.jpg" alt="#">
                                        <a href="portfolio-details.html" class="btn">View Details</a>
                                    </div>
                                    <div class="single-pf">
                                        <img src="img/pf3.jpg" alt="#">
                                        <a href="portfolio-details.html" class="btn">View Details</a>
                                    </div>
                                    <div class="single-pf">
                                        <img src="img/pf4.jpg" alt="#">
                                        <a href="portfolio-details.html" class="btn">View Details</a>
                                    </div>
                                    <div class="single-pf">
                                        <img src="img/pf1.jpg" alt="#">
                                        <a href="portfolio-details.html" class="btn">View Details</a>
                                    </div>
                                    <div class="single-pf">
                                        <img src="img/pf2.jpg" alt="#">
                                        <a href="portfolio-details.html" class="btn">View Details</a>
                                    </div>
                                    <div class="single-pf">
                                        <img src="img/pf3.jpg" alt="#">
                                        <a href="portfolio-details.html" class="btn">View Details</a>
                                    </div>
                                    <div class="single-pf">
                                        <img src="img/pf4.jpg" alt="#">
                                        <a href="portfolio-details.html" class="btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ End portfolio -->

                <!-- Start service -->
                <section class="services section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2>We Offer Different Services To Improve Your Health</h2>
                                    <img src="img/section-img.png" alt="#">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Start Single Service -->
                                <div class="single-service">
                                    <i class="icofont icofont-prescription"></i>
                                    <h4><a href="service-details.html">General Treatment</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
                                </div>
                                <!-- End Single Service -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Start Single Service -->
                                <div class="single-service">
                                    <i class="icofont icofont-tooth"></i>
                                    <h4><a href="service-details.html">Teeth Whitening</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
                                </div>
                                <!-- End Single Service -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Start Single Service -->
                                <div class="single-service">
                                    <i class="icofont icofont-heart-alt"></i>
                                    <h4><a href="service-details.html">Heart Surgery</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
                                </div>
                                <!-- End Single Service -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Start Single Service -->
                                <div class="single-service">
                                    <i class="icofont icofont-listening"></i>
                                    <h4><a href="service-details.html">Ear Treatment</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
                                </div>
                                <!-- End Single Service -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Start Single Service -->
                                <div class="single-service">
                                    <i class="icofont icofont-eye-alt"></i>
                                    <h4><a href="service-details.html">Vision Problems</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
                                </div>
                                <!-- End Single Service -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Start Single Service -->
                                <div class="single-service">
                                    <i class="icofont icofont-blood"></i>
                                    <h4><a href="service-details.html">Blood Transfusion</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
                                </div>
                                <!-- End Single Service -->
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ End service -->

                <!-- Pricing Table -->
                <section class="pricing-table section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2>We Provide You The Best Treatment In Resonable Price</h2>
                                    <img src="img/section-img.png" alt="#">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Single Table -->
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="single-table">
                                    <!-- Table Head -->
                                    <div class="table-head">
                                        <div class="icon">
                                            <i class="icofont icofont-ui-cut"></i>
                                        </div>
                                        <h4 class="title">Plastic Suggery</h4>
                                        <div class="price">
                                            <p class="amount">$199<span>/ Per Visit</span></p>
                                        </div>
                                    </div>
                                    <!-- Table List -->
                                    <ul class="table-list">
                                        <li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
                                        <li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
                                        <li class="cross"><i class="icofont icofont-ui-close"></i>Nullam interdum enim</li>
                                        <li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
                                        <li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
                                    </ul>
                                    <div class="table-bottom">
                                        <a class="btn" href="#">Book Now</a>
                                    </div>
                                    <!-- Table Bottom -->
                                </div>
                            </div>
                            <!-- End Single Table-->
                            <!-- Single Table -->
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="single-table">
                                    <!-- Table Head -->
                                    <div class="table-head">
                                        <div class="icon">
                                            <i class="icofont icofont-tooth"></i>
                                        </div>
                                        <h4 class="title">Teeth Whitening</h4>
                                        <div class="price">
                                            <p class="amount">$299<span>/ Per Visit</span></p>
                                        </div>
                                    </div>
                                    <!-- Table List -->
                                    <ul class="table-list">
                                        <li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
                                        <li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
                                        <li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
                                        <li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
                                        <li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
                                    </ul>
                                    <div class="table-bottom">
                                        <a class="btn" href="#">Book Now</a>
                                    </div>
                                    <!-- Table Bottom -->
                                </div>
                            </div>
                            <!-- End Single Table-->
                            <!-- Single Table -->
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="single-table">
                                    <!-- Table Head -->
                                    <div class="table-head">
                                        <div class="icon">
                                            <i class="icofont-heart-beat"></i>
                                        </div>
                                        <h4 class="title">Heart Suggery</h4>
                                        <div class="price">
                                            <p class="amount">$399<span>/ Per Visit</span></p>
                                        </div>
                                    </div>
                                    <!-- Table List -->
                                    <ul class="table-list">
                                        <li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
                                        <li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
                                        <li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
                                        <li><i class="icofont icofont-ui-check"></i>Donec ultricies metus</li>
                                        <li><i class="icofont icofont-ui-check"></i>Pellentesque eget nibh</li>
                                    </ul>
                                    <div class="table-bottom">
                                        <a class="btn" href="#">Book Now</a>
                                    </div>
                                    <!-- Table Bottom -->
                                </div>
                            </div>
                            <!-- End Single Table-->
                        </div>
                    </div>
                </section>
                <!--/ End Pricing Table -->

                <!-- Start Blog Area -->
                <section class="blog section" id="blog">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2>Keep up with Our Most Recent Medical News.</h2>
                                    <img src="img/section-img.png" alt="#">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Single Blog -->
                                <div class="single-news">
                                    <div class="news-head">
                                        <img src="img/blog1.jpg" alt="#">
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <div class="date">22 Aug, 2020</div>
                                            <h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>
                                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Blog -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Single Blog -->
                                <div class="single-news">
                                    <div class="news-head">
                                        <img src="img/blog2.jpg" alt="#">
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <div class="date">15 Jul, 2020</div>
                                            <h2><a href="blog-single.html">Top five way for solving teeth problems.</a></h2>
                                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Blog -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Single Blog -->
                                <div class="single-news">
                                    <div class="news-head">
                                        <img src="img/blog3.jpg" alt="#">
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <div class="date">05 Jan, 2020</div>
                                            <h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
                                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Blog -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Blog Area -->

                <!-- Start clients -->
                <div class="clients overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="owl-carousel clients-slider">
                                    <div class="single-clients">
                                        <img src="img/client1.png" alt="#">
                                    </div>
                                    <div class="single-clients">
                                        <img src="img/client2.png" alt="#">
                                    </div>
                                    <div class="single-clients">
                                        <img src="img/client3.png" alt="#">
                                    </div>
                                    <div class="single-clients">
                                        <img src="img/client4.png" alt="#">
                                    </div>
                                    <div class="single-clients">
                                        <img src="img/client5.png" alt="#">
                                    </div>
                                    <div class="single-clients">
                                        <img src="img/client1.png" alt="#">
                                    </div>
                                    <div class="single-clients">
                                        <img src="img/client2.png" alt="#">
                                    </div>
                                    <div class="single-clients">
                                        <img src="img/client3.png" alt="#">
                                    </div>
                                    <div class="single-clients">
                                        <img src="img/client4.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Ens clients -->

                <!-- Start Appointment -->
                <section class="appointment">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2>We Are Always Ready to Help You. Book An Appointment</h2>
                                    <img src="img/section-img.png" alt="#">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <form class="form" action="#">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <input name="name" type="text" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <input name="email" type="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <input name="phone" type="text" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <div class="nice-select form-control wide" tabindex="0"><span class="current">Department</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option selected ">Department</li>
                                                        <li data-value="2" class="option">Cardiac Clinic</li>
                                                        <li data-value="3" class="option">Neurology</li>
                                                        <li data-value="4" class="option">Dentistry</li>
                                                        <li data-value="5" class="option">Gastroenterology</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <div class="nice-select form-control wide" tabindex="0"><span class="current">Doctor</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option selected ">Doctor</li>
                                                        <li data-value="2" class="option">Dr. Akther Hossain</li>
                                                        <li data-value="3" class="option">Dr. Dery Alex</li>
                                                        <li data-value="4" class="option">Dr. Jovis Karon</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="Date" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="button">
                                                    <button type="submit" class="btn">Book An Appointment</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-8 col-12">
                                            <p>( We will be confirm by an Text Message )</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6 col-md-12 ">
                                <div class="appointment-image">
                                    <img src="img/contact-img.png" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Appointment -->

                <!-- Start Newsletter Area -->
                <section class="newsletter section">
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg-6  col-12">
                                <!-- Start Newsletter Form -->
                                <div class="subscribe-text ">
                                    <h6>Sign up for newsletter</h6>
                                    <p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
                                </div>
                                <!-- End Newsletter Form -->
                            </div>
                            <div class="col-lg-6  col-12">
                                <!-- Start Newsletter Form -->
                                <div class="subscribe-form ">
                                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                        <input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Your email address'" required="" type="email">
                                        <button class="btn">Subscribe</button>
                                    </form>
                                </div>
                                <!-- End Newsletter Form -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /End Newsletter Area --> --}}


    @endsection

</x-app-layout>
