<x-admin.layout>
    <x-admin.header />
    <x-admin.leftsidebar />
    <main class="ttr-wrapper">
        <div class="container-fluid">
			<x-admin.start-banner :post="$header"/>

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
                                <form class="edit-profile m-b30" method="POST"
                                    action="{{ route('course.update', $course->id) }}" enctype="multipart/form-data">
                                    @method('PUT')
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
                                                <input class="form-control" type="text" name="title"
                                                    value="{{ old('title', $course->title) }}" />
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Course slug</label>
                                            <div>
                                                <input class="form-control" value="{{ old('slug', $course->slug) }}"
                                                    type="text" name="slug" />
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Fee</label>
                                            <div>
                                                <input class="form-control" value="{{ old('fee', $course->fee) }}"
                                                    type="text" name="fee" placeholder="$" />
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Language</label>
                                            <div>
                                                <input class="form-control"
                                                    value="{{ old('language', $course->language) }}" type="text"
                                                    name="language" />
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Assessments</label>
                                            <select name="assessments" id="assessments" required>
                                                <option value="yes"
                                                    {{ $course->assessments == 'yes' ? 'selected' : ' ' }}>Yes</option>
                                                <option value="no"
                                                    {{ $course->assessments == 'no' ? 'selected' : ' ' }}>No</option>
                                            </select>
                                        </div>


                                        <div class="form-group col-6">
                                            <label class="col-form-label">Select Skill Level</label>
                                            <select name="skill_level" id="skill_lavel" required>
                                                <option value="beginner"
                                                    {{ $course->skill_level == 'beginner' ? 'selected' : ' ' }}>
                                                    Beginner(A1)</option>
                                                <option value="elementary"
                                                    {{ $course->skill_level == 'elementary' ? 'selected' : ' ' }}>
                                                    Elementary(A2)</option>
                                                <option value="intermediate"
                                                    {{ $course->skill_level == 'intermediate' ? 'selected' : ' ' }}>
                                                    Intermediate(B1)</option>
                                                <option value="upper-intermediate"
                                                    {{ $course->skill_level == 'upper-intermediate' ? 'selected' : ' ' }}>
                                                    Upper-Intermediate(B2)</option>
                                                <option value="advanced"
                                                    {{ $course->skill_level == 'advanced' ? 'selected' : ' ' }}>
                                                    Avanced(C1)</option>
                                                <option value="proficiency"
                                                    {{ $course->skill_level == 'proficiency' ? 'selected' : ' ' }}>
                                                    Proficiency(C2)</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-6">
                                            <label class="col-form-label">Select Category</label>
                                            <select name="category_id" id="category_id">
                                                @foreach (\App\Models\Category::all() as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $category->id == $course->category_id ? 'selected' : '' }}>
                                                        {{ ucwords($category->name) }}</option>
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
                                                <textarea class="form-control" value="{{ old('description', $course->description) }}" name="description" cols="50"
                                                    rows="2">{{ old('description', $course->description) }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group col-12">
                                            <label class="col-form-label">Course Certification</label>
                                            <div>
                                                <textarea class="form-control" value="{{ old('certification', $course->certification) }}" name="certification"
                                                    cols="50" rows="10">{{ old('certification', $course->certification) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label class="col-form-label">What you'll learn</label>
                                            <div>
                                                <textarea class="form-control" id="summary-ckeditor" name="learning_outcomes">{{ old('learning_outcomes', $course->learning_outcomes) }}</textarea>
                                            </div>
                                        </div>



                                        <div class="seperator"></div>
                                        <div class="col-12 m-t20">
                                            <div class="ml-auto m-b5">
                                                <h3>3. Add Image</h3>
                                                <div class="form-group col-12">
                                                    <div>
                                                        <img src="{{ $course->getFirstMediaUrl('images') }}"
                                                            id="output" width="250" height="250" />
                                                        <div class="form-group">
                                                            <div class="sm:col-span-6">
                                                                <label for="photos"
                                                                    class="block text-sm font-medium text-gray-700">
                                                                    Course Image </label>
                                                                <div class="mt-1">
                                                                    <input value="{{ old('image') }}"
                                                                        onchange="loadFile(event)" name="image"
                                                                        type="file" id="image"
                                                                        wire:model="newImage" name="image"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <div class="col-12 m-t20">
                                            <div class="ml-auto m-b5">
                                                <h3>4. Add Course</h3>
                                                <div class="form-group col-12">
                                                    <div id="dynamicTable">
                                                        <div class="form-group">
                                                            <div class="sm:col-span-6">
                                                                <label for="photos"
                                                                    class="block text-sm font-medium text-gray-700">First
                                                                    Level</label>
                                                                <button type="button" name="add" id="add"
                                                                    class="button xl:w-32 text-white bg-theme-1 xl:mr-3 align-top mt-2 btn btn-success">Add</button>
                                                                    @php $i=1 @endphp
                                                                @foreach ($course->videos()->containingVideoPath()->get() as $video)
                                                                    <div class="mt-1">
                                                                        <label class="col-form-label">Title  {{ $i++ }}</label>
                                                                        <input value="{{ $video->title }}"
                                                                            class="form-control" type="text"
                                                                            name="course_title[]"
                                                                            placeholder="Enter Title">
                                                                    </div>
                                                                    <div class="mt-1">

                                                                        <input type="hidden" name="video_id[]"
                                                                            value="{{ $video->id }}">
                                                                        <div>
                                                                            <video width="320" height="240"
                                                                                controls>
                                                                                <source
                                                                                    src="{{ URL::asset($video->video) }}"
                                                                                    type="video/mp4">
                                                                                Your browser does not support the video
                                                                                tag.
                                                                            </video>
                                                                        </div>
                                                                        <label class="col-form-label">Choose
                                                                            Video</label>
                                                                        <input accept="video/mp4" type="file"
                                                                            name="videos[]"
                                                                            value="{{ old('videos[]') }}" multiple>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <div id="dynamicTable2">
                                                        <div class="form-group">
                                                            <div class="sm:col-span-6">
                                                                <label for="photos"
                                                                    class="block text-sm font-medium text-gray-700">Second
                                                                    Level</label>
                                                                <button type="button" name="add2" id="add2"
                                                                    class="button xl:w-32 text-white bg-theme-1 xl:mr-3 align-top mt-2 btn btn-success">Add</button>

                                                                @foreach ($course->videos()->containingVideo2Path()->get() as $video)
                                                                    <div class="mt-1">
                                                                        <label class="col-form-label">Title</label>
                                                                        <input value="{{ $video->title }}"
                                                                            class="form-control" type="text"
                                                                            name="course_title2[]"
                                                                            placeholder="Enter Title">
                                                                    </div>
                                                                    <div class="mt-1">
                                                                        <label class="col-form-label">Choose
                                                                            Video</label>
                                                                        <input type="hidden" name="video_id2[]"
                                                                            value="{{ $video->id }}">

                                                                        <input type="file" name="videos2[]"
                                                                            multiple>

                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li class="text-red-500 text-xs mt-1">{{ $error }}</li>
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
        <script>
            function loadFile(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            }
        </script>

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
    CKEDITOR.replace('summary-ckeditor', {
        filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
</script>

<script type="text/javascript">
    var i = 0;
    $("#add").click(function() {
        ++i;
        $("#dynamicTable").append(
            '<tr><td><div class="mt-1"><label class="col-form-label">New Title</label><input class="form-control" type="text" name="added_course_title[]" placeholder="Enter Title"></div><div class="mt-1"><label class="col-form-label">Choose Video</label><input type="file"  name="added_videos[]" value="{{ old('videos') }}" multiple></div><button type="button" class="button button--lg w-full xl:w-25 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 xl:mt-0  remove-tr">Remove</button></td></tr>'
        );
    });
    $(document).on('click', '.remove-tr', function() {
        $(this).parents('tr').remove();
    });
</script>

<script type="text/javascript">
    var i = 0;
    $("#add2").click(function() {
        ++i;
        $("#dynamicTable2").append(
            '<tr><td><div class="mt-1"><label class="col-form-label">Title</label><input class="form-control" type="text" name="course_title2[]" placeholder="Enter Title"></div><div class="mt-1"><label class="col-form-label">Choose Video</label><input type="file"  name="videos2[]" multiple></div><button type="button" class="button button--lg w-full xl:w-25 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 xl:mt-0  remove-tr2">Remove</button></td></tr>'
        );
    });
    $(document).on('click', '.remove-tr2', function() {
        $(this).parents('tr').remove();
    });
</script>
