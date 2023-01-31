<!-- Start Latest posts from our Blog area -->
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
                                {{substr(strip_tags($post->description),0,150)}}
								 {{strlen(strip_tags($post->description))>150 ? "...":""}}
                            </p>
							<a href="{{route('show-post', $post->slug)}}" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
                            @endforeach

					</div>
				</div>
			</section>
			<!-- End  Latest posts from our Blog area -->
