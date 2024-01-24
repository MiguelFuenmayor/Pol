<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Tabla de Funcionarios')]
class FunctionariesTable extends Component
{
    public function render()
    {
        return view('livewire.functionaries-table');
    }
}
