@section('title')
    Welcome
@endsection

@extends('layouts.app')

@section('content')

    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="color: #000;"><strong>Dashboard</strong></a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="color: #000;"><strong>Log in</strong></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="color: #000;"><strong>Register</strong></a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}

            <div id="fh5co-wrapper">
                <div id="fh5co-page">
        
                <div class="fh5co-hero">
                    <div class="fh5co-overlay"></div>
                    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/Landing_image.jpg);">
                        <div class="desc animate-box">
                            <h2> <strong> Fuel </strong> <strong style="color: #FCC74F;">Hope, One plate</strong> <strong> at a time </strong> </h2>
                            {{-- <span>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></span> --}}
                            <span><a class="btn btn-primary btn-lg" href="/donationFee">Donate Now</a></span>
                        </div>
                    </div>
        
                </div>
                <!-- end:header-top -->
                <div id="fh5co-features">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
        
                                <div class="feature-left">
                                    <span class="icon">
                                        <i class="icon-profile-male"></i>
                                    </span>
                                    <div class="feature-copy">
                                        <h3>Become a volunteer</h3>
                                        <p style="text-align: justify;">Join hands with MerryMeal in preparing and delivering nourishing meals to qualified adults who cannot cook due to age, disease, or disability. Your time and effort can bring warmth and sustenance where it's needed most. Compassion in Action.</p>
                                        <p><a href="/register">Learn More</a></p>
                                    </div>
                                </div>
        
                            </div>
        
                            <div class="col-md-4">
                                <div class="feature-left">
                                    <span class="icon">
                                        <i class="icon-happy"></i>
                                    </span>
                                    <div class="feature-copy">
                                        <h3>Happy Giving</h3>
                                        <p style="text-align: justify;">Support MerryMeal's mission with your donations and help us continue our vital service of providing hot meals to those in need. Every contribution makes a meaningful impact, spreading joy and nourishment throughout our community. Compassion in Action.</p>
                                        <p><a href="/donationFee">Learn More</a></p>
                                    </div>
                                </div>
        
                            </div>
                            <div class="col-md-4">
                                <div class="feature-left">
                                    <span class="icon">
                                        <i class="icon-wallet"></i>
                                    </span>
                                    <div class="feature-copy">
                                        <h3>Donation</h3>
                                        <p style="text-align: justify;">Your generosity fuels MerryMeal's efforts to ensure no one goes hungry. By donating today, you're directly supporting our mission to deliver meals to qualified adults living at home, who are unable to maintain their nutritional status independently. Compassion in Action.</p>
                                        <p><a href="/donationFee">Learn More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div id="fh5co-feature-product" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center heading-section">
                                <h3> <strong>Compassion in Action. </strong></h3>
                                <p>Transforming kindness into impactful efforts that uplift and empower lives. Join us in making the world a better place through every generous gesture.</p>
                            </div>
                        </div>
        
                        <div class="row row-bottom-padded-md">
                            <div class="col-md-6 text-center animate-box">
                                <p><img src="images/Grid_fourth.png" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
                            </div>
                            <div class="col-md-6 text-center animate-box">
                                <p><img src="images/Grid_second.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
                            </div>
                            <div class="col-md-6 text-center animate-box">
                                <p><img src="images/Grid_first.png" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
                            </div>
                            <div class="col-md-6 text-center animate-box">
                                <p><img src="images/Grid_third.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="feature-text">
                                    <h3>Love</h3>
                                    <p> Embracing others with warmth and empathy, nurturing hearts with kindness and understanding. Compassion in Action.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-text">
                                    <h3>Compassion</h3>
                                    <p> Giving selflessly to uplift and support those in need, embodying generosity and goodwill in every act. Compassion in Action.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-text">
                                    <h3>Charity</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
        
                        
                    </div>
                </div>
        
                
                <div id="fh5co-portfolio">
                    <div class="container">
        
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
                                <h3> <strong> Our Gallery </strong> </h3>
                                <p>Explore moments of joy and community shared through our mission. See how your support makes a difference in the lives of seniors and individuals in need.</p>
                            </div>
                        </div>
        
                        
                        <div class="row row-bottom-padded-md">
                            <div class="col-md-12">
                                <ul id="fh5co-portfolio-list">
        
                                    <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_1.jpg); ">
                                        <a href="#" class="color-3">
                                            <div class="case-studies-summary">
                                                <span>Give Love</span>
                                                <h2>Donation is caring</h2>
                                            </div>
                                        </a>
                                    </li>
                                
                                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_2.jpg); ">
                                        <a href="#" class="color-4">
                                            <div class="case-studies-summary">
                                                <span>Give Love</span>
                                                <h2>Donation is caring</h2>
                                            </div>
                                        </a>
                                    </li>
        
                                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_3.jpg); "> 
                                        <a href="#" class="color-5">
                                            <div class="case-studies-summary">
                                                <span>Give Love</span>
                                                <h2>Donation is caring</h2>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_4.jpg); ">
                                        <a href="#" class="color-6">
                                            <div class="case-studies-summary">
                                                <span>Give Love</span>
                                                <h2>Donation is caring</h2>
                                            </div>
                                        </a>
                                    </li>
                                </ul>		
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center animate-box">
                            <a href="{{ route('gallery') }}" class="btn btn-primary btn-lg">See Gallery</a>
                            </div>
                        </div>
        
                        
                    </div>
                </div>
                
        
                
                <div id="fh5co-content-section" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box" >
                                <h3><strong>Our Volunteers</strong></h3>
                                <p>Meet the heart and soul of our organization. Discover stories of dedication and compassion from those who make our mission possible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="fh5co-testimonial text-center animate-box">
                                    <figure>
                                        <img src="images/Volunteer_1.jpg" alt="user">
                                    </figure>
                                    <blockquote>
                                        <p>&ldquo; I love volunteering at MerryMeal for the joy of connecting with our community and making a positive impact through every meal delivery.&rdquo;</p>
                                    </blockquote>
                                    <span>Chandler Bing <br> Volunteer - Caregiver </br></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fh5co-testimonial text-center animate-box">
                                    <figure>
                                        <img src="images/Volunteer_2.jpg" alt="user">
                                    </figure>
                                    <blockquote>
                                        <p>&ldquo;Volunteering at MerryMeal is awesome! I love seeing the smiles on people's faces when we deliver meals. It feels great to make a difference in our community.&rdquo;</p>
                                    </blockquote>
                                    <span>Joey Tribbiani <br> Volunteer - Delivery Personnel </br></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fh5co-testimonial text-center animate-box">
                                    <figure>
                                        <img src="images/Volunteer_3.jpg" alt="user">
                                    </figure>
                                    <blockquote>
                                        <p>&ldquo;Volunteering at MerryMeal is fulfilling beyond words. Being able to provide nutritious meals to those in need is truly rewarding and reminds me of the importance of kindness and compassion.&rdquo;</p>
                                    </blockquote>
                                    <span> Ross Geller <br> Volunteer - Staff from MerryMeal Org. </br></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fh5co-content-section -->
        
               
        
                <!-- END What we do -->
        
        
                <div id="fh5co-blog-section" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                                <h3> <strong>Recent From Blog</strong></h3>
                                <p>Stay updated with our latest news, inspiring stories, and insights. Learn how we're making a difference and how you can get involved.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row row-bottom-padded-md">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/Blog_1.png" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href=""#>Embracing Technology: MerryMeal's Meals on Wheels Goes Digital</a></h3>
                                            <span class="posted_by">June. 28th</span>
                                            <span class="comment"><a href="">30<i class="icon-bubble2"></i></a></span>
                                            <p>At MerryMeal, our mission has always been to provide nutritious meals to seniors, elderly individuals, 
                                            and persons with disabilities who cannot cook for themselves. As we continue to grow and evolve,......</p>
                                            <p><a href="/blog">Learn More...</a></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/Blog_2.png" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href=""#>Celebrating a Milestone: Serving Our Elderly Community Online</a></h3>
                                            <span class="posted_by">June. 28th</span>
                                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                            <p>At MerryMeal, every meal delivered is a testament to our commitment to caring for seniors, 
                                            elderly individuals, and those with disabilities who rely on us for nutritious meals. Today,....</p>
                                            <p><a href="/blog">Learn More...</a></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="clearfix visible-sm-block"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/Blog_3.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href=""#>Celebrating a Partnership: Mactan Alfresco Joins MerryMeal's Online Service</a></h3>
                                            <span class="posted_by">June. 30th</span>
                                            <span class="comment"><a href="">43<i class="icon-bubble2"></i></a></span>
                                            <p>At MerryMeal, partnerships are the cornerstone of our ability to serve the community effectively. 
                                            Today, we are thrilled to announce....</p>
                                            <p><a href="/blog">Learn More...</a></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="clearfix visible-md-block"></div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center animate-box">
                                <a href="/blog" class="btn btn-primary btn-lg" style= "margin-bottom: -50px;">Our Blog</a>
                            </div>
                        </div>
        
                    </div>
                </div>
                <!-- fh5co-blog-section -->  
        
    </body>
@endsection
