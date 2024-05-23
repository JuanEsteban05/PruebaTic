@extends('home')

@section('content')

<div
    class="row"
>
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <br>
    <h2>Empledos</h2>
    <br>
    
    <a
    href="{{ url('/homed') }}"
>
    <h3>Departamentos</h3>
</a>
    <br>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
    Nuevo Empleado
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
                <th scope="col">APELLIDO</th>
                <th scope="col">CARGO</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">DEPARTAMENTO</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            
            <tr class="">
                <td> {{$empleado->id_empleado}}</td>
                <td> {{$empleado->nombre_emp}}</td>
                <td> {{$empleado->apellido_emp}}</td>
                <td> {{$empleado->cargo_emp}}</td>
                <td> {{$empleado->telefono_emp}}</td>
                <td> {{$empleado->id_departamento}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$empleado->id_empleado}}">
                        Editar
                      </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$empleado->id_empleado}}">
                        Eliminar
                    </button>
                </td>
            </tr>
            @include('empleado.modal-info')
            @endforeach
        </tbody>
    </table>
</div>

@include('empleado.modal-create')
</div>
    <div class="col-md-2"></div>
</div>

    








@endsection