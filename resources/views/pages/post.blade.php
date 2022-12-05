<x-layout>
			<!-- start banner Area -->
			<x-start-banner-long :item="$post"/>
			<!-- End banner Area -->

			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
										<img  class="img-fluid" src="{{$post->getFirstMediaUrl('images')}}" alt="">
									</div>
								</div>
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li><a href="#">{{$post->category->name}}</a></li>
									</ul>
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="{{route('getusername', $post->user->name)}}">{{$post->user->name}}</a> <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$post->created_at->diffForHumans()}}</a> <span class="lnr lnr-calendar-full"></span></p>
										<p class="view col-lg-12 col-md-12 col-6"><a href="#">{{$post->views}} Views</a> <span class="lnr lnr-eye"></span></p>
										<p class="comments col-lg-12 col-md-12 col-6"><a href="#">{{$post->allcomments()}} Comments</a> <span class="lnr lnr-bubble"></span></p>
										<ul class="social-links col-lg-12 col-md-12 col-6">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-github"></i></a></li>
											<li><a href="#"><i class="fa fa-behance"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-9 col-md-9">
									<h3 class="mt-20 mb-20">{{$post->title}}</h3>
									<p class="excert">
                                        {!!$post->body!!}
									</p>
								</div>
								{{--<div class="col-lg-12">
									<div class="row mt-30 mb-30">
										<div class="col-6">
											<img class="img-fluid" src="/img/blog/post-img1.jpg" alt="">
										</div>
										<div class="col-6">
											<img class="img-fluid" src="/img/blog/post-img2.jpg" alt="">
										</div>
										<div class="col-lg-12 mt-30">
											<p>
												MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower.
											</p>
											<p>
												MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower.
											</p>
										</div>
									</div>
								</div>--}}
							</div>
							<div class="navigation-area">
								<div class="row">
                                     @if($post->previous())
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="thumb">
											<a href="{{route('show-post', $post->previous()->slug ?? 'Null')}}"><img class="img-fluid" src="/img/blog/prev.jpg" alt=""></a>
										</div>
										<div class="arrow">
											<a href="{{route('show-post', $post->previous()->slug ?? 'Null')}}"><span class="lnr text-white lnr-arrow-left"></span></a>
										</div>
										<div class="detials">
											<p>Prev Post</p>
											<a href="{{route('show-post', $post->previous()->slug ?? 'Null')}}"><h4>{{$post->previous()->title ?? 'Null'}}</h4></a>
                                        </div>
									</div>
                                    @endif
                                    @if($post->next())
									<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<div class="detials">
											<p>Next Post</p>
											<a href="{{route('show-post', $post->next()->slug ?? 'Null')}}"><h4>{{$post->next()->title ?? 'Null'}}</h4></a>

										</div>
										<div class="arrow">
											<a href="{{route('show-post', $post->next()->slug ?? 'Null')}}"><span class="lnr text-white lnr-arrow-right"></span></a>
										</div>
										<div class="thumb">
											<a href="{{route('show-post', $post->next()->slug ?? 'Null')}}"><img class="img-fluid" src="/img/blog/next.jpg" alt=""></a>
										</div>
									</div>
                                    @endif
								</div>
							</div>
                            <div class="comments-area">
                                 <h4>{{$post->comments->count()}} Comments</h4>
                            @if($post->comments->count())
                                @foreach ($post->comments as $comment )
                                        <x-post-comment :comment="$comment" :post_id="$post->id"/>

                                @endforeach
                             @else
                             <p class="text-center">No comments yet.</p>
                             @endif
                            </div>
                            @auth
    						<div class="comment-form">
								<h4>Leave a Comment</h4>
								<form method="POST" action="{{route('post-comment', $post->slug)}}">
                                    @csrf
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="body" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                        @error('body')
                                        <span class="text-xs text-red-500">{{$message}}</span>
                                        @enderror
                                    </div>
                                        <a href="#" class="primary-btn text-uppercase"><button type="submit">Post Comment</button></a>
								</form>
							</div>
                            @else
                            <div align="center">
                            <p class="font-semibold">
                            <a target="blank" href="{{route('show-register')}}" class="hover:underline">Register</a> or
                            <a href="{{route('show-login')}}" class="hover:underline">login</a> to leave a comment</p>
                            </div>
                            @endauth
						</div>
                    <x-rightsidebar :posts="$posts"/>
					</div>
				</div>
			</section>
			<!-- End post-content Area -->
</x-layout>
