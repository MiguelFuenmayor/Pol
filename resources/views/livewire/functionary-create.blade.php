<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @slot('header')
        FORMULARIO FUNCIONARIO
    @endslot
    <div class="p-2 m-2 bg-white rounded shadow-lg">
        <!--usar laravel collective, estudiar como funciona-->
        {!! Form::open(['action'=>'FunctionaryCreate@save', 'files'=>true])!!}
            
        {!! Form::close() !!}
    </div>

</div>
