<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use App\Models\Video;
use Storage;

class CourseController extends Controller
{
    public function show(Course $course)
    {
        return view('pages.courses-details', [
            'course'  => $course
        ]);
    }
    public function create(Request $request, Course $course)
    {
        $attributes = request()->validate([
            'title'             => 'required',
            'slug'              => ['required', Rule::unique('courses', 'slug')],
            'fee'               => 'required',
            'skill_level'       => 'required',
            'language'          => 'required',
            'assessments'       => 'required',
            'description'       => 'required',
            'certification'     => 'required',
            'learning_outcomes' => 'required',
            'category_id'       => ['required', Rule::exists('categories', 'id')],

        ]);

        $attributes['user_id'] = Auth()->id();

        $course = Course::create($attributes);
        if ($request->hasFile('image')) {
            $course->addMediaFromRequest('image')
                ->usingName($request->title)
                ->toMediaCollection('images');
        }


        $title = $request->course_title;
        $videos = $request->file('videos');
        for ($i = 0; $i < count($title); $i++) {

            $path = $videos[$i]->store('videos/firstlevel', ['disk' =>      'my_files']);
            $datasave = [
                'course_id' => 7,
                'title'    => $title[$i],
                'video'      => $path
            ];
            $getID3 = new \getID3;
            $file = $getID3->analyze($path);
            $duration = date('H:i:s', $file['playtime_seconds']);
            $datasave['duration'] = $duration;
            Video::create($datasave);
        }

        $videos2 = $request->file('videos2');

        for ($i = 0; $i < count($title); $i++) {

            $path = $videos2[$i]->store('videos/secondlevel', ['disk' =>      'my_files']);
            $datasave = [
                'course_id' => 7,
                'title'    => $title[$i],
                'video'      => $path
            ];
            $getID3 = new \getID3;
            $file = $getID3->analyze($path);
            $duration = date('H:i:s', $file['playtime_seconds']);
            $datasave['duration'] = $duration;
            Video::create($datasave);
        }
        return redirect()->route('courses')->with('success', "The course published successfully");
    }

    public function destroy(Course $course)
    {
        // $course->delete();
        return back()->with('success', 'Course Canceled!');
    }
}
