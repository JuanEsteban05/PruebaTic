@extends('homed')

@section('content1')

<div
    class="row"
>
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <br>
    <h2>Departamentos</h2>
    <br>
    
    <a
    href="{{ url('/home') }}"
>
    <h3>Empleados</h3>
</a>
    <br>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create1">
    Nuevo Departamento
  </button>
  
    <div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departamentos as $departamento)
            
            <tr class="">
                <td> {{$departamento->id_departamento}}</td>
                <td> {{$departamento->nombre_dep}}</td>
                <td> {{$departamento->descripcion_dep}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1{{$departamento->id_departamento}}">
                        Editar
                      </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete1{{$departamento->id_departamento}}">
                        Eliminar
                    </button>
                </td>
            </tr>
            @include('departamento.modal-info-d')
            @endforeach
        </tbody>
    </table>
</div>

@include('departamento.modal-create-d')
</div>
    <div class="col-md-2"></div>
</div>

    








@endsection