<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
#[Title('Añadiendo funcionario')]
class FunctionaryCreate extends Component
{
    public function render()
    {
        return view('livewire.functionary-create');
    }
}
