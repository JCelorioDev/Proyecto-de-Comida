<div style="position: relative; left: 80px;">
       <div style="position: relative; left: 30px;"> 
        <div class="hidden sm:block" aria-hidden="true">
          <div class="py-5">
            <div class="border-t border-gray-200"></div>
          </div>
        </div>
        
        <div class="mt-10 sm:mt-0">
          <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
              <div class="px-2 sm:px-10">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Registro de Usuario</h3>
                <p class="mt-1 text-sm text-gray-600">Formulario para Registrar a Dueño y Cliente.</p>
              </div>
            </div>
            <br>
            <div class="mt-5 md:mt-0 md:col-span-2">
              <form  wire:submit.prevent="Save">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-6">
                        <label for="cedula_" class="block text-sm font-medium text-gray-700">Cedula</label>
                        <input type="text" name="cedula_" wire:model="_Cedula" id="cedula_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Cedula') <span class="error">{{ $message }}</span> @enderror
                      </div>
        
                      <div class="col-span-6 sm:col-span-6">
                        <label for="nombre_" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" name="nombre_" wire:model="_Nombre" id="nombr_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Nombre') <span class="error">{{ $message }}</span> @enderror
                      </div>
        
                      <div class="col-span-6 sm:col-span-6">
                        <label for="apellido_ class="block text-sm font-medium text-gray-700">Apellido</label>
                        <input type="text" name="apellido_" wire:model="_Apellido" id="apellido_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Apellido') <span class="error">{{ $message }}</span> @enderror
                      </div>
    
                      <div class="col-span-6 sm:col-span-6">
                        <label for="telefono_" class="block text-sm font-medium text-gray-700">Télefono</label>
                        <input type="tel" name="telefono_" wire:model="_Telefono" id="telefono_" autocomplete="tel" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Telefono') <span class="error">{{ $message }}</span> @enderror
                      </div>
    
                      <div class="col-span-6 sm:col-span-6">
                        <label for="direccion_" class="block text-sm font-medium text-gray-700">Dirección</label>
                        <input type="text" name="direccion_" wire:model="_Direccion" id="direccion_" autocomplete="address-level4" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Direccion') <span class="error">{{ $message }}</span> @enderror
                      </div>
    
                      <label>Roles</label>
                      <select class="form-control select2" data-bs-toggle="select2" wire:model="_id_tipopersona" style="cursor: pointer ">
                          <option>Selecciona</option> 
                          @foreach ($t as $item)
                          <option value="{{$item->id}}">{{$item->Tipo}}</option>
                          @endforeach                
                      </select>
      
                    </div>
                  </div>
                  <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success" style="width: 250px;border: rgb(72, 136, 53) solid 2px;left: 300px; background: rgb(68, 255, 0)">
                            {{ session('message') }}
                        </div>
                    @endif
                  </div>
                  <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Registrar</button>
                  </div>
                </div>
                <br> <br>
              </form>
            </div>
          </div>
        </div>
      </div>

      
      <div style="width: 270px">
        <label>Nombre del Local</label>
        <input type="text" name="_LocalInput" placeholder="Ingresa el Dato para la Búsqueda" wire:model="_LocalInput" id="_CedulaInput" autocomplete="username" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
      </div>

      @if ($_LocalInput)
      <table class="table" style="width: 800px; position: relative; left: 160px; top: 15px">
        <thead>
          <tr>
            <th scope="col">Local</th>
            <th scope="col">Telefono</th>
            <th scope="col">Año Creación</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($p as $item)
              <th scope="row">{{$item->lonom}}</th>
              <td>{{$item->lotel}}</td>
              <td>{{$item->AñoCreacion}}</td>
              <td>
                <div style="background: rgb(21, 255, 0); width: 116px; height: 25px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <span style="color: white;font-family: 'Staatliches', cursive;">Mostrar Dueño</span>
                </div>
              </td>
            @endforeach
          </tr>
        </tbody>
      </table>          
      @endif


      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos del Dueño</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @foreach ($p as $item)
            <span style="color: red;font-weight: 900">Nombre:</span> {{$item->Nombre}} <br>
            <span style="color: red;font-weight: 900">Apellido:</span> {{$item->Apellido}} <br>
            <span style="color: red;font-weight: 900">Cedula:</span> {{$item->Cedula}} <br>
            <span style="color: red;font-weight: 900">Télefono:</span> {{$item->Telefono}} <br>
            <span style="color: red;font-weight: 900">Dirección:</span> {{$item->Direccion}} <br>
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

</div>