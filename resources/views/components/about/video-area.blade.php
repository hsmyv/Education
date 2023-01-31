 <!-- Start course-mission Area -->
    <section class="course-mission-area pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">{{ $information->video_title }}</h1>
                        <p>{{ $information->video_description }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 accordion-left">

                    <!-- accordion 2 start-->
                    <dl class="accordion">
                        <dt>
                            <a href="">{{ $information->video_slot1_title }}</a>
                        </dt>
                        <dd>
                            {{ $information->video_slot1_description }}
                        </dd>
                        <dt>
                            <a href="">{{ $information->video_slot2_title }}</a>
                        </dt>
                        <dd>
                            {{ $information->video_slot2_description }}
                        </dd>
                        <dt>
                            <a href="">{{ $information->video_slot3_title }}</a>
                        </dt>
                        <dd>
                            <a href="">{{ $information->video_slot3_description }}</a>
                        </dd>
                        <dt>
                            <a href="">{{ $information->video_slot4_title }}</a>
                        </dt>
                        <dd>
                            <a href="">{{ $information->video_slot4_description }}</a>
                        </dd>
                    </dl>
                    <!-- accordion 2 end-->
                </div>
                <div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img
                            class="img-fluid mx-auto" src="img/play.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End course-mission Area -->
