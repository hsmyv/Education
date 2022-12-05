<x-layout>

    <!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Blog Details Page
							</h1>
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Blog </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> </a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

                            <div class="comment-form">
								<h4>Leave a Comment</h4>
								<form method="POST" action="{{route('edit-comment', $comment->id)}}">
                                    @csrf
                                    @method("PATCH")
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="body" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required="">
                                            {{old('body', $comment->body)}}
                                        </textarea>
                                        @error('body')
                                        <span class="text-xs text-red-500">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <button type="submit">Edit</button>
								</form>
							</div>

        @if($comment->post->comments->count())
                @foreach($comment->post->comments as $comment)

                <x-post-comment :comment="$comment" :post_id="$comment->post->id"/>
                @endforeach

        @else
        <p class="text-center">No comments yet.</p>
        @endif
</x-layout>
