<x-admin.layout>
    <x-admin.header />
    <x-admin.leftsidebar />
    <main class="ttr-wrapper">
        <div class="container-fluid">
            {{-- <x-admin.start-banner /> --}}

            <head>

            <body>
                <div class="row">
                    <!-- Your Profile Views Chart -->
                    <div class="col-lg-12 m-b30">
                        <div class="widget-box">
                            <div class="wc-title">
                                <h4>Mail Templates</h4>
                            </div>
                            <div class="widget-inner">
                                <form class="edit-profile m-b30" method="POST" action="{{ route('edit-template', $template->id) }}"
                                    enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="ml-auto">
                                                <h3>1. Basic info</h3>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Name</label>
                                            <div>
                                                <input disabled="disabled" class="form-control" type="text"
                                                    name="name"
                                                    value="{{ old('name', $template->name ?? 'null') }}" />
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Subject</label>
                                            <div>
                                                <input class="form-control"
                                                    value="{{ old('subject', $template->subject ?? 'nul') }}"
                                                    type="text" name="subject" />
                                            </div>
                                        </div>

                                        <div class="form-group col-12">
                                            <label class="col-form-label">Body</label>
                                            <div>
                                                <textarea class="form-control" value="{{ old('body') }}" name="body" cols="50" rows="2">{{ $template->body }}</textarea>

                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn">Save changes</button>
                                            <a  class="btn" href="{{route('admin-templates')}}">Back</a>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    <!-- Your Profile Views Chart END-->
                </div>


                <div class="row">
                    <!-- Your Profile Views Chart -->
                    <div class="col-lg-12 m-b30">
                        <div class="widget-box">
                            <div class="wc-title">
                                <h4>Mail Templates' Keys</h4>
                            </div>
                            <div class="widget-inner">
                                <form class="edit-profile m-b30">
                                    @method('PATCH')
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="ml-auto">
                                                @foreach ($keys as $key)
                                                <p>{{$key->words}}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group col-6">

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


</x-admin.layout>
