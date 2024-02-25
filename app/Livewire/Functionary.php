<?php

namespace App\Livewire;

use App\Models\Functionary as ModelsFunctionary;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;

#[Title('Datos del funcionario')]
class Functionary extends Component
{   #[URL]
    public $id;
    public $functionary;
    public function mount(){

    }
    public function render()
    {
        return view('livewire.functionary',[
            'functionary'=> ModelsFunctionary::all()->where('id','=',$this->id)
        ]);
    }
}
