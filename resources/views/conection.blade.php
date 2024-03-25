<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='Post' action="{{route('con')}}">
    <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" name="pass" id="pass">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
    </form>
</body>
</html>