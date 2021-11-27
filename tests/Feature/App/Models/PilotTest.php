<?php

namespace Tests\Feature\App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Machine;
use App\Models\Pilot;
use Tests\TestCase;

class PilotTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_pilot_has_relation_with_machine(): void
    {
        $factory = Pilot::factory();
        $pilot = $factory->create();
        $machines = $pilot->machine;

        $this->assertTrue($machines->first() instanceof Machine);
    }
}
