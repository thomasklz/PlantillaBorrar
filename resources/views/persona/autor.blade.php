@extends('plantilla.app')
@section('contenido')


<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{url('autor')}}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label>Nombre del autor</label>
            <input name="nombre" type="text" class="form-control" placeholder="ejemp. Juan">
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </form>
    </div>
    <!-- /.card -->


  </div>

</div>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Fixed Header Table</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr style="text-align: center">
              <th>Id</th>
              <th>Autor</th>
              <th>Accciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($autores as $autor)
      <tr style="text-align: center">
          <td>{{$autor->id}}</td>
          <td>{{$autor->nombre}}</td>
          <td class="project-actions text-center" >
                    <a class="btn btn-info btn-sm" href="{{url('autor', $autor->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <form action="{{url('autor', $autor->id)}}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-danger btn-sm"  type="submit">
                        <i class="fas fa-trash">
                        </i>
                      Eliminar</button>
                   </form>

                 
             
          </td>
      </tr>
      @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>




<div>
  <a href="{{url('libros')}}">Ir a Libro</a>
</div> 
@endsection