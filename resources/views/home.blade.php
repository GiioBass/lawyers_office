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
                    <th scope="col">Tipo Documento</th>
                    <th scope="col">#</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
