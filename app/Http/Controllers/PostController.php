<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\PostCategory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\MediaStream;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
      public function post()
    {
        return view('pages.post');
    }
      public function index(Request $request)
    {
        $posts= Post::search($request->search)->get();

        return view('pages.blog', [
            'posts' => $posts,

        ]);
    }


    public function show(Post $post)
    {
        $post->increment('views');
        return view('pages.post', ['post' => $post, 'posts' => Post::all()]);
    }


    public function userindex(User $author)
      {
        return view ('pages.blog' , ['posts' => $author->posts]);
      }

      public function categoryindex(PostCategory $category)
      {
         return view ('pages.blog' , ['posts' => $category->posts]);
      }

   public function store(Request $request, Post $post)

    {
            $attributes = $request->validate([
                'title' => 'required',
                'slug'  => ['required', Rule::unique('posts', 'slug')],
                'description' => 'required|max:150',
                'body'        => 'required',
                'category_id'   => ['required', Rule::exists('post_categories', 'id')]
            ]);

            $attributes['user_id'] = Auth()->id();

           $post = Post::create($attributes);
            if($request->hasFile('image')){
            $post->addMediaFromRequest('image')
                    ->usingName($request->title)
                    ->toMediaCollection('images');
          }
            return redirect()->route('admin-posts')->with('success', 'Your post published successfully');

    }

    public function update(Request $request ,Post $post)
    {
        $attributes = $request->validate([
                'title' => 'required',
                'slug'  => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
                'description' => 'required',
                'body'        => 'required',
                'category_id'   => ['required', Rule::exists('post_categories', 'id')]
            ]);

            $post->update($attributes);

        if($request->hasFile('image')){
            $post->addMediaFromRequest('image')
            ->usingName($request->title)
            ->toMediaCollection('images');
        }

        return redirect()->route('admin-posts', $post->slug)->with('success', 'Your post has been updated');
    }

     public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post Deleted!');
    }

}

