<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Berita</h1>
    <form action="/pages/{{$page->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    Title   : <input type="text" name="title_berita" value="{{$page->title}}"><br>
    Content : <input type="text" name="konten_berita" value="{{$page->content}}"><br>
    Photo: <input type="file" name="photo">
    <button type="submit">Submit</button>
    </form>
</body>
</html>