@extends('layouts.app')

@section('title')
    Our Gallery
@endsection

@section('content')
    <div id="fh5co-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
                    <h3><strong>Our Gallery</strong></h3>
                    <p>Explore moments of joy and community shared through our mission. See how your support makes a difference in the lives of seniors and individuals in need.</p>
                </div>
            </div>

            <div class="row row-bottom-padded-md">
                <div class="col-md-12">
                    <ul id="fh5co-portfolio-list">
                        <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_1.jpg);">
                            <a href="#" class="color-3">
                                <div class="case-studies-summary">
                                    <span>GIVE LOVE, SHARE LOVE</span>
                                    <h2>Volunteers Get-together</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_2.jpg);">
                            <a href="#" class="color-4">
                                <div class="case-studies-summary">
                                    <span>GIVE LOVE, SHARE LOVE</span>
                                    <h2>Helping our beloved Seniors</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_3.jpg);">
                            <a href="#" class="color-5">
                                <div class="case-studies-summary">
                                    <span>GIVE LOVE, SHARE LOVE</span>
                                    <h2>Fulfilment of delivery personnels</h2>
                                </div>
                            </a>
                        </li>
                        <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_4.jpg);">
                            <a href="#" class="color-6">
                                <div class="case-studies-summary">
                                    <span>GIVE LOVE, SHARE LOVE</span>
                                    <h2>Another project done!</h2>
                                </div>
                            </a>
                        </li>
                        <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_5.jpg);">
                            <a href="#" class="color-3">
                                <div class="case-studies-summary">
                                    <span>GIVE LOVE, SHARE LOVE</span>
                                    <h2>Packed Blessings</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_6.jpg);">
                            <a href="#" class="color-4">
                                <div class="case-studies-summary">
                                    <span>GIVE LOVE, SHARE LOVE</span>
                                    <h2>Generous Experts</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_7.jpg);">
                            <a href="#" class="color-5">
                                <div class="case-studies-summary">
                                    <span>GIVE LOVE, SHARE LOVE</span>
                                    <h2>Generousity brings joy</h2>
                                </div>
                            </a>
                        </li>
                        <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_8.jpg);">
                            <a href="#" class="color-6">
                                <div class="case-studies-summary">
                                    <span>GIVE LOVE, SHARE LOVE</span>
                                    <h2>Showing that we care!</h2>
                                </div>
                            </a>
                        </li>
                        <div class="text-center">
                            <span><a class="btn btn-primary btn-lg" href="/"><strong><- Return to Homepage</strong></a></span>
                            </div>
                        <!-- Add more <li> elements for additional images -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
