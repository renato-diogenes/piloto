<?php

namespace Tests\Feature\App\Repositories\Eloquent;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Repositories\Eloquent;
use Tests\TestCase;
use App\Models;

class PilotTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_repository_can_return_all_pilots()
    {
        $factory = Models\Pilot::factory();

        $pilots = $factory->count(10)->create();

        $eloquent = new Eloquent\Pilot();
        $allPilots = $eloquent->all();

        $this->assertEquals($pilots->modelKeys(), $allPilots->modelKeys());
    }
}
