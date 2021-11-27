<?php

namespace Tests\Feature\App\Http\Livewire\Pilot;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Livewire\Pilot\Create;
use App\Models\User;
use Tests\TestCase;

class CreateTest extends TestCase
{
    use RefreshDatabase;

    public function test_pilots_creation_page_contains_livewire_component()
    {
        $factory = User::factory();

        $this->actingAs($factory->create());
        $this->get('/pilots/create')->assertSeeLivewire(Create::class);
    }
}
