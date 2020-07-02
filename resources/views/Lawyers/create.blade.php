@extends('layout')

@section('content')
    <div class="mt-3 w-75 h-100 ml-5 " >
        <div class="text-center mt-5">
            <h1>Crear Abogado</h1>
        </div>
        <div class="mt-5">
            <form action="{{route('lawyer.store')}}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Documento N°</label>
                    <input type="text" class="form-control" name="id" value="{{old('id')}}"
                           aria-describedby="emailHelp">
                </div>
                <div>
                    <select class="list-select" name="document_type_id" id="">
                        @foreach ($docTypes as $docType)
                            <option value="{{$docType->id}}">
                                {{$docType->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" name="names" value="{{old('names')}}" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellidos</label>
                    <input type="text" class="form-control" name="last_name" value="{{old('last_name ')}}" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
