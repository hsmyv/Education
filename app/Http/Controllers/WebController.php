<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\AboutInformations;
use App\Models\Post;
use App\Models\User;

class WebController extends Controller
{

    public function index()
    {
        $information = AboutInformations::where('id', 1)->first();
         return view('pages.index', [
        'users' => User::all(),
        'posts' => Post::latest()->take(4)->where('published_at', '<', now())->get(),
        'courses' => Course::all(),
        'information' => $information
         ]);
    }


    public function example()
    {
        return view('example');
    }
    public function courses()
    {
        return view('pages.courses', [
            'courses' => Course::inRandomOrder()->limit(8)->get(),
            'coursesname' => 'Courses']);


    }

      public function about()
    {
        $information = AboutInformations::where('id', 1)->first();
        return view('pages.about', [
            'information' => $information,
            'aboutus' => 'About Us'
        ]);
    }

  
    public function events_details()
    {
        return view('pages.events-details');
    }

      public function contact()
    {
        return view('pages.contact');
    }
}
