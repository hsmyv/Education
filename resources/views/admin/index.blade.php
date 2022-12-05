<x-admin.layout>
    <x-admin.header/>
    <x-admin.leftsidebar/>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Dashboard</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Dashboard</li>
				</ul>
			</div>
			<!-- Card -->
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg1">
						<div class="wc-item">
							<h4 class="wc-title">
								Total Frofit
							</h4>
							<span class="wc-des">
								All Customs Value
							</span>
							<span class="wc-stats">
								$<span class="counter">18</span>M
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									78%
								</span>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg2">
						<div class="wc-item">
							<h4 class="wc-title">
								 New Notifications
							</h4>
							<span class="wc-des">
								Customer Review
							</span>
							<span class="wc-stats counter">
								{{auth()->user()->unreadnotifications->count()}}
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									88%
								</span>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg3">
						<div class="wc-item">
							<h4 class="wc-title">
								New Orders
							</h4>
							<span class="wc-des">
								Fresh Order Amount
							</span>
							<span class="wc-stats counter">
								772
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									65%
								</span>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4">
						<div class="wc-item">
							<h4 class="wc-title">
								Users
							</h4>
							<span class="wc-des">
								Joined User
							</span>
							<span class="wc-stats counter">
								{{$users->count()}}
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									90%
								</span>
							</span>
						</div>
					</div>
				</div>
			</div>
			<!-- Card END -->
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-8 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>New Courses</h4>
						</div>
                        	<div class="widget-inner">
							<div class="new-user-list">
								<ul>
                                    @foreach ($courses as $course )
									<li>
										<span class="new-users-pic">
											<img src="assets/images/testimonials/pic2.jpg" alt=""/>
										</span>
										<span class="new-users-text">
											<a href="#" class="new-users-name">{{$course->title}}</a>
											<span class="new-users-info">Visual Designer,Google Inc </span>
										</span>
										<span class="new-users-btn">
											<a href="#" class="btn button-sm outline">View</a>
										</span>
									</li>
                                    @endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
				<div class="col-lg-4 m-b30">
					<div class="widget-box" >
						<div class="wc-title">
							<h4>Notifications</h4>
						</div>
						<div class="widget-inner">
							 <x-notifications/>
						</div>
					</div>
				</div>

				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>New Users</h4>
						</div>
						<div class="widget-inner">
							<div class="new-user-list">
								<ul>
                                    @foreach ($users as $user )
									<li>
										<span class="new-users-pic">
											<img src="assets/images/testimonials/pic2.jpg" alt=""/>
										</span>
										<span class="new-users-text">
											<a href="#" class="new-users-name">{{$user->name}}</a>
											<span class="new-users-info">Visual Designer,Google Inc </span>
										</span>
										<span class="new-users-btn">
											<a href="#" class="btn button-sm outline">Follow</a>
										</span>
									</li>
                                    @endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Orders</h4>
						</div>
						<div class="widget-inner">
							<div class="orders-list">
								<ul>
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name">Anna Strong </a>
											<span class="orders-info">Order #02357 | Date 12/08/2019</span>
										</span>
										<span class="orders-btn">
											<a href="#" class="btn button-sm red">Unpaid</a>
                                            <a href="#" class="btn button-sm green">Paid</a>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>
</x-admin.layout>
