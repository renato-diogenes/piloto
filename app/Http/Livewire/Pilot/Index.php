<?php

namespace App\Http\Livewire\Pilot;

use App\Repositories\Contracts\Pilot;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $pilots;

    public function __construct()
    {
        $pilots = app(Pilot::class);
        $this->pilots = $pilots->all();
    }

    public function render()
    {
        return view('livewire.pilot.index');
    }
}
