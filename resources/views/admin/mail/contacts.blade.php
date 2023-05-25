<x-admin.layout>
    <x-admin.header/>
    <x-admin.leftsidebar/>
        <main class="ttr-wrapper">
		<div class="container-fluid">
			{{-- <x-admin.start-banner/> --}}
        	<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Contacts</h4>
						</div>
						<div class="widget-inner">
                               <form class="edit-profile m-b30" method="POST" action="{{route('contact-edit')}}">
                                @csrf
                                @method("PATCH")
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>SMTP</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Name</label>
										<div>
											<input class="form-control" type="text" name="name" value="{{$contact->name}}"/>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Email</label>
										<div>
                                            <input class="form-control"  type="text" name="email" value="{{$contact->email}}"  />
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Host</label>
										<div>
                                            <input class="form-control"  type="text" name="host" value="{{$contact->host}}"  />
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Encryption</label>
										<div>
                                            <input class="form-control"  type="text" name="encryption" value="{{$contact->encryption}}"  />
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Port</label>
										<div>
                                            <input class="form-control"  type="text" name="port" value="{{$contact->port}}"  />
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Username</label>
										<div>
                                            <input class="form-control"  type="text" name="username" value="{{$contact->username}}"  />
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Password</label>
										<div>
                                            <input class="form-control"  type="password" name="password" value="{{$contact->password}}"  />
										</div>
									</div>
									<div class="seperator"></div>
									</div>
                                	<div class="col-12">
										<button type="submit" class="btn">Edit</button>
									</div>
                                    </ul>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
        </main>
  </body>
</x-layout>
