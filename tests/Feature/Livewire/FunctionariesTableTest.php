<?php

namespace Tests\Feature\Livewire;

use App\Livewire\FunctionariesTable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FunctionariesTableTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(FunctionariesTable::class)
            ->assertStatus(200);
    }
}
