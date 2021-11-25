<?php

namespace Tests\Feature\App\Http\Livewire\Pilot;

use App\Http\Livewire\Pilot\Create;
use App\Models\User;
use Tests\TestCase;

class CreateTest extends TestCase
{
    public function test_pilots_creation_page_contains_livewire_component()
    {
        $this->actingAs(User::factory()->create());

        $this->get('/pilots/create')->assertSeeLivewire(Create::class);
    }
}
