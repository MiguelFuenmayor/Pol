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

#[Title('Añadiendo funcionario')]
class FunctionaryCreate extends Component
{
    public $names;
    public $functionary;
    public $data;
    public function mount()
    {
        
        $this->functionary = [
            'surnames' => null,
            'names' => null,
            'age' => null,
            'gender_id' => null,
            'identity_document' => null,
            'credential' => null,
            'start_date' => null,
            'end_date' => null,
            'user_id"' => null,
            'promo_id' => null,
            'status_id' => null,
            'rank_id' => null,
            'dependency_id' => null,
            'created_at' => null,
            'updated_at' => null
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
        return true;
    }
}
