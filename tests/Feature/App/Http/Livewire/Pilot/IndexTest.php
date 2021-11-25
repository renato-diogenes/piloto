<?php

namespace Tests\Feature\App\Http\Livewire\Pilot;

use App\Http\Livewire\Pilot\Index;
use App\Models\User;
use Tests\TestCase;

class IndexTest extends TestCase
{
    public function test_pilots_dashboard_page_contains_livewire_component()
    {
        $this->actingAs(User::factory()->create());

        $this->get('/pilots')->assertSeeLivewire(Index::class);
    }
}
