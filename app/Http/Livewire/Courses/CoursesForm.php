<?php

namespace App\ttp\Livewire\Courses;

use Livewire\Component;
use WireUi\Traits\Actions;
use Illuminate\Support\Str;

class CoursesForm extends Component
{
    use Actions;

    public Course $course;
    public Bool $editMode;

    public function rules()
    {
        return [
            'course.name'  => [
                'required',
                'string',
                'min:2',
                'unique:course,name' .
                    ($this->editMode ? (',' . $this->course->id) : ''),
            ],
        ];
    }

    public function validationAttributes()
    {
        return [
            'name' => Str::lower(__('courses.attributes.name')),
        ];
    }

    public function mount(course $course, Bool $editMode)
    {
        $this->course = $course;
        $this->editMode = $editMode;
    }

    public function render()
    {
        return view('livewire.courses.course-form');
    }

    public function updated($propetyName)
    {
        $this->ValidateOnly($propetyName)
    }

    public function save()
    {
        sleep(1);
        $this->validate();
        $this->course->save();
        $this->notification()->success(
            $title = $this->editMode
                ? __('translation.messages.successes.updated_title')
                : __('translation.messages.successes.stored_title')
            $description = $this->editMode
                ? __('courses.messages.successes.updated', ['name' => $this->course->name])
                : __('courses.messages.successes.stored', ['name' => $this->course->name])
        );
        $this->editMode = true;
    }

}