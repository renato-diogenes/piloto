<?php

namespace Tests\Feature\App\Http\Livewire\Pilot;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Livewire\Pilot\Index;
use App\Models\User;
use Tests\TestCase;

class IndexTest extends TestCase
{
    use RefreshDatabase;

    public function test_pilots_dashboard_page_contains_livewire_component()
    {
        $factory = User::factory();

        $this->actingAs($factory->create());
        $this->get('/pilots')->assertSeeLivewire(Index::class);
    }
}
