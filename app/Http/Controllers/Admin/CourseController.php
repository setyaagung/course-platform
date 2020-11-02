<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('title', 'ASC')->get();
        return view('backend.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $instructors = Instructor::orderBy('name', 'ASC')->get();
        return view('backend.course.create', compact('categories', 'instructors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['tags'] = explode(',', $request->tags);
        $extension = $request->file('photo')->extension();
        $image_name = date('dmyHis') . $request->input('title') . '.' . $extension;
        $data['photo'] = Storage::putFileAs('public/course/images', $request->file('photo'), $image_name);
        $data['user_id'] = Auth::user()->id;
        Course::create($data);
        return redirect()->route('course.index')->with('created', 'Kelas baru berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('backend.course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function publish(CourseRequest $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update([
            'status' => 1
        ]);
        return redirect()->back()->with('publish', 'Kelas telah disetujui untuk');
    }

    public function unpublish(CourseRequest $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update([
            'status' => 0
        ]);
        return redirect()->back()->with('unpublish', 'Kelas telah disetujui untuk');
    }
}
