<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Functionary;
use Livewire\WithPagination;
#[Title('Tabla de Funcionarios')]
class FunctionariesTable extends Component
{
    use WithPagination;
    public $functionaries;
    public $search='';

    public function mount(){
        $this->functionaries = Functionary::all();
    }
    public function search(){
        
    }

    public function render()
    {
       
        
        return view('livewire.functionaries-table',);
    }
}
