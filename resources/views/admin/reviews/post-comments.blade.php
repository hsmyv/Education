<x-admin.layout>
    <x-admin.header/>
    <x-admin.leftsidebar/>
    <!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Review Post Comments</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Review</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Review Post Comments</h4>
						</div>
						<div class="widget-inner">
                            @foreach ($comments as $comment )
							<div class="card-courses-list admin-review">
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>For Post: <a style="color:blue"href="{{route('show-post', $comment->post->slug)}}">{{$comment->post->title}}</a></h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
													<img src="/assets/images/testimonials/pic1.jpg" alt=""/>
												</div>
												<div class="card-courses-user-info">
													<h5>User</h5>
													<h4>{{$comment->user->name}}</h4>
												</div>
											</li>

											<li class="card-courses-categories">
												<h5>Date</h5>
												<h4>{{$comment->created_at->diffForHumans()}}</h4>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Commented: </h6>
											 <a>@if ($comment->commentable_user)
                                            <a style="color: blue">{{'replied to: '.$comment->commentable_user}}</a>
                                            </a>
                                            @endif
                                            <p>{{$comment->body}}</p>
										</div>
										<div class="col-md-12">
											<a href="{{route('show-post', $comment->post)}}" class="btn">View</a>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>
</x-admin.layout>
