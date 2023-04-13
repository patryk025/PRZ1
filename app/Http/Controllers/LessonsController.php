<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller

{
    public function index()
    {
        return view(
            'lessons.index'
        );
    }

    public function create()
    {
        return view(
            'lessons.form'
        );
    }

    public function edit(Lesson $lesson)
    {
        return view(
            'lessons.form',
            [
                'lesson' => $lesson
            ]
        );
    }

    public function update(Request $request, Lesson $lesson)
{

}

    public function delete()
    {
        return view(
            'lessons.form'
        );
    }

    public function store(Request $request)
    {
        $course = new Lesson();
        $course->name = $request->input('name');
        $course->save();

        return redirect()->route('lessons.index');
    }
}
