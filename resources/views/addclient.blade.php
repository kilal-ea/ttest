<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>hello {{$user->nom}} {{$user->prenom}}</h1>
    <form method='Post' action="{{ route('addc') }}">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom">
        </div>
        <div class="form-group">
            <label for="pre">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="prenom">
        </div>
        <div class="form-group">
            <label for="num">Telephone</label>
            <input type="number" class="form-control" name="telephone" id="telephone">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
    </form>
</body>
</html>
