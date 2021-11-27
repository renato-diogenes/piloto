<?php

namespace Tests\Feature\Database\Migrations;

use Illuminate\Foundation\Testing\RefreshDatabase; 
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class CreateMachinesTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_machines_table_was_created(): void
    {
        $this->assertTrue(Schema::hasTable('machines'));
    }
    
    public function test_machines_table_has_code_column():void
    {
        $this->assertTrue(Schema::hasColumn('machines', 'code'));
    }
}
