@extends('layout')

@section('content')
    <div class="content-table mt-5">
        <div class="text-center">
            <h1>Casos</h1>
        </div>
        <div class="mt-3">
            <table class="table ">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">N° Caso</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Costo $COP</th>
                    <th scope="col">Inicio</th>
                    <th scope="col">Última Actualización</th>
                    <th scope="col">Finalización</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Nombre Cliente</th>
                    <th scope="col">Nombre Abogado</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Archivar</th>
                </thead>
                <tbody>
                @foreach($affairs as $affair)
                    <tr>
                        <th scope="row">{{$affair->id}}</th>
                        <td>{{$affair->name}}</td>
                        <td>{{$affair->cost}}</td>
                        <td>{{$affair->start}}</td>
                        <td>{{$affair->update_at}}</td>
                        <td>{{$affair->finish}}</td>
                        <td>{{$affair->status->name}}</td>
                        <td>{{$affair->client->names . ' ' . $affair->client->last_name }}</td>
                        <td>abogado</td>
                        <td>
                            {{--                            <a class="btn btn-dark" href="{{route('client.edit', $client->id)}}">Editar</a>--}}
                        </td>
                        <td>
                            <form action="{{route('affair.destroy', $affair->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-warning" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
