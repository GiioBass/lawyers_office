@extends('layout')

@section('content')
    <div class="mt-3 w-75 h-100 ml-5 " >
        <div class="text-center mt-5">
            <h1>Crear Clientes</h1>
        </div>
        <div class="mt-5">
            <form action="{{route('affair.store')}}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">N° Caso</label>
                    <input type="text" class="form-control" name="id" value="{{old('id')}}"
                           aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Descripción</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}"
                           aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Costo</label>
                    <input type="number" class="form-control" name="cost" value="{{old('cost')}}"
                           aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Fecha Inicio</label>
                    <input type="date" class="form-control" name="start" value="{{old('start')}}"
                           aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Fecha Finalización</label>
                    <input type="date" class="form-control" name="finish" value="{{old('finish')}}"
                           aria-describedby="emailHelp">
                </div>
                <div class="mt-3">
                    <label for="">Cliente</label>
                    <select class="list-select " name="client_id" id="">
                        @foreach ($client as $clients)
                            <option value="{{$clients->id}}">
                                {{$clients->id . ' '. $clients->names . ' ' . $clients->last_name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="">Estado</label>
                    <select class="list-select" name="status_id" id="">
                        @foreach ($status as $statuses)
                            <option value="{{$statuses->id}}">
                                {{$statuses->name}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
