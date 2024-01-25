<div>
    @slot('header')
        TABLA DE FUNCIONARIOS
    @endslot
    <!-- INVESTIGAR PQ NO CARGAN LOS ESTILOS CSS -->
<div class="py-3 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right table-fixed text-black border-collapse   border-black border-2">
        <thead class="border-black text-xs uppercase bg-green-600">
        <tr>
            <th scope="col" class="border-2  border-black py-3">APELLIDOS</th>
            <th scope="col" class="border-2 border-black py-3">NOMBRES</th>
            <th scope="col" class="border-2 border-black py-3">CREDENCIAL</th>
            <th scope="col" class="border-2 border-black py-3">DEPENDENCIA</th>
            <th scope="col" class="border-2 border-black py-3"></th>
            <th scope="col" class="border-2 border-black py-3"></th>

        </tr>
        </thead>
        <tbody scope="row" class=" border border-black ">
        <tr >
            <td class="border-black border-2">APELLIDOS</td>
            <td class="border-black border-2">NOMBRES</td>
            <td class="border-black border-2">CREDENCIAL</td>
            <td class="border-black border-2">DEPENDENCIA</td>
            <td class="border-black border-2">
                <button>MAS INFORMACION</button>
            </td>
            <td class="border-black border-2">
                <button>IMPRIMIR DATOS</button>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</div>
