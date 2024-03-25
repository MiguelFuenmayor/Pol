<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @slot('header')
        RELLENE EL FORMULARIO PARA AÑADIR FUNCIONARIO
    @endslot
    <div class="p-2 bg-white rounded shadow-md md:m-10 lg:mx-80">
        <!--Laravel collective html is abandoned, so I shift to Spatie Laravael-html-->
        
        <form method="POST" class="grid gap-5 md:grid-cols-2 " id="inputform">
            {{ html()->token() }}
            <!--fullname and age inputs-->
            <div class="flex flex-col">
                {{ html()->text('names')->attributes(['placeholder'=>'Ingrese los nombres','wire:model'=>'names'])->class('') }} 
                <div>@error('names') {{ $message }} @enderror</div>
            </div>
            <div class="flex flex-col">
                {{ html()->text('surnames')->class('')->attributes(['placeholder'=>'Ingrese los apellidos','wire:model'=>'surnames']) }}
                <div>@error('surnames') {{ $message }} @enderror</div>
            </div>

            <div class="flex flex-col">
                {{ html()->text('age')->attributes(['pattern'=>'[0-9]{2}','placeholder'=>'Ingrese la edad','wire:model'=>'age'])->class('') }} 
                <div>@error('age') {{ $message }} @enderror</div>
            </div>

            

            <!--id.doc and crdential inputs-->
            <div class="flex flex-col">
                {{ html()->text('credential')->attributes(['placeholder'=>'Ingrese la credencial','pattern'=> '[0-9]{9}','wire:model'=>'credential'])->class('')}}
                <div>@error('credential') {{ $message }} @enderror</div>
            </div>

            <div class="flex flex-col">
                {{ html()->text('identity_document')->attributes(['placeholder'=>'Ingrese la cedula','wire:model'=>'identity_document','pattern'=>'/[0-9]{7}/'])->class('')}}
                <div>@error('identity_document') {{ $message }} @enderror</div>
            </div>

            <!--gender select-->
            <div class="flex flex-col">
                {{ html()->label('Seleccione el genero','gender_id')->class('m-0 p-0') }}
                {{ html()->select('gender_id',[1=>'Masculino',2=>'Femenino'])->attributes(['wire:model'=>'gender_id'])->class('')}} 
                <div>@error('gender_id') {{ $message }} @enderror</div>
            </div>
            <!--promo. range, charge,status and dependency selects-->
            <div class="flex flex-col">
                {{ html()->label('Seleccione la promo','promo_id')->class('') }}
                {{ html()->select('promo_id',$data['promos'],0)->class('')->attributes(['wire:model'=>'promo_id']) }}
                <div>@error('promo_id') {{ $message }} @enderror</div>
            </div>

            <div class="flex flex-col">
                {{ html()->label('Seleccione el rango','rank_id')->class('') }} 
                {{ html()->select('rank_id',$data['ranks'])->class('')->attributes(['wire:model'=>'rank_id']) }}
                <div>@error('rank_id') {{ $message }} @enderror</div>
            </div>

            <div class="flex flex-col">
                {{ html()->label('Seleccione el cargo','charge_id')->class('') }}
                {{ html()->select('charge_id',$data['charges'],0)->class('')->attributes(['wire:model'=>'charge_id']) }}
                <div>@error('charge_id') {{ $message }} @enderror</div>
            </div>

            <div class="flex flex-col">
                {{ html()->label('Seleccione la dependencia','dependency_id')->class('') }} 
                {{ html()->select('dependency_id',$data['dependencies'],0)->class('')->attributes(['wire:model'=>'dependency_id','default'=>1]) }}
                <div>@error('dependency_id') {{ $message }} @enderror</div>
            </div>

            <div class="flex flex-col">
                {{ html()->label('Seleccione el estado','status_id')->class('') }}
                {{ html()->select('status_id',$data['statuses'],0)->class('')->attributes(['wire:model'=>'status_id']) }}
                <div>@error('status_id') {{ $message }} @enderror</div>
            </div>

            <!--start and end date input-->
            <div class="flex flex-col">
                {{ html()->label('Seleccione fecha de ingreso','start_date')->class('') }}
                {{ html()->input('date','start_date')->class('')->attributes(['wire:model'=>'start_date'])}}
                <div>@error('start_date') {{ $message }} @enderror</div>
            </div>  
            {{-- {{ html()->label('Seleccione fecha de egreso','end_date')->class('m-2') }} <br/>
            {{ html()->input('date','end_date')->class('m-2')->attributes(['wire:model'=>'end_date']) }} <br/>
            <div>@error('end_date') {{ $message }} @enderror</div> --}}
            
            <input class="col-span-2 py-2 text-white bg-blue-600 border-2 border-black hover:bg-blue-700 active:bg-blue-500 active:transition-colors" type="submit" value="Añadir" wire:click.prevent='save'>
        </form>
        
    </div>
</div>
