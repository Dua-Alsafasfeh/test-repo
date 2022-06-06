<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session('status'))
    <p>{{session('status')}}</p>       
    @endif
    <a href="{{url('add-data')}}">Add Data</a>
    @foreach ($data as $item)
        <ul>
            <li>{{$item->id}}</li>
            <li>{{$item->title}}</li>
            <li>{{$item->body}}</li>
            <li><a href="{{ url('delete-data/id/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a></li>
            <li><a href="{{ url('edit-data/id/'.$item->id) }}" class="btn btn-danger btn-sm">Edit</a></li>

        </ul>
    @endforeach
    <td>
        
    </td>
</body>
</html>