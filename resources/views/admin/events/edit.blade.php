<x-admin.layout>
    <x-admin.header />
    <x-admin.leftsidebar />
    <main class="ttr-wrapper">
        <div class="container-fluid">
			<x-admin.start-banner :post="'Events'"/>

            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Create Event</h4>
                            <div style="text-align:right">
                            <a href="{{route('admin.events.index')}}"><button  class="btn">Back</button></a>
                            </div>
                        </div>
                        <div class="widget-inner">
                            <form class="edit-profile m-b30" method="POST" action="{{ route('events.update', $event) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="row">
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>1. Basic info</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Event title</label>
                                        <div>
                                            <input class="form-control" type="text" name="title"
                                                value="{{ old('title', $event->title) }}" />
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Event slug</label>
                                        <div>
                                            <input class="form-control" value="{{ old('slug', $event->slug) }}"
                                                type="text" name="slug" />
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Start date</label>
                                        <div>
                                            <a>{{ $event->start_date }}</a>
                                            <input name="start_date" class="form-control" type="date" />
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">End date</label>
                                        <div>
                                            <a>{{ $event->end_date }}</a>

                                            <input name="end_date" class="form-control" type="date" />
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Ticket Price</label>
                                        <div>
                                            <input class="form-control" type="text" name="ticket_price"
                                                value="{{ old('ticket_price', $event->ticket_price) }}" />
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Place</label>
                                        <div>
                                            <input class="form-control" value="{{ old('place', $event->place) }}"
                                                type="text" name="place" />
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">City</label>
                                        <div>
                                            <input class="form-control" type="text" name="city"
                                                value="{{ old('city', $event->city) }}" />
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Street</label>
                                        <div>
                                            <input class="form-control" value="{{ old('street', $event->street) }}"
                                                type="text" name="street" />
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Company</label>
                                        <div>
                                            <input class="form-control" value="{{ old('company', $event->company) }}"
                                                type="text" name="company" />
                                        </div>
                                    </div>

                                    <div class="seperator"></div>

                                    <div class="col-12 m-t20">
                                        <div class="ml-auto m-b5">
                                            <h3>2. Description</h3>
                                        </div>
                                    </div>


                                    <div class="form-group col-12">
                                        <label class="col-form-label">Post body</label>
                                        <div>
                                            <textarea class="form-control" id="summary-ckeditor" name="body">{{ old('body', $event->body) }}</textarea>
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
                                            <img src="{{$event->getFirstMediaUrl('images')}}" id="output"
                                                width="250" height="250" />
                                            <div class="form-group">
                                                <div class="sm:col-span-6">
                                                    <label for="photos"
                                                        class="block text-sm font-medium text-gray-700"> Post Image
                                                    </label>
                                                    <div class="mt-1">
                                                        <input onchange="loadFile(event)" name="image" type="file"
                                                            id="image" wire:model="newImage" name="image"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button type="submit" class="btn">Update</button>
                                </div>

                                @if ($errors->any())
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="text-red-500 text-xs mt-1">{{ $error }}</li>
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
    @include('pages.url_slug');
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
    CKEDITOR.replace('summary-ckeditor', {
        filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
</script>
