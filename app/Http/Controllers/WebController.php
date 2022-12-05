<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\AboutInformations;
class WebController extends Controller
{
    public function courses()
    {
        return view('pages.courses', [
            'courses' => Course::inRandomOrder()->limit(4)->get(),
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

       public function events()
    {
        return view('pages.events', [
            'eventsname' => 'Events'
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
