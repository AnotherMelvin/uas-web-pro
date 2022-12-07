<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create post</title>
</head>
<body>
    <h1>Berita Baru</h1>
    <form action="/pages" method="post" enctype="multipart/form-data">
        @csrf
        Title : <input type="text" name="title_berita"><br>
        Content : <input type="text" name="konten_berita"><br>
        Photo: <input type="file" name="photo">
        <button type="submit">Create</button>
    </form>
</body>
</html>