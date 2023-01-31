<x-layout>

			<!-- start banner Area -->
			<x-blog.banner/>
			<!-- End banner Area -->

			<!-- Start top-category-widget Area -->
            <x-blog.top-category-widget/>
			<!-- End top-category-widget Area -->

			<!-- Start post-content Area -->
			<x-blog.post-content :posts="$posts" :categories="$categories"/>
			<!-- End post-content Area -->
</x-layout>
