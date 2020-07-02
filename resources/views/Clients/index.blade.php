@extends('layout')

@section('content')
    <div class="content-table mt-5">
        <div class="text-center">
            <h1>Clientes</h1>
        </div>
        <div class="mt-3">
            <table class="table ">
                <thead class="thead-dark">
                <tr>

                    <th scope="col">Documento</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>


                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td>{{$client->document_type->name}}</td>
                        <td>{{$client->names}}</td>
                        <td>{{$client->last_name}}</td>
                        <td>
                            <a class="btn btn-dark" href="{{route('client.edit', $client->id)}}">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('client.destroy', $client->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-warning" type="submit" >Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
