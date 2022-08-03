<style>
  .contenedor_div img:hover{
    transform: scale(105%);
    border: rgb(0, 73, 243) solid 3px;
    opacity: 70%;
  }
  .contenedor_div img{
    border: rgb(144, 172, 238) solid 3px;
  }
</style>
<div style="position: relative; left: 80px;">
        <br> <br> <br>

        <div class="contenedor">
          <div class="contenedor_div" style="display: inline-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="https://w0.peakpx.com/wallpaper/515/253/HD-wallpaper-breakfast-egg-coffee-food.jpg" width="300px" height="300px" alt="desayuno">
            <h2 style="text-align: center; font-family: 'Staatliches', cursive;color: rgb(30, 0, 255)">Desayuno</h2>
          </div>

          <div class="contenedor_div" style="display: inline-block; margin: 0 90px" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <img src="https://p4.wallpaperbetter.com/wallpaper/249/871/706/egg-food-fried-rice-lunch-wallpaper-preview.jpg" width="300px" height="300px" alt="almuerzo">
            <h2 style="text-align: center; font-family: 'Staatliches', cursive; color: blue">Almuerzo</h2>
          </div>

          <div class="contenedor_div" style="display: inline-block" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            <img src="https://piensaeco.es/wp-content/uploads/2022/01/merienda-saludable-ecologica.jpg" width="300px" height="300px" alt="merienda">
            <h2 style="text-align: center; font-family: 'Staatliches', cursive;color: rgb(47, 0, 255)">Merienda</h2>
          </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Platos Disponibles</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                @foreach ($frm as $item)
                <span style="font-weight: 900">Titulo: </span><span>{{$item->Titulo}}</span>
                <br>
                <span style="font-weight: 900">Ingredientes</span> <br>
                {{$item->Descripcion}} <br>
                <span style="font-weight: 900">Precio:</span> ${{$item->Valor}} <br>
                <span style="font-weight: 900">Local:</span> 
                {{$item->Nombre}} <br>
                ---------------------------------------------
                <br> <br>
                @endforeach
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Platos Disponibles</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                @foreach ($frm2 as $item)
                <span style="font-weight: 900">Titulo: </span><span>{{$item->Titulo}}</span>
                <br>
                <span style="font-weight: 900">Ingredientes</span> <br>
                {{$item->Descripcion}} <br>
                <span style="font-weight: 900">Precio:</span> ${{$item->Valor}} <br>
                <span style="font-weight: 900">Local:</span> 
                {{$item->Nombre}} <br>
                ---------------------------------------------
                <br> <br>
                @endforeach
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Platos Disponibles</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                @foreach ($frm3 as $item)
                <span style="font-weight: 900">Titulo: </span><span>{{$item->Titulo}}</span>
                <br>
                <span style="font-weight: 900">Ingredientes</span> <br>
                {{$item->Descripcion}} <br>
                <span style="font-weight: 900">Precio:</span> ${{$item->Valor}} <br>
                <span style="font-weight: 900">Local:</span> 
                {{$item->Nombre}} <br>
                ---------------------------------------------
                <br> <br>
                @endforeach
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

      </div>
</div>
