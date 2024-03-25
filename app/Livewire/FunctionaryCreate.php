<?php

namespace App\Livewire;

use App\Models\Functionary;
use App\Models\Promo;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Rank;
use App\Models\Charge;
use App\Models\Dependency;
use App\Models\Status;

use Livewire\Attributes\Validate;

#[Title('Añadiendo funcionario')]
class FunctionaryCreate extends Component
{   #[Validate('required', message:'Debe ingresar un nombre')]
    #[Validate('min:3', message: 'Ingrese un nombre con mas de 3 caracteres')]
    public $names;
    #[Validate('required', message:'Debe ingresar un apellido')]
    #[Validate('min:3', message: 'Ingrese un apellido con mas de 3 caracteres')]
    public $surnames;
    #[Validate('required', message:'Debe ingresar una edad')]
    public $age;
    // #[Validate('required', message:'Seleccione un genero')]
    public $gender_id;
    #[Validate('required',message:'La cedula es requerida')]
    #[Validate('regex:/[0-9]{7}/', message: 'Ingrese una cedula de siete(7) digitos, solo numeros')]
    #[Validate('max:7', message: 'Ingrese una cedula de siete(7) digitos, solo numeros')]
    public $identity_document;
    #[Validate('required')]
    public $credential;
    #[Validate('required')]
    public $start_date;
    // #[Validate('required')]
    // public $end_date;
    #[Validate('required')]
    public $charge_id;
    
    // #[Validate('required')]
    public $promo_id;
    // #[Validate('required')]
    public $status_id;
    // #[Validate('required')]
    public $rank_id;
    // #[Validate('required')]
    public $dependency_id;
    public $user_id;
    public $functionary;
    public $data;

    public function mount()
    {
        $this->gender_id=1;
        $this->charge_id=0;
        $this->promo_id=0;
        $this->dependency_id=0;
        $this->rank_id=0;
        $this->promo_id=0;
        $this->status_id=0;
        $this->functionary = [
            'surnames' => null,
            'names' => null,
            'age' => null,
            'gender_id' => null,
            'identity_document' => null,
            'credential' => null,
            'start_date' => null,
            // 'end_date' => null,
            'user_id' => null,
            'promo_id' => null,
            'charge_id'=> null,
            'status_id' => null,
            'rank_id' => null,
            'dependency_id' => null
        ];

        $this->data = [
            'promos' => $this->SelectFormat(Promo::all()->toArray(), 'promo'),
            'ranks' => $this->SelectFormat(Rank::all()->toArray()),
            'charges' => $this->SelectFormat(Charge::all()->toArray(), 'charge'),
            'dependencies' => $this->SelectFormat(Dependency::all()->toArray()),
            'statuses' => $this->SelectFormat(Status::all()->toArray())
        ];
    }

    public function SelectFormat(array $data, $column = 'name')
    {
        $result = [];
        $i = 0;
        while ($i < count($data)) {
            $result[] = $data[$i][$column];
            $i++;
        }


        return $result;
    }

    public function render()
    {
        return view('livewire.functionary-create', ['data' => $this->data, 'names' => $this->names]);
    }

    public function save()
    {   
        $this->validate();
        foreach($this->functionary as $property => $value){
            $this->functionary[$property]=$this->$property;
        }
        $this->functionary['charge_id']++;
        $this->functionary['promo_id']++;
        $this->functionary['dependency_id']++;
        $this->functionary['rank_id']++;
        $this->functionary['status_id']++;
        return dd($this->functionary);
    }
}
