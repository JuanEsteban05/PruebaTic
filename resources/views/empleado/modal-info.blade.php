
  <!-- Modal -->
  <div class="modal fade" id="edit{{$empleado->id_empleado}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Empleado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.update',$empleado->id_empleado)}}" method="post" entype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="modal-body">

                <div class="form-group">
                    <label for="nombre-emp" class="text-info">Nombre:</label><br>
                    <input type="text" name="nombre_emp" id="nombre-emp" value="{{$empleado->nombre_emp}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="apellido-emp" class="text-info">Apellido:</label><br>
                    <input type="text" name="apellido_emp" id="apellido_emp" value="{{$empleado->apellido_emp}}" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="cargo-emp" class="text-info">Cargo:</label><br>
                    <input type="text" name="cargo_emp" id="cargo-emp" value="{{$empleado->cargo_emp}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="telefono-emp" class="text-info">Telefono:</label><br>
                    <input type="text" name="telefono_emp" id="telefono_emp" value="{{$empleado->telefono_emp}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="id-departamento" class="text-info">Departamento:</label><br>
                    <input type="text" name="id_departamento" id="id-departamento" value="{{$empleado->id_departamento}}" class="form-control">
                </div>
    
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar Empleado</button>
        </div>
      </div>
     </form>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="delete{{$empleado->id_empleado}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Empleado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.destroy',$empleado->id_empleado)}}" method="post" entype="multipart/form-data">
        @csrf
        @method('DELETE')
            <div class="modal-body">

             <strong>  Estas seguro de eliminar a {{$empleado->nombre_emp}} {{$empleado->apellido_emp}}?</strong> 
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Eliminar Empleado</button>
        </div>
      </div>
     </form>
    </div>
  </div>