<div>
    <div>
        <br> <br> <br>
        <table class="table-secondary table-hover" style="width: 1200px; position: relative; left: 60px;">
           <thead>
             <tr style="color: blue;">
               <th scope="col" style="width: 90px"># Pedido</th>
               <th style="width: 140px">Fecha</th>
               <th style="width: 300px">Descripción</th>
               <th style="width: 90px">Subtotal</th>
               <th style="width: 90px">Total</th>
               <th style="width: 300px">Cliente</th>
               <th style="width: 350px">Menu</th>
               <th style="width: 90px">Estado</th>
               <th style="width: 90px">Acciones</th>
             </tr>
           </thead>
           <tbody>
         @foreach ($v as $item)
           <tr>
             <th scope="row">{{$item->id}}</th>
             <td>{{$item->Fecha}}</td>
             <td>{{$item->Descripcion}}</td>
             <td>${{$item->Valor}}</td>
             <td>${{$this->Total_= ($item->Valor*0.12)+$item->Valor}}</td>
             <td>
               {{$item->Nombre}}
               {{$item->Apellido}}
             </td>
             <td>{{$item->Titulo}}</td>
             <td>{{$item->estado}}</td>
             <td class="table-action">  
               <a style="position: relative; left: 20px;"><img src="https://iconos8.es/vue-static/landings/svg/creators/dollar.png"  wire:click="DestroyP({{ $item->id }})" alt="" width="30px" height="30px"></a>
             </td>
           </tr>
         @endforeach
           </tbody>
         </table>
         <div>
           <span style="position: relative; left: -1120px; top: 30px">{{ $v->links() }}</span>
         </div>
         <br> <br>
         <div style="position: relative; left: 50px;">
            <span style="color: red;">Total de Platos Vendidos: </span><span>{{$incremento}}</span>
         </div>
     </div>     
</div>
