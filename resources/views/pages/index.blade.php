<x-layout>
            @if (session()->has('success'))
        <div x-data = "{show:true}"
            x-init = "setTimeout(() => false, 4000)"
            x-show = "show"
            class = "fixed bg-blue-500 text-white py-1 px-5 rounded-xl bottom-5 right-7 text-sm"
            >
        <p>{{session('success')}} </p>
        </div>
            @endif
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								We Ensure better education
								for a better world
							</h1>
							<p class="pt-10 pb-10">
								In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.
							</p>
							<a href="#" class="primary-btn text-uppercase">Get Started</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Learn Online Courses</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Usage of the Internet is becoming more common due to rapid advancement
										of technology.
									</p>
									<a href="#">Join Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>No.1 of universities</h4>
								</div>
								<div class="desc-wrap">
									<p>
										For many of us, our very first experience of learning about the celestial bodies begins when we saw our first.
									</p>
									<a href="#">Join Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Huge Library</h4>
								</div>
								<div class="desc-wrap">
									<p>
										If you are a serious astronomy fanatic like a lot of us are, you can probably remember that one event.
									</p>
									<a href="#">Join Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End feature Area -->
            <div id="loaderIcon" class="spinner-border text-primary" style="display:none" role="status">
            <span class="sr-only">Loading...</span>
        </div>
			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Popular Courses we offer</h1>
								<p>There is a moment in the life of any aspiring.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-popular-carusel">
                            @foreach ($courses as $course )
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="/img/p3.jpg" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>${{$course->fee}}</h4>
									</div>
								</div>
								<div class="details">
									<a href="#">
										<h4>
											{{$course->title}}
										</h4>
									</a>
									<p>
                                         {{substr(strip_tags($course->description),0,150)}}
										 {{strlen(strip_tags($course->description))>150 ? "...":""}}

									</p>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
			</section>
			<!-- End popular-course Area -->

            <!-- Start search-course Area -->
                <x-search-course/>
            <!-- End search-course Area -->

			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Upcoming Events of our Institute</h1>
								<p>If you are a serious astronomy fanatic like a lot of us</p>
							</div>
						</div>
					</div>
					<div class="row">
                        {{--Temporarly I set courses instead of Events--}}
						<div class="active-upcoming-event-carusel">
                            @foreach ($courses as $course )

							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="/img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>{{$course->created_at->diffForHumans()}}</p>
									<a href="#"><h4>{{$course->title}}</h4></a>
									<p>
                                        {{substr(strip_tags($course->description),0,150)}}
										 {{strlen(strip_tags($course->description))>150 ? "...":""}}
									</p>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
			</section>
			<!-- End upcoming-event Area -->

			<!-- Start review Area -->
			<section class="review-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row">
						<div class="active-review-carusel">


							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- End review Area -->


			<!-- Start cta-one Area -->
			<section class="cta-one-area relative section-gap">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row justify-content-center">
						<div class="wrap">
							<h1 class="text-white">Become an instructor</h1>
							<p>
								There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck.
							</p>
							<a class="primary-btn wh" href="#">Apply for the post</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End cta-one Area -->

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest posts from our Blog</h1>
								<p>In the history of modern astronomy there is.</p>
							</div>
						</div>
					</div>
					<div class="row">
                        @foreach ($posts as $post )

						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{$post->getFirstMediaUrl('images')}}" alt="">
							</div>
							<p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>{{$post->title}}</h5>
							</a>
							<p>
                                {{substr(strip_tags($course->description),0,150)}}
								 {{strlen(strip_tags($course->description))>150 ? "...":""}}
                            </p>
							<a href="{{route('show-post', $post->slug)}}" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
                            @endforeach

					</div>
				</div>
			</section>
			<!-- End blog Area -->


			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Not Yet Satisfied with our Trend?</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="#">view our blog</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End cta-two Area -->
        </x-layout>
