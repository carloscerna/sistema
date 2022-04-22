<?php

namespace App\Http\Livewire;

use App\Models\CatalogoNacionalidad as ModelsCatalogoNacionalidad;
use Livewire\Component;

class CatalogoNacionalidad extends Component
{
    public $seleccionado = '';
    public $nacionalidad;

    public function mount(){
        $this->nacionalidad = [];
    }

    public function render()
    {
        $this->nacionalidad = ModelsCatalogoNacionalidad::all();

        return view('livewire.catalogo-nacionalidad');
    }
}
