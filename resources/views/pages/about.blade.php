<x-layout>
    <!-- start banner Area -->
        <x-start-banner :name="$aboutus"/>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    {{-- <section class="feature-area pb-120">
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
    </section> --}}
    <x-courses.start-feature-area :information="$information"/>
    <!-- End feature Area -->

    <!-- Start info Area -->
   <x-about.picture-area :information="$information"/>
    <!-- End info Area -->

    <!-- Start course-mission Area -->
      <x-about.video-area :information="$information"/>
    <!-- End course-mission Area -->

    
    <!-- Start search-course Area -->
    <x-courses.search-course />
    <!-- End search-course Area -->

    <!-- Start review Area -->
		<x-index.review-area/>
	<!-- End review Area -->
    <!-- Start cta-two Area -->
    <x-index.cta-one-area/>
    <!-- End cta-two Area -->

</x-layout>
