<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>read</title>
</head>
<body>
    <a href="/pages">back to berita list</a>
    <br>
    Title  : {{$page->title}} <br>
    Content : {{$page->content}} <br>
    Photo: <img src="{{asset($photo)}}" style="max-width: 250px">
</body>
</html>