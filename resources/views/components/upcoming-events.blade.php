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
