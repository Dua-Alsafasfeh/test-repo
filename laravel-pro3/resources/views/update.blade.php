<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update data</title>
</head>
<body>
    <form action="{{url('update-data/id/'.$editor->id)}}" method="post">
        @csrf
        @method('put')
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{$editor->title}}">
        <label for="body">body</label>
        <input type="text" id="body" name="body" value="{{$editor->body}}">
        <button type="submit">update</button>
    </form>
</body>
</html>