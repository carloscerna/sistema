<?php

namespace App\Http\Livewire;

use App\Models\Departamento as ModelsDepartamento;
use Livewire\Component;

class Departamento extends Component
{
    public $seleccionado = '';
    public $departamentos;

    public function mount(){
        $this->departamentos = [];
    }

    public function render()
    {
        $this->departamentos = ModelsDepartamento::all();
        return view('livewire.departamento');
    }
}
