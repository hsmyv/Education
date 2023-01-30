<x-authentication.layout>
<x-authentication.logo/>
					<h2 class="title-head">Sign Up <span>Now</span></h2>
					<p>Login Your Account <a href="{{route('show-login')}}">Click here</a></p>
				</div>
				<form method="POST" action="{{route('register')}}" class="contact-bx">
                    @csrf
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Name</label>
									<input name="name" type="text" required class="form-control" value="{{old('name')}}">
                                     @error('name')
                                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                                    @enderror
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Email Address</label>
									<input name="email" type="email" required class="form-control" value="{{old('email')}}">
                                     @error('email')
                                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                                    @enderror
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Password</label>
									<input name="password" type="password" class="form-control" required>
                                     @error('password')
                                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                                    @enderror
								</div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
						</div>
						<div class="col-lg-12">
							<h6>Sign Up with Social media</h6>
							<div class="d-flex">
								<a class="btn flex-fill m-r5 facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>
								<a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google Plus</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</x-authentication.layout>
