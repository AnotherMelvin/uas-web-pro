<!DOCTYPE html>
<html lang="en">
<body>
    <a href="/halaman/main">back to home</a>
    <br>
    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Option</th>
        </tr>
        @foreach ($pages as $page)
        <tr>
            <td>{{$page->title}}</td>
            <td>{{$page->content}}</td>
            <td>
                <a href="/pages/{{$page->id}}">SHOW</a>
                <a href="/pages/{{$page->id}}/edit">edit</a>
                <form action="/pages/{{$page->id}}" method="post">
                    @method('DELETE')
                    @csrf
                <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
</body>

</html>
