<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Event extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    public $timestamps = true;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'start_date',
        'end_date',
        'ticket_price',
        'place',
        'street',
        'city',
        'company',
        'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault([
            'name'  => 'Deleted Profile'
        ]);
    }

    public function registerMediaCollections(): void
    {

        $this->addMediaCollection('images')
        ->singleFile();



        $this->addMediaCollection('downloads')
        ->singleFile();
    }

    public function next()
    {
        // get next user
        return Event::where('id', '>', $this->id)->where('created_at', '<', now())->orderBy('id', 'asc')->first();
    }
    public  function previous()
    {
        // get previous  user
        return Event::where('id', '<', $this->id)->where('created_at', '<', now())->orderBy('id', 'desc')->first();
    }
}
