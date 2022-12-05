<x-layout>
    <!-- Content -->
    	<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								 Create Course
							</h1>
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.html"> Create Course</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Create Course</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
  <head>
  <body>
    <div class="testbox" align="center">
    <form method="POST" action="{{route('create')}}" enctype="multipart/form-data">
      @csrf
        <div class="banner">
        <h1>Create Course</h1>
      </div>
      <div class="item">
        <p>Passenger contact name</p>
        <div class="name-item">
          <input value="{{old('title')}}" type="text" name="title" placeholder="Title" />
          <input value="{{old('slug')}}" type="text" name="slug" placeholder="Slug" />
        </div>
      </div>

      {{--picture--}}
       <img src="/assets/images/banner/nobannerimage.png" id="output" width="250" height="250"/>

      <div class="form-group">
      <div class="sm:col-span-6">
            <label for="photos" class="block text-sm font-medium text-gray-700"> Post Image </label>
            <div class="mt-1">
              <input onchange="loadFile(event)" name="image" type="file" id="image" wire:model="newImage" name="image" class="form-control" />
            </div>
          </div>
      </div>

      <div class="item">
        <input value="{{old('fee')}}" type="text" name="fee" placeholder="$"/>
      </div>
      <div class="item">
          <select name="skill_level" id="skill_lavel" required>
            <option value="beginner"            @if(old('skill_level') == 'beginner') selected="selected" @endif>Beginner(A1)</option>
            <option value="elementary"          @if(old('skill_level') == 'elementary') selected="selected" @endif>Elementary(A2)</option>
            <option value="intermediate"        @if(old('skill_level') == 'intermediate') selected="selected" @endif>Intermediate(B1)</option>
            <option value="upper-intermediate"  @if(old('skill_level') == 'upper-indermediate') selected="selected" @endif>Upper-Intermediate(B2)</option>
            <option value="advanced"            @if(old('skill_level') == 'advanced') selected="selected" @endif>Avanced(C1)</option>
            <option value="proficiency"         @if(old('skill_level') == 'proficiency') selected="selected" @endif>Proficiency(C2)</option>
          </select>
        </div>

      <div class="item">
      <select name="category_id" id="category_id">
    @foreach (\App\Models\Category::all() as $category )
        <option value="{{$category->id}}"
            {{old('category_id') == $category->id ? 'selected': ''}}>{{ucwords($category->name)}}</option>
        @endforeach
      </select>
      </div>
      <div class="item">
        <p>Language:</p>
        <input value="{{old('language')}}" type="text" name="language"/>
      </div>
       <select name="assessments" id="assessments" required>
            <option selected value="" disabled>Assessments</option>
            <option value="yes" @if(old('assessments') == 'yes') selected="selected" @endif>Yes</option>
            <option value="no"  @if(old('assessments') == 'no') selected="selected" @endif>No</option>
          </select>
      <div class="item">
        <p>Description:</p>
        <textarea value="{{old('description')}}" name="description" cols="50" rows="2">{{old('description')}}</textarea>
      </div>
      <div class="item">
        <p>Certification:</p>
        <textarea value="{{old('certification')}}" name="certification" cols="50" rows="10">{{old('certification')}}</textarea>
      </div>
    <div class="item">
        <p>Learning outcomes:</p>
        <textarea class="form-control" id="summary-ckeditor" name="learning_outcomes">{{old('learning_outcomes')}}</textarea>
      </div>
        <div class="btn-block">
          <button type="submit" href="/">Book</button>
        </div>

        @if($errors->any())
        <ul>
          @foreach ($errors->all() as $error)
            <li class="text-red-500 text-xs mt-1">{{$error}}</li>
           @endforeach
       </ul>
      @endif

    </form>
    </div>
</div>
</head>
  </body>
</x-layout>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
<script src="/js/uploadimage.js"></script>
