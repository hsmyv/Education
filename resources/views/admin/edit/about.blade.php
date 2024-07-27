<x-admin.layout>
<x-admin.header/>
    <x-admin.leftsidebar/>
    <main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Courses</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Courses</li>
				</ul>
			</div>

            <x-forEditlayout>
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        About Us
                    </h1>
                    <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span>
                        <a href="about.html"> About Us</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->

    <section class="feature-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature">
                        <form method="Post" action="{{route('edit-information', $information->id)}}" enctype="multipart/form-data">
                            @csrf
                        <div class="title">
                            <input value="{{old('slot1_title', $information->slot1_title)}}" type="text" name="slot1_title" id="title" placeholder="1 Slot title" />
                        </div>
                        <div class="desc-wrap">
                            <p>
                                <textarea class="form-control" id="slot1_description" name="slot1_description">{{old('slo1_description', $information->slot1_description)}}</textarea>
                            </p>
                            <a href="#">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                             <input value="{{old('slot2_title', $information->slot2_title)}}" type="text" name="slot2_title" id="title" placeholder="2 Slot title" />
                        </div>
                        <div class="desc-wrap">
                            <p>
                                 <textarea class="form-control" id="slot2_description" name="slot2_description">{{old('slo2_description', $information->slot2_description)}}</textarea>
                            </p>
                            <a href="#">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <input value="{{old('slot3 _title', $information->slot3_title)}}" type="text" name="slot3_title" id="title" placeholder="3 Slot title" />
                        </div>
                        <div class="desc-wrap">
                            <p>
                                <textarea class="form-control" id="slot3_description" name="slot3_description">{{old('slo3_description', $information->slot3_description)}}</textarea>
                            </p>
                            <a href="#">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!-- Start info Area -->
    <section class="info-area pb-120">
  <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 no-padding info-area-left">
                    <img src="{{asset("assets/assets/images/banner/banner1.jpg")}}" id="output" width="150" height="150"/>
                    {{--picture--}}
                    <div class="form-group">
                    <div class="sm:col-span-6">
                            <div class="mt-1">
                            <input onchange="loadFile(event)" name="image" type="file" id="image" wire:model="newImage" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 info-area-right">
                    <h1><input value="{{old('picture_title', $information->picture_title)}}" type="text" name="picture_title" id="title" placeholder="Picture_title" /></h1>
                    <p><textarea class="form-control" id="picture_body" name="picture_body">{{old('picture_body', $information->picture_body)}}</textarea></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End info Area -->

    <!-- Start course-mission Area -->
    <section class="course-mission-area pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10"><input value="{{old('video_title' ,$information->video_title)}}" type="text" name="video_title" id="title" placeholder="Video title" /></h1>
                         <p><input value="{{old('video_description', $information->video_description)}}" type="text" name="video_description" id="title" placeholder="Video description" /></p>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 accordion-left">

                    <!-- accordion 2 start-->
                    <dl class="accordion">
                        <dt>
                            <a><input value="{{old('video_slot1_title', $information->video_slot1_title)}}" type="text" name="video_slot1_title" id="title" placeholder="Video slot1 title" /></a>
                        </dt>
                        <dd>
                            <textarea class="form-control" id="video_slot1_description" name="video_slot1_description">{{old('video_slot1_description', $information->video_slot1_description)}}</textarea>
                        </dd>
                        <dt>
                            <a><input value="{{old('video_slot2_title', $information->video_slot2_title)}}" type="text" name="video_slot2_title" id="title" placeholder="Video slot2 title" /></a>
                        </dt>
                        <dd>
                            <textarea class="form-control" id="video_slot2_description" name="video_slot2_description">{{old('video_slot2_description', $information->video_slot2_description)}}</textarea>
                        </dd>
                        <dt>
                            <a><input value="{{old('video_slot3_title', $information->video_slot3_title)}}" type="text" name="video_slot3_title" id="title" placeholder="Video slot3 title" /></a>
                        </dt>
                        <dd>
                            <textarea class="form-control" id="video_slot3_description" name="video_slot3_description">{{old('video_slot3_description', $information->video_slot3_description)}}</textarea>
                        </dd>
                       <dt>
                            <a><input value="{{old('video_slot4_title', $information->video_slot4_title)}}" type="text" name="video_slot4_title" id="title" placeholder="Video slot4 title" /></a>
                        </dt>
                        <dd>
                            <textarea class="form-control" id="video_slot4_description" name="video_slot4_description">{{old('video_slot4_description', $information->video_slot4_description)}}</textarea>
                        </dd>
                    </dl>
                    <button type="submit" class="btn btn-outline-primary">Edit</button>
                    <!-- accordion 2 end-->
                </div>

            </form>
                <div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img
                            class="img-fluid mx-auto" src="img/play.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End course-mission Area -->

</x-forEditlayout>


        </div>
    </main>
</x-admin.layout>

