<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Course;
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
            'description'       => 'required|max:150',
            'certification'     => 'required',
            'learning_outcomes' => 'required',
            'category_id'       => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = Auth()->id();

       $course = Course::create($attributes);
            if($request->hasFile('image')){
            $course->addMediaFromRequest('image')
                    ->usingName($request->title)
                    ->toMediaCollection('images');
          }
        return redirect()->route('courses')->with('success', "The course published successfully" );
    }

     public function destroy(Course $course)
    {
        $course->delete();
        return back()->with('success', 'Course Canceled!');
    }
}
