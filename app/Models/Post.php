<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Laravel\Scout\Attributes\SearchUsingPrefix;
use Laravel\Scout\Searchable;

class Post extends Model implements HasMedia
{
    use HasFactory, Notifiable, InteractsWithMedia, Searchable;
    protected $with = ['category' ,'user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault([
            'name'  => 'Deleted Profile'
        ]);
    }

    public function category()
    {
        return $this->belongsTo(PostCategory::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }


      public function registerMediaCollections(): void
    {

        $this->addMediaCollection('images')
            ->singleFile();



        $this->addMediaCollection('downloads')
            ->singleFile();
    }

    public function next(){
    // get next user
    return Post::where('id', '>', $this->id)->orderBy('id','asc')->first();

}
    public  function previous(){
        // get previous  user
        return Post::where('id', '<', $this->id)->orderBy('id','desc')->first();

    }

    public function allcomments()
    {
        return Comment::whereNotNull('post_id')->count();
    }


        /**
         * Get the indexable data array for the model.
         *
         * @return array
         */
        #[SearchUsingPrefix(['id', 'description'])]
        #[SearchUsingFullText(['body'])]
        public function toSearchableArray()
        {
            return [
                'description' => $this->description,
                'title' => $this->title,
                'body' => $this->body,
            ];

    }

}
