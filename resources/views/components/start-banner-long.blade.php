@props(["item"])
        <section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								{{$item->title}}
							</h1>
							<p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="{{route('blog')}}">Blog </a> <span class="lnr lnr-arrow-right"></span> <a href="#"> {{$item->title}}</a></p>
						</div>
					</div>
				</div>
			</section>

