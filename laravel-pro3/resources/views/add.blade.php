<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>
<body>
    <form action="{{ url('add-data') }}" method="post">
        @csrf
        title<input type="text" name="title">
        body<input type="text" name="body">
        <button type="submit">Add</button>
    </form>
</body>
</html>