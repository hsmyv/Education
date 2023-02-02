<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget search-widget">
									<form class="search-form" action="#">
			                            <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
			                            <button type="submit"><i class="fa fa-search"></i></button>
			                        </form>
								</div>
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Popular Posts</h4>
									<div class="popular-post-list">
                                        @foreach ($popularposts as $post)
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="">
												<img class="img-fluid" width="50" height="50" src="{{$post->getFirstMediaUrl('images')}}" alt="">
											</div>
											<div class="details">
												<a href="{{route('show-post', $post->slug)}}"><h6>{{words($post->title, $limit = 50, $end = '...')}}</h6></a>
												<p>{{$post->created_at->diffForHumans()}}</p>
                                                <p>views: {{$post->views}}</p>
											</div>
										</div>
                                        @endforeach
									</div>
								</div>
								<div class="single-sidebar-widget ads-widget">
									<a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
								</div>
								<div class="single-sidebar-widget post-category-widget">
									<h4 class="category-title">Post Catgories</h4>
									<ul class="cat-list">
                                        @foreach ($categories as $category)

                                            @if($category->posts->where('published_at', '<', now())->count() > 0)
                                            <li>
                                             <a href="{{route('getcategory', $category->slug)}}" class="d-flex justify-content-between">
                                             <p>{{$category->name}}</p>
                                             <p>{{$category->posts->where('published_at', '<', now())->count()}}</p>
                                             </a>
                                             </li>
                                            @endif


                                        @endforeach
									</ul>
								</div>
								<div class="single-sidebar-widget newsletter-widget">
									<h4 class="newsletter-title">Newsletter</h4>
									<p>
										Here, I focus on a range of items and features that we use in life without
										giving them a second thought.
									</p>
									<div class="form-group d-flex flex-row">
									   <div class="col-autos">
									      <div class="input-group">
									        <div class="input-group-prepend">
									          <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
									        </div>
									        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" >
									      </div>
									    </div>
									    <a href="#" class="bbtns">Subcribe</a>
									</div>
									<p class="text-bottom">
										You can unsubscribe at any time
									</p>
								</div>
								<div class="single-sidebar-widget tag-cloud-widget">
									<h4 class="tagcloud-title">Tag Clouds</h4>
									<ul>
                                        @foreach ($categories as $category)
                                            <li><a href="{{route('getcategory', $category->slug)}}">{{$category->name}}</a></li>
                                        @endforeach
									</ul>
								</div>
							</div>
						</div>
