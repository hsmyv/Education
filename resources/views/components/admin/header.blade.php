
 <!-- header start -->
 <header class="ttr-header">
     <div class="ttr-header-wrapper">
         <!--sidebar menu toggler start -->
         <div class="ttr-toggle-sidebar ttr-material-button">
             <i class="ti-close ttr-open-icon"></i>
             <i class="ti-menu ttr-close-icon"></i>
         </div>
         <!--sidebar menu toggler end -->
         <!--logo start -->
         <div class="ttr-logo-box">
             <div>
                 <a href="{{ route('admin-index') }}" class="ttr-logo">
                     <img class="ttr-logo-mobile" alt="" src="/img/logo.png" width="30" height="30">
                     <img class="ttr-logo-desktop" alt="" src="/img/logo.png" width="160" height="27">
                 </a>
             </div>
         </div>
         <!--logo end -->
         <div class="ttr-header-menu">
                 @if (session()->has('success'))
                    <div class="container">
                        <div class="row mt-4">
                            <div class="col-md-6 alert alert-primary">
                        <p>{{ session('success')}}</p>
                            </div>
                    </div>
                    </div>
                    @endif
             <!-- header left menu start -->
             <ul class="ttr-header-navigation">
                 <li>
                     <a href="/" class="ttr-material-button ttr-submenu-toggle">HOME</a>
                 </li>
                 <li>
                     <a href="#" class="ttr-material-button ttr-submenu-toggle">QUICK MENU <i
                             class="fa fa-angle-down"></i></a>
                     <div class="ttr-header-submenu">
                         <ul>
                             <li><a href="{{ route('courses') }}">Our Courses</a></li>
                             <li><a href="../event.html">New Event</a></li>
                             <li><a href="../membership.html">Membership</a></li>
                         </ul>
                     </div>
                 </li>
             </ul>
             <!-- header left menu end -->
         </div>
         <div class="ttr-header-right ttr-with-seperator">
             <!-- header right menu start -->
             <ul class="ttr-header-navigation">
                 <li>
                     <a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
                 </li>
                 <li>
                     <a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i> {{auth()->user()->unreadnotifications->count() > 0 ? auth()->user()->unreadnotifications->count() : ''}} </a>
                     <div class="ttr-header-submenu noti-menu">
                         <div class="ttr-notify-header">
                             <span class="ttr-notify-text-top">{{ auth()->user()->unreadnotifications->count() }}
                                 New</span>
                             <span class="ttr-notify-text">User Notifications</span>
                         </div>
                         <x-notifications/>
                     </div>
                 </li>
                 <li>
                     <a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img
                                 alt="" src="/assets/images/testimonials/pic3.jpg" width="32"
                                 height="32"></span></a>
                     <div class="ttr-header-submenu">
                         <ul>
                             <li><a href="{{ route('admin-profile') }}">My profile</a></li>
                             <li><a href="{{ route('admin-activity') }}">Activity</a></li>
                             <li><a href="{{ route('admin-messages') }}">Messages</a></li>
                             <li><a href="../login.html">Logout</a></li>
                         </ul>
                     </div>
                 </li>
                 <li class="ttr-hide-on-mobile">
                     <a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
                     <div class="ttr-header-submenu ttr-extra-menu">
                         <a href="#">
                             <i class="fa fa-music"></i>
                             <span>Musics</span>
                         </a>
                         <a href="#">
                             <i class="fa fa-youtube-play"></i>
                             <span>Videos</span>
                         </a>
                         <a href="#">
                             <i class="fa fa-envelope"></i>
                             <span>Emails</span>
                         </a>
                         <a href="#">
                             <i class="fa fa-book"></i>
                             <span>Reports</span>
                         </a>
                         <a href="#">
                             <i class="fa fa-smile-o"></i>
                             <span>Persons</span>
                         </a>
                         <a href="#">
                             <i class="fa fa-picture-o"></i>
                             <span>Pictures</span>
                         </a>
                     </div>
                 </li>
             </ul>
             <!-- header right menu end -->
         </div>
         <!--header search panel start -->
         <div class="ttr-search-bar">
             <form class="ttr-search-form">
                 <div class="ttr-search-input-wrapper">
                     <input type="text" name="qq" placeholder="search something..."
                         class="ttr-search-input">
                     <button type="submit" name="search" class="ttr-search-submit"><i
                             class="ti-arrow-right"></i></button>
                 </div>
                 <span class="ttr-search-close ttr-search-toggle">
                     <i class="ti-close"></i>
                 </span>
             </form>
         </div>
         <!--header search panel end -->
     </div>
 </header>
 <!-- header end -->

