<x-layout>

			<!-- start banner Area -->
			<section class="banner-area relative blog-home-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content blog-header-content col-lg-12">
							<h1 class="text-white">
								Dude You’re Getting
								a Telescope
							</h1>
							<p class="text-white">
								There is a moment in the life of any aspiring astronomer that it is time to buy that first
							</p>
							<a href="" class="primary-btn">View More</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start top-category-widget Area -->
			<section class="top-category-widget-area pt-90 pb-90 ">
				<div class="container">
					<div class="row">
                        @foreach ($limitcategories as $category)
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="{{route('getcategory', $category->slug)}}" target="_blank">
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget1.jpg" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">{{$category->name}}</h4>
								        <span></span>
								        <p>View</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>
                         @endforeach
					</div>
				</div>
			</section>
			<!-- End top-category-widget Area -->

			<!-- Start post-content Area -->
			<section class="post-content-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">

                            @if($posts->count())
                                @foreach ($posts as $post )
                                    <x-post-card :post="$post"/>
                                    <br>
                                @endforeach
                                @else
                                <p class= "text-center">No posts yet..</p>
                            @endif


		                    {{--pagination hissesi--}}

						</div>
                        
						<x-rightsidebar :posts="$posts" :categories="$categories"/>
					</div>
				</div>
			</section>
			<!-- End post-content Area -->
</x-layout>
