<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
#[Title('Datos del funcionario')]
class Functionary extends Component
{   
    
    public $functionary;
    public function mount(){
        
    }
    public function render()
    {
        return view('livewire.functionary');
    }
}
