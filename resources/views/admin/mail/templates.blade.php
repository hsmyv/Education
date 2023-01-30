<x-admin.layout>
    <x-admin.header />
    <x-admin.leftsidebar />

    <!--Main container start -->
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Courses</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Courses</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">

                        <div class="widget-inner">
                            @foreach ($templates as $template )


                            <div class="card-courses-list admin-courses">
                                <div class="card-courses-media">
                                    <img src="/img/blog/ads-banner.jpg" alt=""/>
                                </div>
                                <div class="card-courses-full-dec">
                                    <div class="card-courses-title">
                                        <h4>{{$template->name}}</h4>
                                    </div>
                                    <div class="row card-courses-dec">
                                        <div class="col-md-12">
                                            <h6 class="m-b10">{{$template->body}}</h6>
                                            <p> </p>
                                        </div>
                                        <div class="mr-2">
                                        <a href="{{route('template-edit', $template->name)}}" class="btn green radius-xl outline">Edit</a>
                                        </div>
                                            <form method="POST" action="">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn red outline radius-xl">Delete</button>
                                            </form>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Your Profile Views Chart END-->
            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>

</x-admin.layout>
