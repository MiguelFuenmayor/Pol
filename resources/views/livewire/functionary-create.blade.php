<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @slot('header')
        RELLENE EL FORMULARIO PARA AÑADIR FUNCIONARIO
    @endslot
    <div class="p-2 m-2 bg-white rounded shadow-md">
        <!--Laravel collective html is abandoned, so I shift to Spatie Laravael-html-->
        
        <form method="POST" class="grid grid-flow-row-dense grid-cols-2 gap-5 grid-rows-7 ">
            {{ html()->token() }}
            <!--fullname and age inputs-->
            <div class="grid content-stretch">
                {{ html()->text('names')->attributes(['placeholder'=>'Ingrese los nombres','wire:model'=>'names'])->class('') }} 
                <div>@error('names') {{ $message }} @enderror</div>
            </div>
            <div class="grid">
                {{ html()->text('surnames')->class('')->attributes(['placeholder'=>'Ingrese los apellidos','wire:model'=>'surnames']) }}
                <div>@error('surnames') {{ $message }} @enderror</div>
            </div>

            <div class="grid">
                {{ html()->text('age')->attributes(['pattern'=>'[0-9]{2}','placeholder'=>'Ingrese la edad','wire:model'=>'age'])->class('') }} 
                <div>@error('age') {{ $message }} @enderror</div>
            </div>

            <!--gender select-->
            <div class="grid">
                {{ html()->label('Seleccione el genero','gender_id')->class('') }}
                {{ html()->select('gender_id',[1=>'Masculino',2=>'Femenino'])->attributes(['wire:model'=>'gender_id'])->class('')}} 
                <div>@error('gender_id') {{ $message }} @enderror</div>
            </div>

            <!--id.doc and crdential inputs-->
            <div class="grid">
                {{ html()->text('credential')->attributes(['placeholder'=>'Ingrese la credencial','pattern'=> '[0-9]{9}','wire:model'=>'credential'])->class('')}}
                <div>@error('credential') {{ $message }} @enderror</div>
            </div>

            <div class="grid">
                {{ html()->text('identity_document')->attributes(['placeholder'=>'Ingrese la cedula','wire:model'=>'identity_document'])->class('')}}
                <div>@error('identity_document') {{ $message }} @enderror</div>
            </div>

            <!--promo. range, charge,status and dependency selects-->
            <div class="grid">
                {{ html()->label('Seleccione la promo','promo_id')->class('') }}
                {{ html()->select('promo_id',$data['promos'],0)->class('')->attributes(['wire:model'=>'promo_id']) }}
                <div>@error('promo_id') {{ $message }} @enderror</div>
            </div>

            <div class="grid">
                {{ html()->label('Seleccione el rango','rank_id')->class('') }} <br/>
                {{ html()->select('rank_id',$data['ranks'])->class('')->attributes(['wire:model'=>'rank_id']) }} <br/>
                <div>@error('rank_id') {{ $message }} @enderror</div>
            </div>

            <div class="grid">
                {{ html()->label('Seleccione el cargo','charge_id')->class('') }} <br/>
                {{ html()->select('charge_id',$data['charges'],0)->class('')->attributes(['wire:model'=>'charge_id']) }} <br/>
                <div>@error('charge_id') {{ $message }} @enderror</div>
            </div>

            <div class="grid">
                {{ html()->label('Seleccione la dependencia','dependency_id')->class('') }} <br/>
                {{ html()->select('dependency_id',$data['dependencies'],0)->class('')->attributes(['wire:model'=>'dependency_id','default'=>1]) }} <br/>
                <div>@error('dependency_id') {{ $message }} @enderror</div>
            </div>

            <div class="grid">
                {{ html()->label('Seleccione el estado','status_id')->class('') }} <br/>
                {{ html()->select('status_id',$data['statuses'],0)->class('')->attributes(['wire:model'=>'status_id']) }} <br/>
                <div>@error('status_id') {{ $message }} @enderror</div>
            </div>

            <!--start and end date input-->
            <div class="grid">
                {{ html()->label('Seleccione fecha de ingreso','start_date')->class('') }} <br/>
                {{ html()->input('date','start_date')->class('')->attributes(['wire:model'=>'start_date'])}}<br/>
                <div>@error('start_date') {{ $message }} @enderror</div>
            </div>  
            {{-- {{ html()->label('Seleccione fecha de egreso','end_date')->class('m-2') }} <br/>
            {{ html()->input('date','end_date')->class('m-2')->attributes(['wire:model'=>'end_date']) }} <br/>
            <div>@error('end_date') {{ $message }} @enderror</div> --}}
            
            <input class="col-span-2" type="submit" value="Añadir" wire:click.prevent='save'>
        </form>
        
    </div>

</div>
