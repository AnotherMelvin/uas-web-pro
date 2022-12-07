<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>read</title>
</head>
<body>
    <a href="/pages/home">back to home</a>
    <br>
    @foreach ($pages as $page)
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Option</th>
        </tr>
        <tr>
            <td>{{$page->title}}</td>
            <td>{{$page->konten}}</td>
            <td><img src="{{asset($photo)}}" style="max-width: 250px"></td>
            <td>
                <a href="/pages/edit/{{$page->id}}">Edit</a>
                <form action="/pages/{{$page->id}}" method="post">
                    @method('DELETE')
                    @csrf
                <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</body>
</html>