<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Functionary;
#[Title('Tabla de Funcionarios')]
class FunctionariesTable extends Component
{
    public $functionaries;

    public function mount(){
        $this->functionaries= Functionary::all();
    }
    public function render()
    {
        return view('livewire.functionaries-table',[
            'functionaries'=> Functionary::all()
        ]);
    }
}
