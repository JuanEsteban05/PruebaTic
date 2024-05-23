
  <!-- Modal -->
  <div class="modal fade" id="create1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Departamento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('homed.store')}}" method="post" entype="multipart/form-data">
          @csrf
            <div class="modal-body">

                <div class="form-group">
                    <label for="nombre-dep" class="text-info">Nombre:</label><br>
                    <input type="text" name="nombre_dep" id="nombre-dep" class="form-control">
                </div>

                <div class="form-group">
                    <label for="descripcion-dep" class="text-info">Descripcion:</label><br>
                    <input type="text" name="descripcion_dep" id="descripcion-dep" class="form-control">
                </div>
    
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar Departamento</button>
        </div>
      </div>
     </form>
    </div>
  </div>