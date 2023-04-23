<?php

namespace App\Http\Livewire\Courses;

use Carbon\Carbon;
use App\Models\Course;
use Illuminate\Support\Collection;
use App\Http\Livewire\CoursesTimetable;
use Omnia\LivewireCalendar\LivewireCalendar;

class CourseTimetable extends LivewireCalendar
{
    public Course $hostingType;

    /*public function mount(Course $course, $initialYear = null, $initialMonth = null, $weekStartsAt = null, $calendarView = null, $dayView = null, $eventView = null, $dayOfWeekView = null, $dragAndDropClasses = null, $beforeCalendarView = null, $afterCalendarView = null, $pollMillis = null, $pollAction = null, $dragAndDropEnabled = true, $dayClickEnabled = true, $eventClickEnabled = true, $extras = []) {
        $this->course = $course;
    }*/

    public function mount(
        $initialYear = null, $initialMonth = null, $weekStartsAt = 1, $calendarView = null, $dayView = null, $eventView = null, $dayOfWeekView = null, $dragAndDropClasses = null, $beforeCalendarView = null, $afterCalendarView = null, $pollMillis = null, $pollAction = null, $dragAndDropEnabled = true, $dayClickEnabled = true, $eventClickEnabled = true, $extras = []
    ) {
        parent::mount(
            $initialYear, $initialMonth, $weekStartsAt, $calendarView, $dayView, $eventView, $dayOfWeekView, $dragAndDropClasses, $beforeCalendarView, $afterCalendarView, $pollMillis, $pollAction, $dragAndDropEnabled, $dayClickEnabled, $eventClickEnabled, $extras
        );
        //$this->course = $course;
        $this->course = $extras['course'];
    }

    public function onDayClick($year, $month, $day)
    {
        // This event is triggered when a day is clicked
        // You will be given the $year, $month and $day for that day
    }

    public function onEventClick($eventId)
    {
        // This event is triggered when an event card is clicked
        // You will be given the event id that was clicked
    }

    public function onEventDropped($eventId, $year, $month, $day)
    {
        // This event will fire when an event is dragged and dropped into another calendar day
        // You will get the event id, year, month and day where it was dragged to
    }

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
