<?php

namespace App\Http\Livewire;

use App\Models\EstudiantesFichaAnecdotica as ModelEstudiantesFichaAnecdotica;
use Livewire\Component;

class EstudianteFichaAnecdotica extends Component
{
    public $seleccionado = '';
    public $producto;
    public function render()
    {
        return view('livewire.estudiante-ficha-anecdotica');
    }
}
