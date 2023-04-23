<?php

namespace App\Http\Livewire\Courses;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Omnia\LivewireCalendar\LivewireCalendar;
use App\Http\Livewire\CoursesTimetable;

class CourseTimetable extends LivewireCalendar
{
    public function events() : Collection
    {
        return collect([
            [
                'id' => 1,
                'title' => 'test1',
                'description' => 'Teścik',
                'date' => Carbon::today(),
            ],
            [
                'id' => 2,
                'title' => 'test2',
                'description' => 'MAME JESTEM W KOMPUTRZE!!!',
                'date' => Carbon::tomorrow(),
            ],
        ]);
    }
}
