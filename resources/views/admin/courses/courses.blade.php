<x-admin.layout>
    <x-admin.header/>
    <x-admin.leftsidebar/>

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<x-admin.start-banner :post="$header"/>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">

						<div class="widget-inner">
                            @if($courses->count() <= 0)
                            Not found any course!
                            @else
                            @foreach ($courses as $course )


							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="{{$course->getFirstMediaUrl('images')}}" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>{{$course->title}}</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
													<img src="/assets/images/testimonials/pic3.jpg" alt=""/>
												</div>
												<div class="card-courses-user-info">
													<h5>Programmer</h5>
													<h4>{{$course->user->name}}</h4>
												</div>
											</li>
											<li class="card-courses-categories">
												<h5>3 Categories</h5>
												<h4>{{$course->category->name}}</h4>
											</li>
											<li class="card-courses-review">
												<h5>3 Review</h5>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</li>
                                            @if($course->status == 0)
											<li class="card-courses-stats">
												<a href="#" class="btn button-sm green radius-xl">Pending</a>
											</li>
                                            @endif
											<li class="card-courses-price">
												<del>$190</del>
												<h5 class="text-primary">${{$course->fee}}</h5>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Course Description</h6>
											<p> {{$course->description}} </p>
										</div>
										<div class="col-md-12">
                                            @if($course->status == 0)
                                            <form method="POST" action="{{route('update_status_course', $course->id)}}" style="display: inline">
                                                @csrf
                                                @method('PATCH')
											<button class="btn blue radius-xl outline">Approve</button>
                                            </form>
                                            @endif
                                            <a href="{{route('course.edit', $course->id)}}" class="btn green radius-xl outline">Edit</a>

                                             <form method="POST" action="{{route('delete-course', $course->id)}}" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                            <button class="btn red outline radius-xl">Delete</button>
                                    </form>
										</div>
									</div>
								</div>
							</div>
                             @endforeach
                             @endif
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

</x-admin.layout>
