  <div class="noti-box-list" style = "width: 320px; height: 400px; line-height: 3em; overflow:auto;">
                             <ul>
                                @if(auth()->user()->unreadnotifications)
                                 @foreach (auth()->user()->unreadnotifications as $notification)
                                     <li>
                                           <span class="notification-icon dashbg-green">
                                         <i class="fa fa-comments-o"></i>
                                     </span>
                                         <span class="notification-text">
                                             <a href="{{ route('getusername', $notification->data['name'])}}">{{ $notification->data['name'] }}</a>
                                             <a href="{{ route('show-post', $notification->data['slug'])}}">commented your post.</a>
                                             {{$notification->data['comment'] }}
                                         </span>
                                         <span class="notification-time">
                                             <a href="{{ route('markasread', $notification->id) }}"
                                                 class="fa fa-close"></a>
                                             <span>
                                                 {{ Carbon\Carbon::parse($notification->data['time'])->diffForHumans(null, false, true)}}</span>
                                         </span>
                                     </li>
                                 @endforeach
                                 @else
                                 <p class= "text-center">No notifications yet..</p>
                                 @endif
                                 <li>
                                     <span class="notification-icon dashbg-yellow">
                                         <i class="fa fa-shopping-cart"></i>
                                     </span>
                                     <span class="notification-text">
                                         <a href="#">Your order is placed</a> sent you a message.
                                     </span>
                                     <span class="notification-time">
                                         <a href="#" class="fa fa-close"></a>
                                         <span> 7 Min</span>
                                     </span>
                                 </li>
                                 <li>
                                     <span class="notification-icon dashbg-red">
                                         <i class="fa fa-bullhorn"></i>
                                     </span>
                                     <span class="notification-text">
                                         <span>Your item is shipped</span> sent you a message.
                                     </span>
                                     <span class="notification-time">
                                         <a href="#" class="fa fa-close"></a>
                                         <span> 2 May</span>
                                     </span>
                                 </li>
                                 <li>
                                    <span class="notification-icon dashbg-gray">
                                             <i class="fa fa-check"></i>
                                         </span>
                                     <span class="notification-text">
                                         <a href="#">Sneha Jogi</a> sent you a message.
                                     </span>
                                     <span class="notification-time">
                                         <a href="#" class="fa fa-close"></a>
                                         <span> 14 July</span>
                                     </span>
                                 </li>
                                 <li>
                                     <span class="notification-icon dashbg-primary">
                                         <i class="fa fa-file-word-o"></i>
                                     </span>
                                     <span class="notification-text">
                                         <span>Sneha Jogi</span> sent you a message.
                                     </span>
                                     <span class="notification-time">
                                         <a href="#" class="fa fa-close"></a>
                                         <span> 15 Min</span>
                                     </span>
                                 </li>
                             </ul>
                         </div>
