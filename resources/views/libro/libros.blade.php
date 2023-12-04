@extends('plantilla.app')

@section('contenido')
<form action="{{url('libros')}}" method="post">
    @csrf
    <div>
     <label for="">Autor</label>

      <select name="autor">
        @foreach ($autores as $item)
            <option value="{{$item->id}}">{{$item->nombre}}</option>
        @endforeach
      </select>
    </div>
    <div>
        <label for="">Nombre del libro</label>
        <input type="text" name="nombre">
    </div>
    <div>
        <label for="">Año de publicación</label>
        <input type="text" name="year">
    </div>
    <div>
        <button type="submit">Registrar</button>
    </div>
 </form>


@endsection

     


