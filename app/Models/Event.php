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


    public function registerMediaCollections(): void
    {

        $this->addMediaCollection('images')
        ->singleFile();



        $this->addMediaCollection('downloads')
        ->singleFile();
    }
}
