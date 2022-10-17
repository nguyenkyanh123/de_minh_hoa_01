<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h2>edit user</h2>
    <form action="/student/update/{{ $students->id }}" method="post">
        @csrf
        @method('PUT')
        <label for="Name">
            Name:
            <input type="text" name="fullname" value="{{ $students->fullname }}">
        </label><br><br>
        <label for="Email">
            Address:
            <input type="text" name="address" value="{{ $students->address }}">
        </label><br><br>
        <label for="Password">
            birthday:
            <input type="date" name="birthday" value="{{$students->birthday}}">
        </label><br><br>
        <button type="submit">Edit user</button>
    </form>

</body>
</html>
