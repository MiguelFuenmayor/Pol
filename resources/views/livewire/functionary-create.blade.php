<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @slot('header')
        FORMULARIO FUNCIONARIO
    @endslot
    <div class="p-2 m-2 bg-white rounded shadow-lg">
        <!--usar laravel collective, estudiar como funciona-->
        {!! Form::open([ 'files'=>true])!!}
            {!! Form::text('names') !!}
            {!! Form::text('surnames') !!}
            {!! Form::select('dependency', ['1','11','12'], '3') !!}
            {!! Form::select('rank', ['1','2','3'], '1') !!}
            {!! Form::select('gender', [1=>'masculino',2=>'femenino'], '1') !!}
            
            
            
        {!! Form::close() !!}
    </div>

</div>
