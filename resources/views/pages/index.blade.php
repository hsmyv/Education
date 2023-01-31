<x-layout>
            @if (session()->has('success'))
        <div x-data = "{show:true}"
            x-init = "setTimeout(() => false, 4000)"
            x-show = "show"
            class = "fixed bg-blue-500 text-white py-1 px-5 rounded-xl bottom-5 right-7 text-sm"
            >
        <p>{{session('success')}} </p>
        </div>
            @endif
			<!-- start banner Area -->
			<x-index.banner-area/>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<x-courses.start-feature-area :information="$information"/>
			<!-- End feature Area -->
            {{-- <div id="loaderIcon" class="spinner-border text-primary" style="display:none" role="status">
            <span class="sr-only">Loading...</span>
            </div> --}}
			<!-- Start popular-course Area -->
            <x-courses.popular-courses :courses="$courses"/>
			<!-- End popular-course Area -->

            <!-- Start search-course Area -->
                <x-courses.search-course/>
            <!-- End search-course Area -->

			<!-- Start upcoming-event Area -->
			<x-upcoming-events :courses="$courses"/>
			<!-- End upcoming-event Area -->

			<!-- Start review Area -->
			<x-index.review-area/>
			<!-- End review Area -->


			<!-- Start cta-one Area -->
			<x-index.cta-one-area/>
			<!-- End cta-one Area -->

			<!-- Start Latest posts from our Blog area -->
			<x-index.latest-post :posts="$posts"/>
			<!-- End  Latest posts from our Blog area -->


			<!-- Start cta-two Area -->
			<x-view-our-blog/>
			<!-- End cta-two Area -->
        </x-layout>
