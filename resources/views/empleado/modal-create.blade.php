
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Empleado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.store')}}" method="post" entype="multipart/form-data">
        @csrf
            <div class="modal-body">

                <div class="form-group">
                    <label for="nombre-emp" class="text-info">Nombre:</label><br>
                    <input type="text" name="nombre_emp" id="nombre-emp" class="form-control">
                </div>

                <div class="form-group">
                    <label for="apellido-emp" class="text-info">Apellido:</label><br>
                    <input type="text" name="apellido_emp" id="apellido_emp" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="cargo-emp" class="text-info">Cargo:</label><br>
                    <input type="text" name="cargo_emp" id="cargo-emp" class="form-control">
                </div>

                <div class="form-group">
                    <label for="telefono-emp" class="text-info">Telefono:</label><br>
                    <input type="text" name="telefono_emp" id="telefono_emp" class="form-control">
                </div>

                <div class="form-group">
                    <label for="id-departamento" class="text-info">Departamento:</label><br>
                    <input type="text" name="id_departamento" id="id-departamento" class="form-control">
                </div>
    
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar Empleado</button>
        </div>
      </div>
     </form>
    </div>
  </div>