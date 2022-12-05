@props(["name"])

 <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        {{$name}}
                    </h1>
                    <p class="text-white link-nav"><a href="{{route('home')}}">Home </a> <span class="lnr lnr-arrow-right"></span>
                        <a href="#">{{$name}}</a></p>
                </div>
            </div>
        </div>
    </section>
