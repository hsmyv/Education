<x-layout>
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Event Details
							</h1>
							<p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="event-details.html"> Event Details</a></p><span class="lnr lnr-arrow-right"></span> <a href="#"> {{$event->title}}</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 event-details-left">
							<div class="main-img">
								<img class="img-fluid" src="{{$event->getFirstMediaUrl('images')}}" alt="">
							</div>
							<div class="details-content">
								<a href="#">
									<h4>{{$event->title}}</h4>
								</a>
								<p>
                                    {!!$event->body!!}
                                </p>

							</div>
							<div class="social-nav row no-gutters">
								<div class="col-lg-6 col-md-6 ">
									<ul class="focials">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6 navs">
                                    @if($event->previous())
									<a href="{{route('events.show', $event->previous())}}" class="nav-prev"><span class="lnr lnr-arrow-left"></span>Prev Event</a>
                                    @endif
                                    @if($event->next())
                                    <a href="{{route('events.show', $event->next())}}" class="nav-next">Next Event<span class="lnr lnr-arrow-right"></span></a>
                                    @endif
                                </div>
							</div>
						</div>
						<div class="col-lg-4 event-details-right">
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Start date</span>
										<span>{{$event->start_date}}</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>End date</span>
										<span>{{$event->end_date}}</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Ticket Price</span>
										<span>{{$event->ticket_price}}</span>
									</li>
								</ul>
							</div>
							<div class="single-event-details">
								<h4>Venue</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Place</span>
										<span>{{$event->place}}</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Street</span>
										<span>{{$event->street}}</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>City</span>
										<span>{{$event->city}}</span>
									</li>
								</ul>
							</div>
							<div class="single-event-details">
								<h4>Organiser</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Company</span>
										<span>{{$event->company}}</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Street</span>
										<span>{{$event->street}}</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>City</span>
										<span>{{$event->city}}</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End event-details Area -->


			<!-- Start cta-two Area -->
			<x-view-our-blog/>
			<!-- End cta-two Area -->
</x-layout>
