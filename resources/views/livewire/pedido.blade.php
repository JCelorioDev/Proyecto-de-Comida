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
                    <div class="grid grid-cols-6 gap-6" style="height: 540px">
                      <div class="col-span-6 sm:col-span-6">
                        <label for="fecha_" class="block text-sm font-medium text-gray-700">Fecha</label>
                        <input type="date" name="fecha_" wire:model="Fecha_" id="fecha_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
        
                      <div class="col-span-6 sm:col-span-6">
                        <label for="descripcion_" class="block text-sm font-medium text-gray-700">Descripción</label>
                        <input type="text" name="descripcion_" wire:model="Descripcion_" id="descripcion_" autocomplete="tel" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>

                      <div class="col-span-6 sm:col-span-6">
                        <label for="total_" class="block text-sm font-medium text-gray-700">Total</label>
                        <input type="number" name="total_" wire:model="Total_" id="total_" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
                      <div>
                        <label>Cliente</label>
                        <select class="form-control select2" data-bs-toggle="select2" wire:model="_id_persona"  style="cursor: pointer; width: 330px ">
                            <option>Selecciona</option> 
                            @foreach ($p as $item)
                            <option value="{{$item->id}}" style="width: 200px">{{$item->Nombre}} {{$item->Apellido}}</option>
                            @endforeach                
                        </select>
                      </div>
                      <div style="position: relative; left: 250px;">
                        <label>Menu</label>
                        <select class="form-control select3" data-bs-toggle="select3" wire:model="_id_menu"  style="cursor: pointer; width: 330px ">
                            <option>Selecciona</option> 
                            @foreach ($m as $item)
                            <option value="{{$item->id}}" style="width: 200px">{{$item->Titulo}}</option>
                            @endforeach                
                        </select>
                      </div>
                      <div style="position: relative; left: -290px; top: 95px;">
                        <label>Estado Cuenta</label>
                        <select class="form-control select3" data-bs-toggle="select3" wire:model="_id_estadocuenta"  style="cursor: pointer; width: 330px ">
                            <option>Selecciona</option> 
                            @foreach ($ec as $item)
                            <option value="{{$item->id}}" style="width: 200px">{{$item->Estado}}</option>
                            @endforeach                
                        </select>
                      </div>
                    </div>
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
</div>
