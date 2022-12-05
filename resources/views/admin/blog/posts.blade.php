<x-admin.layout>
    <x-admin.header/>
    <x-admin.leftsidebar/>
    <main class="ttr-wrapper">
		<div class="container-fluid">
			<x-admin.start-banner :post="$post"/>

                @if($posts->count())

                                    <div class="container  col-md-12">
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="bg-white divide-y divide-gray-200">
                       @foreach ($posts as $post)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            <a href="{{route('show-post', $post->slug)}}">
                                               {{$post->title}}
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    {{$post->category->name}}
                                 </td>
                                 <td>
                                    {{$post->user->username}}
                                 </td>
                                  <td>
                                    <p>comments: {{$post->comments->count()}}</p>
                                 </td>
                                 <td>
                                    <p>views: {{$post->views}}</p>
                                 </td>
                                 <td class="px-2 py-1 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{route('show-post', $post->slug)}}"class="btn blue radius-xl outline">View</a>
                                </td>

                                <td class="px-2 py-1 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{route('admin-editpost', $post->slug)}}"class="btn green radius-xl outline">Edit</a>
                                </td>

                                <td class="px-2 py-1 whitespace-nowrap text-right text-sm font-medium">
                                    <form method="POST" action="{{route('delete-post', $post)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn red outline radius-xl">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
                                @else
                                <p class= "text-center">No posts yet..</p>
                            @endif
</div>
	</main>
    </x-admin.layout>
