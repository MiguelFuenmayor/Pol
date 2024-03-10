<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @slot('header')
        FORMULARIO FUNCIONARIO
    @endslot
    <div class="p-2 m-2 bg-white rounded shadow-lg">
        <!--Laravel collective html is abandoned, so I shift to Spatie Laravael-html-->
        
        {{ html()->form('PUT')->open() }}

            {{ html()->text('names') }}
            {{ html()->text('surnames') }}
        {{ html()->form()->close() }}
        
    </div>

</div>
