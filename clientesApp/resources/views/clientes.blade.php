<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <table>
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>edad</th>
        </tr>
        <tr>
    @foreach($clientes as $cliente)
        <td><li> <a href="{{route('cliente.one',$cliente->id)}}">{{$cliente->nombre}}</a></li>
        <td>{{$cliente->apellido}} </td>
        <td>{{$cliente->edad}}</td>
    </tr>
        @endforeach
    </table>
</body>
</html>