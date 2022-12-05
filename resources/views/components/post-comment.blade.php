@props(['comment', 'post_id'])

								<div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="/img/blog/c2.jpg" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">{{$comment->user->name}}</a></h5>
                                                <p class="date">{{$comment->created_at->diffForHumans()}} </p>
                                                <p class="comment">
                                                    {{$comment->body}}
                                                </p>
                                            </div>
                                        </div>

                                                @can('destroycomment', $comment)
                                                <div class="nav-item dropdown">
                                                    <a href="#" style="color:rgba(0, 0, 255, 0.505)"class="fa fa-cog" data-toggle="dropdown"></a>
                                                    <div class="dropdown-menu rounded-0 m-0">
                                                        <div class="container">
                                                <form method="POST" action="{{route('delete-comment', $comment->id)}}">
                                                    @csrf
                                                    @method('DELETE')

                                                <div>
                                                <button style="color:rgb(226, 43, 43)" type="submit" >Delete </button>
                                                </form>
                                                <br>
                                                <a  style="color:blueviolet" href="{{route('show-comment', $comment->id)}}">Edit</a>
                                                </div>
                                                    </div>
                                                    </div>
                                                @endcan

                                    </div>
                                    </div>

                                <div>
                                    <x-replies-comment :comments="$comment->replies" :comment="$comment"/>
                                </div>



