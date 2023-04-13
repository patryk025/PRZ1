<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Omnia\LivewireCalendar\LivewireCalendar;

class TimetableCalendar extends LivewireCalendar
{
    public function events() : Collection
    {
        /*
        public function events(): Collection
        {
            return Model::query()
                ->whereDate('scheduled_at', '>=', $this->gridStartsAt)
                ->whereDate('scheduled_at', '<=', $this->gridEndsAt)
                ->get()
                ->map(function (Model $model) {
                    return [
                        'id' => $model->id,
                        'title' => $model->title,
                        'description' => $model->notes,
                        'date' => $model->scheduled_at,
                    ];
                });
        }
        */

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
