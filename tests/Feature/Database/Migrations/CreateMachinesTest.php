<?php

namespace Tests\Feature\Database\Migrations;

use Illuminate\Foundation\Testing\RefreshDatabase; 
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class CreateMachinesTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_table_machines_was_created()
    {
        $this->assertTrue(Schema::hasTable('machines'));
    }
}
