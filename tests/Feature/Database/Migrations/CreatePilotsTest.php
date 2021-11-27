<?php

namespace Tests\Feature\Database\Migrations;

use Illuminate\Foundation\Testing\RefreshDatabase; 
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class CreatePilotsTest extends TestCase
{
    use RefreshDatabase;

    public function test_pilots_table_was_created(): void
    {
        $this->assertTrue(Schema::hasTable('pilots'));
    }

    public function test_pilots_table_has_the_corrects_colums(): void
    {
        $this->assertTrue(
            Schema::hasColumns('pilots', ['image', 'seal', 'machine_id'])
        );
    }
}
