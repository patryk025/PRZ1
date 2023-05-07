<x-app-layout>
    <x-slot name="header">
         <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{__('Kalendarz')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-auto bg-white shadow-x1 sm:rounded-lg" id="table-view-wrapper">  
                <!--livewire:courses.course-timetable /-->
                @php
                    $extras = ['course' => $course];
                @endphp
                <div>
                    <button wire:click="prevMonth">Previous month</button>
                </div>
                <div>
                    <button wire:click="nextMonth">Next month</button>
                </div>
                @livewire('courses.course-timetable', ['extras' => $extras])
            </div>
        </div>
    </div>
</x-app-layout>


