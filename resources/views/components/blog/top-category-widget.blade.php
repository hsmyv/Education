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
