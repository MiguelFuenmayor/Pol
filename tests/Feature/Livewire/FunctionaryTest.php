<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Functionary;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FunctionaryTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Functionary::class)
            ->assertStatus(200);
    }
}
