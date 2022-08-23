<h1>{{ $pageName }}</h1>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Email</th>
        <th>Tools</th>
    </tr>
    </thead>
    <tbody>
    @foreach($news as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td><a href="/admin/news/{{$row->id}}">{{$row->title}}</a></td>
            <td>{{$row->email}}</td>
            <td><a href="/admin/news/edit/{{$row->id}}">Edit</a> |
                <form method="POST" action="/admin/news/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                    @method('PATCH')
                    @csrf
                    <button type="submit">Delete</button>
                </form></td>
        </tr>
    @endforeach
    </tbody>
</table>
