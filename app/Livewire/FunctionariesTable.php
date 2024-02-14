<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Functionary;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Models\FunctionariesDataTable;
#[Title('Tabla de Funcionarios')]
class FunctionariesTable extends Component
{
    use WithPagination;
    public $perPage;
    public $columns;
    public $new_columns;
    public $search;

    public function mount(){
        $this->perPage=15;
        $this->columns=['names','surnames'];
        $this->search='';
    }
    public function columns(){
         array_push($this->column,$this->new_columns);
    }

    public function render()
    {
       
        
        return view('livewire.functionaries-table',[
            'functionaries' => FunctionariesDataTable::search($this->search,$this->columns)->paginate($this->perPage)
        ]);
    }
}
