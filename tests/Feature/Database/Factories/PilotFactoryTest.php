<?php

namespace Tests\Feature\Database\Factories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Pilot;
use Tests\TestCase;

class PilotFactoryTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_factory_can_create_pilots(): void
    {
        $factory = Pilot::factory();
        $pilots = $factory->count(5)->create();

        $this->assertCount(5, $pilots);
    }
}
