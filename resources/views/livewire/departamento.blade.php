    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Select2') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-center">
                    <div wire:ignore>
                        <select  id="select2" class="form-select">
                            <option value="">Selecciona una opción</option>
                            @foreach ($departamentos as $departamento)
                                <option value="{{$departamento->id}}"> {{$departamento->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <label class="flex justify-center">Seleccionado: <strong>{{ $seleccionado }}</strong></label>
    </div>

    <script>
        $(document).ready(function(){
            $('#select2').select2();
            $('#select2').on('change', function(e){
                let valor = $('#select2').select2('val');
                let text = $('#select2 option:selected').text();
                @this.set('seleccionado', text);
            })
        })
    </script>