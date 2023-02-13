	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="#"><img alt="" src="/assets/images/logo.png" width="122" height="27"></a>
				<!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="{{route('admin-index')}}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
		                	<span class="ttr-label">Dashborad</span>
		                </a>
		            </li>
                    {{--Pages--}}
                    <li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
		                	<span class="ttr-label">Pages</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="" class="ttr-material-button"><span class="ttr-label">Home</span></a>
		                	</li>
		                	<li>
		                		<a href="{{route('edit-about')}}" class="ttr-material-button"><span class="ttr-label">About</span></a>
		                	</li>
		                </ul>
		            </li>

                    <li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
		                	<span class="ttr-label">Course</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="{{route('admin-courses')}}" class="ttr-material-button"><span class="ttr-label">Courses</span></a>

		                	</li>
		                	<li>
		                		<a href="{{route('create-course')}}" class="ttr-material-button"><span class="ttr-label">Create Course</span></a>
		                	</li>
		                </ul>
		            </li>
                    <li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
		                	<span class="ttr-label">Blog</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="{{route('admin-posts')}}" class="ttr-material-button"><span class="ttr-label">Posts</span></a>
		                	</li>
		                	<li>
		                		<a href="{{route('admin-createpost')}}" class="ttr-material-button"><span class="ttr-label">Create Post</span></a>
		                	</li>
		                </ul>
		            </li>

                    <li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
		                	<span class="ttr-label">Event</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="#" class="ttr-material-button"><span class="ttr-label">Events</span></a>

		                	</li>
		                	<li>
		                		<a href="{{route('events.create')}}" class="ttr-material-button"><span class="ttr-label">Create Event</span></a>
		                	</li>
		                </ul>
		            </li>
                    <li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-email"></i></span>
		                	<span class="ttr-label">Contacts</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
                            <li>
                                <a href="{{route('admin-messages')}}" class="ttr-material-button">
                                <span class="ttr-icon"></span>
                                <span class="ttr-label">Mailbox</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin-contact')}}" class="ttr-material-button">
                                <span class="ttr-icon"></span>
                                <span class="ttr-label">Contact</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin-templates')}}" class="ttr-material-button">
                                <span class="ttr-icon"></span>
                                <span class="ttr-label">Templates</span>
                                </a>
                            </li>
		                </ul>
		            </li>

					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-calendar"></i></span>
		                	<span class="ttr-label">Calendar</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="basic-calendar.html" class="ttr-material-button"><span class="ttr-label">Basic Calendar</span></a>
		                	</li>
		                	<li>
		                		<a href="list-view-calendar.html" class="ttr-material-button"><span class="ttr-label">List View</span></a>
		                	</li>
		                </ul>
		            </li>

					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-comments"></i></span>
		                	<span class="ttr-label">Review</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
                        <ul>
                            <li>
		                		<a href="{{route('post-comments')}}" class="ttr-material-button"><span class="ttr-label">Post Comments</span></a>
		                	</li>
		                	<li>
		                		<a href="" class="ttr-material-button"><span class="ttr-label">Course Comments</span></a>
		                	</li>
                        </ul>
		            </li>

					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-user"></i></span>
		                	<span class="ttr-label">My Profile</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="user-profile.html" class="ttr-material-button"><span class="ttr-label">User Profile</span></a>
		                	</li>
		                	<li>
		                		<a href="teacher-profile.html" class="ttr-material-button"><span class="ttr-label">Teacher Profile</span></a>
		                	</li>
		                </ul>
		            </li>
		            <li class="ttr-seperate"></li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->
