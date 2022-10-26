<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


@section('Cliente')
<h1>Cliente: {{$cliente->nombre}} </h1>
<table border=1px >
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>edad</th>
    </tr>
    <tr>
        <td>{{$cliente->id}}</td>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->apellido}}</td>
        <td>{{$cliente->edad}}</td>
        
    </tr>

</table>
@show