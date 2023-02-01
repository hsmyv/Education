<!-- Start Latest posts from our Blog area -->
<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Latest posts from our Blog</h1>
                    <p>In the history of modern astronomy there is.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img style="width: 300px; height:215px;"
                            src="@if (empty($post->getFirstMediaUrl('images'))) assets\images\no-photo.jpg @else {{ $post->getFirstMediaUrl('images') }} @endif"
                            alt="">
                    </div>
                    <p class="meta">25 April, 2018 | By <a href="{{route('getusername', $post->user->name)}}">{{$post->user->name}}</a></p>
                    <a href="{{ route('show-post', $post->slug) }}">
                        <h5> {{ words($post->title, $limit = 50, $end = '...') }}
                        </h5>
                    </a>
                    {{-- <p class="excerpt">
                                {{substr(strip_tags($post->description),0,150)}}
								 {{strlen(strip_tags($post->description))>125 ? "...":""}}
                            </p> --}}
                    {{-- <a href="{{route('show-post', $post->slug)}}" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a> --}}
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End  Latest posts from our Blog area -->
