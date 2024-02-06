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
    public $perPage=15;
    public $searchColumns=[];
    public $search='';

    public function mount(){
        
    }
    public function search(){
        
    }

    public function render()
    {
       
        
        return view('livewire.functionaries-table',[
            'functionaries' => Functionary::search($this->search)->paginate($this->perPage)
        ]);
    }
}
