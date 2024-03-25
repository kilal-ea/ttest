<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>nom</td>
            <td>price</td>
        </tr>
    @foreach($checkedProducts as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->nom}}</td>
            <td>{{$c->prix}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>