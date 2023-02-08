<x-layout>
    <!-- Content -->
    <!-- start banner Area -->
    <x-start-banner-long :item="$course" />
    <!-- End banner Area -->
    <!-- inner page banner END -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row d-flex flex-row-reverse">
                    <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                        <div class="course-detail-bx">
                            <div class="course-price">
                                <del>$190</del>
                                <h4 class="price">${{ $course->fee }}</h4>
                            </div>
                            <div class="course-buy-now text-center">
                                <a href="#" class="btn radius-xl text-uppercase">Buy Now This Courses</a>
                            </div>
                            <div class="teacher-bx">
                                <div class="teacher-info">
                                    <div class="teacher-thumb">
                                        <img src="/assets/images/testimonials/pic1.jpg" alt="" />
                                    </div>
                                    <div class="teacher-name">
                                        <h5>{{ $course->user->name }}</h5>
                                        <span>Science Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cours-more-info">
                                <div class="review">
                                    <span>3 Review</span>
                                    <ul class="cours-star">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="price categories">
                                    <span>Categories</span>
                                    <h5 class="text-primary">{{ $course->category->name }}</h5>
                                </div>
                            </div>
                            <div class="course-info-list scroll-page">
                                <ul class="navbar">
                                    <li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Overview</a></li>
                                    <li><a class="nav-link" href="#curriculum"><i
                                                class="ti-bookmark-alt"></i>Curriculum</a></li>
                                    <li><a class="nav-link" href="#instructor"><i class="ti-user"></i>Instructor</a>
                                    </li>
                                    <li><a class="nav-link" href="#reviews"><i class="ti-comments"></i>Reviews</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="courses-post">
                            <div class="ttr-post-media media-effect">
                                <a href="#"><img src="{{ $course->getFirstMediaUrl('images') }}"
                                        alt=""></a>
                            </div>
                            <div class="ttr-post-info">
                                <div class="ttr-post-title ">
                                    <h2 class="post-title">{{ $course->title }}</h2>
                                </div>
                                <div class="ttr-post-text">
                                    <p>{{ $course->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="courese-overview" id="overview">
                            <h4>Overview</h4>
                            <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <ul class="course-features">
                                        <li><i class="ti-book"></i> <span class="label">Lectures</span> <span
                                                class="value">8</span></li>
                                        <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span
                                                class="value">1</span></li>
                                        <li><i class="ti-time"></i> <span class="label">Duration</span> <span
                                                class="value">
                                                {{ getTotalDuration($course->id) }}
                                            </span></li>
                                        <li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span
                                                class="value">{{ $course->skill_level }}</span></li>
                                        <li><i class="ti-smallcap"></i> <span class="label">Language</span> <span
                                                class="value">{{ $course->language }}</span></li>
                                        <li><i class="ti-user"></i> <span class="label">Students</span> <span
                                                class="value">32</span></li>
                                        <li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span
                                                class="value">{{ $course->assessments }}</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <h5 class="m-b5">Certification</h5>
                                    <p> {{ $course->certification }}</p>
                                    <h5 class="m-b5">Learning Outcomes</h5>
                                    <br>
                                    <ul class="list-checked primary">
                                        <div class="ttr-post-text">
                                            <p>{!! $course->learning_outcomes !!}</p>

                                        </div>


                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="m-b30" id="curriculum">
                            <h4>Curriculum</h4>
                            <ul class="curriculum-list">
                                <br>

                                <li>@php $i=1 @endphp
                                    <h5>First Level example</h5>
                                    @foreach ($course->videos()->containingVideoPath()->get() as $video)
                                        <ul>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>Lesson {{ $i++ }}.</span> {{ $video->title }}
                                                    <button class="toggle-button" onclick="toggleVideo({{$i}})">
                                                        <i class="fa fa-play-circle"  id="toggle-icon-{{$i}}"></i>
                                                    </button>
                                                </div>
                                                <span>{{ $video->duration }} minutes</span>
                                            </li>
                                            <br>
                                        <div class="video-container video-container-{{ $i }}">
                                            <div>
                                                <video width="320" height="240" controls>
                                                    <source src="{{ URL::asset($video->video) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>

                                        </ul>
                                    @endforeach
                                </li>
                                <br>
                                <li>@php $i=1 @endphp
                                    <h5>Second Level example</h5>
                                    @foreach ($course->videos()->containingVideo2Path()->get() as $video)
                                        <ul>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>Lesson {{ $i++ }}.</span> {{ $video->title }}
                                                    <button class="toggle-button" onclick="toggleVideo2({{$i}})">
                                                        <i class="fa fa-play-circle" id="toggle-icon-{{$i}}"></i>
                                                    </button>
                                                </div>
                                                <span>{{ $video->duration }} minutes</span>
                                            </li>
                                            <br>
                                            <div class="video-container video-container2-{{ $i }}">
                                                <video width="320" height="240" controls>
                                                    <source src="{{ URL::asset($video->video) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>

                                        </ul>
                                    @endforeach
                                </li>
                                <li>
                                    <h5>Final</h5>
                                    <ul>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Part 1.</span> Final Test
                                            </div>
                                            <span>120 minutes</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Part 2.</span> Online Test
                                            </div>
                                            <span>120 minutes</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="" id="reviews">
                            <h4>Reviews</h4>

                            <div class="review-bx">
                                <div class="all-review">
                                    <h2 class="rating-type">3</h2>
                                    <ul class="cours-star">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>3 Rating</span>
                                </div>
                                <div class="review-bar">
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>5 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:90%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>150</div>
                                        </div>
                                    </div>
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>4 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:70%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>140</div>
                                        </div>
                                    </div>
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>3 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:50%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>120</div>
                                        </div>
                                    </div>
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>2 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:40%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>110</div>
                                        </div>
                                    </div>
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>1 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:20%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>80</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="jq-tab-content comment-wrap" data-tab="4">
                            <div class="comments-area">
                                <h4>05 Comments</h4>
                                <div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="/img/blog/c1.jpg" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">Emilly Blunt</a></h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                                <p class="comment">
                                                    Never say goodbye till the end comes!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="" class="btn-reply text-uppercase">reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-list left-padding">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="/img/blog/c2.jpg" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">Elsie Cunningham</a></h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                                <p class="comment">
                                                    Never say goodbye till the end comes!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="" class="btn-reply text-uppercase">reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="/img/blog/c4.jpg" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">Maria Luna</a></h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                                <p class="comment">
                                                    Never say goodbye till the end comes!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="" class="btn-reply text-uppercase">reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h4>Leave a Comment</h4>
                                <form>
                                    <div class="form-group form-inline">
                                        <div class="form-group col-lg-6 col-md-12 name">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Enter Name" onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Enter Name'">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 email">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter email address" onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Enter email address'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Subject" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Subject'">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                    </div>
                                    <a href="#" class="mt-40 text-uppercase genric-btn primary text-center">Post
                                        Comment</a>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->

    </div>
    <!-- Content END-->
    </div>
</x-layout>
<style>
    .video-container {
        display: none;
    }
</style>

<script>
  function toggleVideo(id) {
    var videoContainer = document.querySelector('.video-container-' + id);
    videoContainer.style.display = (videoContainer.style.display === 'none') ? 'block' : 'none';
  }
</script>
<script>
  function toggleVideo2(id) {
    var videoContainer = document.querySelector('.video-container2-' + id);
    videoContainer.style.display = (videoContainer.style.display === 'none') ? 'block' : 'none';
  }
</script>
