<div>
    @slot('header')
        TABLA DE FUNCIONARIOS
    @endslot
    <!-- INVESTIGAR PQ NO CARGAN LOS ESTILOS CSS -->
    <div class="py-3 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative overflow-x-">
        <table
            class=" w-full text-sm text-left rtl:text-right table-fixed text-black border-collapse   border-black border-2">
            <thead class="border-black text-xs uppercase bg-green-600">
                <tr class="text-center">
                    <th scope="col" class="border-2  border-black py-3">APELLIDOS</th>
                    <th scope="col" class="border-2 border-black py-3">NOMBRES</th>
                    <th scope="col" class="border-2 border-black py-3">CREDENCIAL</th>
                    <th scope="col" class="border-2 border-black py-3">DEPENDENCIA</th>
                    <th scope="col" class="border-2 border-black py3">EDAD</th>
                    <th scope="col" class="border-2 border-black py-3">GENERO</th>
                    <th scope="col" class="border-2 border-black py-3">CEDULA</th>
                    <th scope="col" class="border-2 border-black py-3">PROMO</th>
                    <th scope="col" class="border-2 border-black py-3">ESTADO</th>
                    <th scope="col" class="border-2 border-black py-3">RANGO</th>
                    <th scope="col" class="border-2 border-black py-3">ARMA</th>        
            </tr>
            </thead>
            <tbody scope="row" class=" border border-black ">
                @foreach ($functionaries as $functionary)
                    <tr wire:key="{{ $functionary->id }}">
                        <td class="border-black border-2">{{$functionary->surnames}}</td>
                        <td class="border-black border-2">{{$functionary->names}}</td>
                        <td class="border-black border-2">{{$functionary->credential}}</td>
                        <td class="border-black border-2">{{$functionary->dependency->name}}</td>
                        <td class="border-2 border-black py-3">{{$functionary->age}}</td>
                        <td class="border-2 border-black py-3">{{$functionary->gender->gender}}</td>
                        <td class="border-2 border-black py-3">{{$functionary->identity_document}}</td>
                        <td class="border-2 border-black py-3">{{$functionary->promo->promo}}</td>
                        <td class="border-2 border-black py-3">{{$functionary->status->name}}</td>
                        <td class="border-2 border-black py-3">{{$functionary->rank->name}}</td>
                        <td class="border-2 border-black py-3">{{$functionary->weapon->weapon_type}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
