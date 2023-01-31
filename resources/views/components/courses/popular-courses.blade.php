<!-- Start popular-courses Area -->
			<section class="popular-courses-area section-gap courses-page">
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
                        @if($courses->count() <= 0)
                        <div class="title text-center">
                            <p>Oops.. No courses yet.</p>
                        </div>
                        @else
                        @foreach ($courses as $course )
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
                                    <a href="{{route('show', $course->slug)}}"><img class="img-fluid" height="150px" width="150px" src="{{$course->getFirstMediaUrl('images')}}"  alt=""></a>
								</div>
								<div class="meta d-flex justify-content-between">
									<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
									<h4>{{$course->fee}}$</h4>
								</div>
							</div>
							<div class="details">
								<a href="{{route('show', $course->slug)}}">
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
                            @endif
                </div>
				</div>

			</section>
			<!-- End popular-courses Area -->
