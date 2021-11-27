<?php

namespace Tests\Feature\Database\Factories;

use App\Models\Machine;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MachineFactoryTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_factory_can_create_machines(): void
    {
        $factory = Machine::factory();
        $machines = $factory->count(5)->create();

        $this->assertCount(5, $machines);
    }
}
