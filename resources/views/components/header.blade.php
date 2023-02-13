<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        @if (session()->has('success'))
                            <div x-data="{ show: true }" x-init="setTimeout(() => { show = false }, 6000)" x-show="show"
                                class="fixed bg-blue-500 text-white py-1 px-5 rounded-xl bottom-5 right-7 text-sm">
                                <p>{{ session('success') }} </p>
                            </div>
                        @endif
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                    <ul>
                        @auth
                            <li style="color:white"> {{ auth()->user()->name }}!</li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" style="display: inline">
                                    @csrf
                                    <button style="color:white" href="{{ route('logout') }}"type="submit">Logout</button>
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('show-login') }}">Login</a></li>
                            <li><a href="{{ route('show-register') }}">Register</a></li>
                        @endauth
                        <a href=""><span class=""></span> <span class="text">Az</span></a>
                        <a href=""><span class=""></span> <span class="text">En</span></a>

                        <li><a href="{{ route('admin-index') }}"><i class="fa fa-bell">
                                    @if (auth()->check())
                                        {{ auth()->user()->unreadnotifications->count() > 0? auth()->user()->unreadnotifications->count(): '' }}
                                    @endif
                            </a></i></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{ route('home') }}"><img src="/img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a style="{{setActiveHeader("home")}}" href="/">Home</a></li>
                    <li><a style="{{setActiveHeader("about")}}" href="{{ route('about') }}">About</a></li>
                    <li><a style="{{setActiveHeader("courses")}}"href="{{ route('courses') }}">Courses</a></li>
                    <li><a style="{{setActiveHeader("events")}}" href="{{ route('events.index') }}">Events</a></li>
                    <li><a style="{{setActiveHeader("blog")}}" href="{{ route('blog') }}">Blog</a></li>
                    <li><a style="{{setActiveHeader("contact")}}" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

{{-- <script type="text/javascript">
      $(document).ready(function(e) {
          e.preventDefault();
          $(".buttonlink").on('click', function() {
            alert('sfddf');
              var el = $(this);
              $.ajax({
                  type: "GET"
                  url: '{{ route('logout') }}',
                  success: function(data) {
                      console.log(data);
                  },
                  error: function(jqXHR, textStatus, errorThrown){
                    alert(textStatus, errorThrown);
                  }
              });

          });
      });
  </script> --}}
