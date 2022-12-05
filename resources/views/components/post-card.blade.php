                           @props(['post'])
                           <div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li><a href="{{route('getcategory', $post->category->slug)}}">{{$post->category->name}}</a></li>
									</ul>
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="{{route('getusername', $post->user->name)}}">{{$post->user->name}}</a> <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$post->created_at->diffForHumans()}}</a> <span class="lnr lnr-calendar-full"></span></p>
										<p class="view col-lg-12 col-md-12 col-6"><a href="#">{{$post->views}} Views</a> <span class="lnr lnr-eye"></span></p>
										<p class="comments col-lg-12 col-md-12 col-6"><a href="#">{{$post->comments->count()}} Comments</a> <span class="lnr lnr-bubble"></span></p>
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img" >
										<img class="img-fluid" src="{{$post->getFirstMediaUrl('images')}}" alt="">


									</div>
									<a class="posts-title"><h3>{{$post->title}}</h3></a>
									<p class="excerpt">
                                       {{substr(strip_tags($post->description),0,150)}}
										{{strlen(strip_tags($post->description))>125 ? "...":""}}
									</p>
									<a href="{{route('show-post', $post->slug)}}" class="primary-btn">View More</a>
                                    </form>
								</div>
							</div>
