<x-layout>
			<!-- start banner Area -->
				<x-start-banner :name="$coursesname"/>
			<!-- End banner Area -->

			<!-- Start popular-courses Area -->
			{{-- <section class="popular-courses-area section-gap courses-page">
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
                                    <a href="{{route('show', $course->slug)}}"><img class="img-fluid" width="50" height="50" src="{{$course->getFirstMediaUrl('images')}}"  alt=""></a>
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
                                    {{$course->description}}

								</p>
							</div>
						</div>
                            @endforeach
                            @endif
                </div>
				</div>
                <div align="center">
                <a  href="#" class="primary-btn text-uppercase mx-auto">Load More Courses</a>
                </div>
			</section> --}}
            <x-courses.popular-courses :courses="$courses"/>
            <div align="center">
                <a  href="#" class="primary-btn text-uppercase mx-auto">Load More Courses</a>
                </div>
			<!-- End popular-courses Area -->

			<!-- Start search-course Area -->
			    <x-courses.search-course/>
			<!-- End search-course Area -->

			<!-- Start upcoming-event Area -->
			<x-upcoming-events :courses="$courses"/>
			<!-- End upcoming-event Area -->

			<!-- Start cta-two Area -->
			<x-view-our-blog/>
			<!-- End cta-two Area -->
</x-layout>
