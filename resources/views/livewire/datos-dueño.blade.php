<div>
    <form  wire:submit.prevent="Save" style="position: relative; left: 50px; top: 30px">
        <div class="mb-3" style="width: 300px">
          <label for="exampleInputCedula" class="form-label">Cedula</label>
          <input type="text" class="form-control" wire:model="_Cedula" id="exampleInputCedula" aria-describedby="emailHelp">
        </div>
        <div class="mb-3" style="width: 300px">
          <label for="exampleInputNombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" wire:model="_Nombre" id="exampleInputNombre">
        </div>
        <div class="mb-3" style="width: 300px">
            <label for="exampleInputApellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" wire:model="_Apellido" id="exampleInputApellido">
        </div>
        <div class="mb-3" style="width: 300px">
            <label for="exampleInputTelefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" wire:model="_Telefono" id="exampleInputTelefono">
        </div>
        <div class="mb-3" style="width: 300px">
            <label for="exampleInputDireccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" wire:model="_Direccion" id="exampleInputDireccion">
        </div>
        <label>Roles</label>
        <select class="form-control select2" data-bs-toggle="select2" wire:model="_id_tipopersona" style="cursor: pointer ">
            <option>Selecciona</option> 
            @foreach ($t as $item)
            <option value="{{$item->id}}">{{$item->Tipo}}</option>
            @endforeach                
        </select>
        <br>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
