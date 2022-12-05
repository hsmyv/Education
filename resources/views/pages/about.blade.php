<x-layout>
    <!-- start banner Area -->
        <x-start-banner :name="$aboutus"/>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>{{ $information->slot1_title }}</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                {{ $information->slot1_description }}
                            </p>
                            <a href="#">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>{{ $information->slot2_title }}</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                {{ $information->slot2_description }}
                            </p>
                            <a href="#">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>{{ $information->slot3_title }}</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                {{ $information->slot3_description }}
                            </p>
                            <a href="#">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!-- Start info Area -->
    <section class="info-area pb-120">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="img/about-img.jpg" alt="">
                </div>
                <div class="col-lg-6 info-area-right">
                    <h1>{{ $information->picture_title }}</h1>
                    <p>{!!$information->picture_body!!}</p>

                </div>
            </div>
        </div>
    </section>
    <!-- End info Area -->

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


    <!-- Start search-course Area -->
    <x-search-course />
    <!-- End search-course Area -->



    <!-- Start cta-two Area -->
    <section class="cta-two-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 cta-left">
                    <h1>Not Yet Satisfied with our Trend?</h1>
                </div>
                <div class="col-lg-4 cta-right">
                    <a class="primary-btn wh" href="{{route("blog")}}">view our blog</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End cta-two Area -->

</x-layout>
