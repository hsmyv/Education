<x-admin.layout>
    <x-admin.header/>
    <x-admin.leftsidebar/>
        <main class="ttr-wrapper">
		<div class="container-fluid">
			<x-admin.start-banner/>
            <head>
  <body>
    <div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add Course</h4>
						</div>
						<div class="widget-inner">
                            <form class="edit-profile m-b30" method="POST" action="{{route('create')}}" enctype="multipart/form-data">
                                @csrf
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Basic info</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Course title</label>
										<div>
											<input class="form-control" type="text" name="title" value="{{old('title')}}"/>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Course slug</label>
										<div>
                                            <input class="form-control" value="{{old('slug')}}" type="text" name="slug"  />
										</div>
									</div>

                                    <div class="form-group col-6">
										<label class="col-form-label">Fee</label>
										<div>
                                            <input class="form-control" value="{{old('fee')}}" type="text" name="fee" placeholder="$"/>
										</div>
									</div>

                                      <div class="form-group col-6">
										<label class="col-form-label">Language</label>
										<div>
                                            <input class="form-control" value="{{old('language')}}" type="text" name="language"/>
										</div>
									</div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Assessments</label>
                                    <select name="assessments" id="assessments" required>
                                        <option value="yes" @if(old('assessments') == 'yes') selected="selected" @endif>Yes</option>
                                        <option value="no"  @if(old('assessments') == 'no') selected="selected" @endif>No</option>
                                    </select>
                                    </div>


                                        <div class="form-group col-6">
                                            <label class="col-form-label">Select Skill Level</label>
                                            <select name="skill_level" id="skill_lavel" required>
                                                <option value="beginner"            @if(old('skill_level') == 'beginner') selected="selected" @endif>Beginner(A1)</option>
                                                <option value="elementary"          @if(old('skill_level') == 'elementary') selected="selected" @endif>Elementary(A2)</option>
                                                <option value="intermediate"        @if(old('skill_level') == 'intermediate') selected="selected" @endif>Intermediate(B1)</option>
                                                <option value="upper-intermediate"  @if(old('skill_level') == 'upper-indermediate') selected="selected" @endif>Upper-Intermediate(B2)</option>
                                                <option value="advanced"            @if(old('skill_level') == 'advanced') selected="selected" @endif>Avanced(C1)</option>
                                                <option value="proficiency"         @if(old('skill_level') == 'proficiency') selected="selected" @endif>Proficiency(C2)</option>
                                            </select>
                                            </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Select Category</label>
                                                <select name="category_id" id="category_id">
                                                @foreach ($categories as $category )
                                                    <option value="{{$category->id}}"
                                                        {{old('category_id') == $category->id ? 'selected': ''}}>{{ucwords($category->name)}}</option>
                                                    @endforeach
                                                </select>
                                        </div>


									<div class="seperator"></div>

									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Description</h3>
										</div>
									</div>
									<div class="form-group col-12">
										<label class="col-form-label">Course description</label>
										<div>
											<textarea class="form-control" value="{{old('description')}}" name="description" cols="50" rows="2">{{old('description')}}</textarea>
										</div>
									</div>

                                    <div class="form-group col-12">
										<label class="col-form-label">Course Certification</label>
										<div>
                                            <textarea class="form-control" value="{{old('certification')}}" name="certification" cols="50" rows="10">{{old('certification')}}</textarea>
										</div>
									</div>
                                      <div class="form-group col-12">
										<label class="col-form-label">What you'll learn</label>
										<div>
                                            <textarea class="form-control" id="summary-ckeditor" name="learning_outcomes">{{old('learning_outcomes')}}</textarea>
										</div>
									</div>



                                    <div class="seperator"></div>

									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>3. Add Image</h3>
                                             <div class="form-group col-12">
										<label class="col-form-label">Course Image</label>
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
									</div>
                                @if($errors->any())
                                 <ul>
                                      @foreach ($errors->all() as $error)
                                           <li class="text-red-500 text-xs mt-1">{{$error}}</li>
                                       @endforeach
                                </ul>
                                    @endif
                                     <div class="col-12">
                                            <button type="submit" class="btn">Save changes</button>
                                     </div>


								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
</div>
</head>
  </body>
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
