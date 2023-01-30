<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Notifications\CommentNotification;
class CommentController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'body' => 'required'
        ]);


        $reply = $post->comments()->create([
        'name'    => auth()->user()->name,
        'user_id' => request()->user()->id,
        'body'    => request('body'),
        'post_id' => $post->id,
        ]);



    if($reply['user_id'] == $post->user->id)
    {

    }
    else
    {
        $post->user->notify(new CommentNotification($reply, $post));
    }




    return back();
}


    public function reply(Post $post, Request $request)
    {

            $reply = new Comment();
            $reply->body = $request->get('comment_body');
            $reply->user()->associate($request->user());
            $reply->parent_id = $request->get('comment_id');
            $reply->commentable_user = $request->get('commentable_user');
            $reply->post_id = $request->get('post_id');
            $post = Post::find($request->get('post_id'));
            $post->comments()->save($reply);


            $reply->comment->user->notify(new CommentNotification($reply, $post));

            return back();
    }

      public function update( Comment $comment){
        $attributes = request()->validate([
            'body' => 'required'
        ]);

        $comment->update($attributes);
        return redirect()->route("show-post", $comment->post->slug)->with('success' ,'Your comment has been edited successfully');
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return back()->with('success', 'Your comment has been deleted successfully');
    }

    public function show(Comment $comment){
        return view('pages.edit-comment', ['comment' => $comment]);
    }

    public function markasread($id)
    {
        Auth()->user()->unreadNotifications->where('id',$id)->markAsRead();
        return back();
    }


}
