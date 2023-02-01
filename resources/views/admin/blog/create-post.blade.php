<x-admin.layout>
    <x-admin.header/>
    <x-admin.leftsidebar/>
        <main class="ttr-wrapper">
		<div class="container-fluid">
			<x-admin.start-banner/>

        	<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Create Post</h4>
						</div>
						<div class="widget-inner">
                               <form class="edit-profile m-b30" method="POST" action="{{route('store-post')}}" enctype="multipart/form-data">
                                @csrf
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Basic info</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Post title</label>
										<div>
											<input class="form-control" type="text" name="title" value="{{old('title')}}"/>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Post slug</label>
										<div>
                                            <input class="form-control" value="{{old('slug')}}" type="text" name="slug"  />
										</div>
									</div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Category</label>
                                      <select name="category_id" id="category_id">
                                        @foreach ($categories as $category )
                                            <option value="{{$category->id}}"
                                                {{old('category_id') == $category->id ? 'selected': ''}}>{{ucwords($category->name)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Post slug</label>
										<div>
                                            <input name="date" class="form-control" type="date"  />
										</div>
									</div>

									<div class="seperator"></div>

									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Description</h3>
										</div>
									</div>
									<div class="form-group col-12">
										<label class="col-form-label">Post description</label>
										<div>
											 <textarea class="form-control" value="{{old('description')}}" name="description" cols="50" rows="2">{{old('description')}}</textarea>
										</div>
									</div>

                                    	<div class="form-group col-12">
										<label class="col-form-label">Post body</label>
										<div>
                                            <textarea class="form-control" id="summary-ckeditor" name="body">{{old('body')}}</textarea>
										</div>
									</div>

									<div class="col-12 m-t20">
										<div class="ml-auto">
											<h3 class="m-form__section">3. Add Item</h3>
										</div>
									</div>
									<div class="col-12">
                                        <label class="col-form-label">Post Image</label>
                                             <div>
                                                <img src="/assets/images/banner/nobannerimage.png" id="output" width="250" height="250"/>
                                                    <div class="form-group">
                                                    <div class="sm:col-span-6">
                                                            <label for="photos" class="block text-sm font-medium text-gray-700"> Post Image </label>
                                                            <div class="mt-1">
                                                            <input onchange="loadFile(event)" name="image" type="file" id="image" wire:model="newImage" name="image" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                             </div>
                                    </div>
									</div>


									<div class="col-12">
										<button type="submit" class="btn">Create</button>
									</div>
                                     @if($errors->any())
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="text-red-500 text-xs mt-1">{{$error}}</li>
                                        @endforeach
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
@include("pages.url_slug");
</x-layout>

<script src="/js/uploadimage.js"></script>




 <script>
        const title = document.getElementById("title");
        const slug = document.getElementById("slug");

        title.addEventListener('input', () => {
            slug.value = url_slug(title.value);
        });
</script>

</x-admin.layout>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>

