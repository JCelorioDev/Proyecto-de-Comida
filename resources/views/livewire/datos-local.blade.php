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
                <h3 class="text-lg font-medium leading-6 text-gray-900">Registro de Local</h3>
                <p class="mt-1 text-sm text-gray-600">Formulario para Registrar Local.</p>
              </div>
            </div>
            <br>
            <div class="mt-5 md:mt-0 md:col-span-2">
              <form  wire:submit.prevent="Save">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-6">
                        <label for="nombre_" class="block text-sm font-medium text-gray-700">Nombre del Local</label>
                        <input type="text" name="nombre_" wire:model="_NombreLocal" id="nombre_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_NombreLocal') <span class="error">{{ $message }}</span> @enderror
                      </div>
        
                      <div class="col-span-6 sm:col-span-6">
                        <label for="nombre_" class="block text-sm font-medium text-gray-700">Télefono</label>
                        <input type="text" name="nombre_" wire:model="_Telefono" id="nombr_" autocomplete="tel" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Telefono') <span class="error">{{ $message }}</span> @enderror
                      </div>

                      <div class="col-span-6 sm:col-span-6">
                        <label for="fecha_" class="block text-sm font-medium text-gray-700">Año de Creación</label>
                        <input type="date" name="fecha_" wire:model="_Apertura" id="fecha_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('_Apertura') <span class="error">{{ $message }}</span> @enderror
                      </div>

                      <label>Dueño</label>
                      <select class="form-control select2" data-bs-toggle="select2" wire:model="_id_persona"  style="cursor: pointer; width: 330px ">
                          <option>Selecciona</option> 
                          @foreach ($p as $item)
                          <option value="{{$item->id}}" style="width: 200px">{{$item->Nombre}} {{$item->Apellido}} ({{$item->Tipo}})</option>
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
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Registrar Local</button>
                  </div>
                </div>
              <br> <br>
              </form>
              <h1 style="color: red; font-family: 'Staatliches', cursive; text-align: center">Si Tu Local Tiene Sucursal Agregala (Opcional)</h1>
              <form  wire:submit.prevent="Save2">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-6">
                        <label for="nombre_" class="block text-sm font-medium text-gray-700">Sucursal</label>
                        <input type="text" name="nombre_" wire:model="_NombreSucursal" id="nombre_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
        
                      <label>Matriz</label>
                      <select class="form-control select2" data-bs-toggle="select2" wire:model="_id_sucursal"  style="cursor: pointer; width: 330px ">
                          <option>Selecciona</option> 
                          @foreach ($s as $item)
                          <option value="{{$item->id}}" style="width: 200px">{{$item->Nombre}}</option>
                          @endforeach                
                      </select>
                    </div>
                  </div>
                  <div>
                    @if (session()->has('message2'))
                        <div class="alert alert-success" style="width: 250px;border: rgb(72, 136, 53) solid 2px;left: 300px; background: rgb(68, 255, 0)">
                            {{ session('message2') }}
                        </div>
                    @endif
                  </div>
                  <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Registrar Sucursal</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <br>
      <div>
        <h2 style="color: red; font-family: 'Staatliches', cursive; text-align: center">Lista de Dueños</h2>
        <table class="table-secondary table-hover" style="width: 600px; position: relative; left: 350px;">
          <thead>
            <tr style="color: blue">
              <th scope="col">Cedula</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Télefono</th>
              <th scope="col">Dirección</th>
            </tr>
          </thead>
          <tbody>
        @foreach ($d as $item)
          <tr>
            <th scope="row">{{$item->Cedula}}</th>
            <td>{{$item->Nombre}}</td>
            <td>{{$item->Apellido}}</td>
            <td>{{$item->Telefono}}</td>
            <td>{{$item->Direccion}}</td>
          </tr>
        @endforeach
          </tbody>
        </table>
      </div>
      <br>
      <div>
        <h2 style="color: red; font-family: 'Staatliches', cursive; text-align: center">Lista de Datos del Local</h2>
        <table class="table-danger table-hover" style="width: 600px; position: relative; left: 350px;">
          <thead>
            <tr style="color: rgb(255, 115, 0)">
              <th scope="col">Nombre</th>
              <th scope="col">Télefono</th>
              <th scope="col">Año de Creación</th>
            </tr>
          </thead>
          <tbody>
        @foreach ($l as $item)
            <tr>
              <th scope="row">{{$item->Nombre}}</th>
              <td>{{$item->Telefono}}</td>
              <td>{{$item->AñoCreacion}}</td>
            </tr>
        @endforeach
         </tbody>
      </table>
      </div>
      <br>
      <div>
        <h2 style="color: red; font-family: 'Staatliches', cursive; text-align: center">Sucursales</h2>
        <table class="table-warning table-hover" style="width: 600px; position: relative; left: 350px;">
          <thead>
            <tr style="color: rgb(98, 0, 255)">
              <th scope="col">Extensiones</th>
              <th scope="col">Local</th>
            </tr>
          </thead>
          <tbody>
        @foreach ($su as $item)
            <tr>
              <th scope="row">{{$item->sucunom}}</th>
              <td>{{$item->localnom}}</td>
           </tr>
        @endforeach
          </tbody>
        </table>
      </div>
</div>
