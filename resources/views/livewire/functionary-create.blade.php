<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @slot('header')
        RELLENE EL FORMULARIO PARA AÑADIR FUNCIONARIO
    @endslot
    <div class="p-2 m-2 bg-white rounded shadow-md">
        <!--Laravel collective html is abandoned, so I shift to Spatie Laravael-html-->
        
        <form class="">
            {{ html()->token()}}
            {{ html()->text('names')->attributes(['placeholder'=>'Ingrese los nombres','wire:model'=>'names'])->class('row-start-1') }} <br/>
            {{ html()->text('surnames')->attribute('placeholder','Ingrese los apellidos')->class('col-start-2') }}<br/>
            {{ html()->text('age')->attributes(['pattern'=>'[0-9]{2}','placeholder'=>'Ingrese la edad']) }} <br/>
            {{ html()->label('Seleccione el genero','gender_id') }} <br/>
            {{ html()->select('gender_id',[1=>'Masculino',2=>'Femenino'])->class('pr-10 p-2 m2')}} <br/>
            {{ html()->text('credential')->attributes(['placeholder'=>'Ingrese la credencial','pattern'=> '[0-9]{9}'])}} <br/>
            {{ html()->text('identity_document')->attributes(['placeholder'=>'Ingrese la cedula'])}} <br/>
            {{ html()->label('Seleccione la promo','promo_id') }} <br/>
            {{ html()->select('promo_id',$data['promos']) }} <br/>
            {{ html()->label('Seleccione el rango','rank_id') }} <br/>
            {{ html()->select('rank_id',$data['ranks']) }} <br/>
            {{ html()->label('Seleccione el cargo','charge_id') }} <br/>
            {{ html()->select('charge_id',$data['charges'])->class('pr-10') }} <br/>
            {{ html()->label('Seleccione la dependencia','dependency_id') }} <br/>
            {{ html()->select('dependency_id',$data['dependencies'])->class('pr-10') }} <br/>
            {{ html()->label('Seleccione el estado','status_id') }} <br/>
            {{ html()->select('status_id',$data['statuses'])->class('pr-10') }} <br/>
            {{ html()->label('Seleccione fecha de ingreso','start_date') }} <br/>
            {{ html()->input('date','start_date')}}<br/>
            {{ html()->label('Seleccione fecha de egreso','end_date') }} <br/>
            {{ html()->input('date','end_date')}} <br/>
            {{html()->submit('enviar')->class('p-2 m-2 bg-blue-600')}}
        </form>
        
    </div>

</div>
