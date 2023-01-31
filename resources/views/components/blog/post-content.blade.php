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
