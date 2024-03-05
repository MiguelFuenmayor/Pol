<div>
    @slot('header')
        DATOS DEL FUNCIONARIO
    @endslot
    <div class="grid grid-cols-3 p-2 m-2 bg-white rounded shadow-lg grid-rows-auto" >
        <img class="col-start-1 col-end-2 row-span-6 m-4 shadow-md" src="https://th.bing.com/th/id/OIP.j3TbXTHgm34ss_xPZgR2bwHaLH?rs=1&pid=ImgDetMain">
        <p class="col-start-2 row-start-1 ml-9" >
             NOMBRES:   {{$functionary->names}}   
        </p>
        <p class="col-start-2 row-start-2 ml-9" >
            APELLIDOS:   {{$functionary->surnames}}   
       </p>
       <p class="col-start-2 row-start-3 ml-9" >
        EDAD:   {{$functionary->age}}   
   </p>
   <p class="col-start-2 row-start-4 ml-9" >
    SEXO:   {{$functionary->getGender()}}   
</p>
<p class="col-start-2 row-start-5 ml-9" >
    CEDULA:   {{$functionary->identity_document}}   
</p>
<p class="col-start-2 row-start-6 ml-9" >
    CREDENCIAL:   {{$functionary->credential}}   
</p>
<p class="col-start-3 row-start-1 ml-9" >
    PROMO:   {{$functionary->getPromo()}}   
</p>
<p class="col-start-3 row-start-2 ml-9" >
    STATUS:   {{$functionary->getStatus()}}   
</p>
<p class="col-start-3 row-start-3 ml-9" >
    RANGO:   {{$functionary->getRank()}}   
</p>
<p class="col-start-3 row-start-4 ml-9" >
    DEPENDENCIA:   {{$functionary->getDependency()}}   
</p>

    </div>
</div>
 