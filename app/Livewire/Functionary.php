<?php

namespace App\Livewire;

use App\Models\Gender;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\URL;
use App\Models\Functionary as ModelsFunctionary;
#[Title('Datos del funcionario')]
class Functionary extends Component
{   
    #[URL]
    public $id;
    public $functionary;
    public function mount(){
        $this->functionary=ModelsFunctionary::find($this->id);
        
    }
    public function render()
    {
        return view('livewire.functionary', [
            'functionary'=> $this->functionary
        ]);
    }
}
