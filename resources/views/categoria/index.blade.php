@extends('welcome')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Nuevo
</button>


<div
    class="table-responsive"
>
    <br>
    <table
        class="table table-striped"
    >
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @php
                $i=1;
            @endphp
            @foreach($categorias as $categoria)
            <tr class="">
                <td scope="row"> {{$i++}} </td>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$categoria->id}}">
                    Editar
                </button>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$categoria->id}}">
                    Eliminar
                </button>
                </td>
            </tr>
            @include('categoria.info')
            @endforeach
        </tbody>
    </table>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

@include('categoria.create')


@endsection