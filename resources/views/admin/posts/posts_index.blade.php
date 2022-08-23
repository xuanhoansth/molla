@extends('admin.templates.master')
@section('content')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">POSTS LIST</h5>
                        <button type="button" class="btn btn-info" style="background: #3A688C">
                            <a href="/admin/posts/create/" style="color: white">THÊM MỚI</a>
                        </button>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Posts Title</th>
                                    <th>Posts Category</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Created_At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td><a href="/admin/posts/{{$row->id}}">{{$row->posts_title}}</a></td>
                                        <td>@if($row->posts_category_id === 1) {{'Review'}}
                                            @elseif($row->posts_category_id === 2) {{'Làm đẹp'}}
                                            @else {{'Chăm sóc sức khỏe'}}
                                            @endif
                                        </td>
                                        <td>{{$row->description}}</td>
                                        <td><img height="200" width="300" src="{{asset('storage/' . $row->images)}}" alt=""></td>
                                        <td>{{$row->created_at}}</td>
                                        <td>@if($row->status === 1) {{'Mở'}}
                                            @else {{'Khóa'}}
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" style="background: #3A688C"><a
                                                    href="/admin/posts/edit/{{$row->id}}" style="color: white">Edit</a>
                                            </button>
                                            <form method="POST" action="/admin/posts/delete/{{$row->id}}">
                                                @method('PATCH')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Posts Title</th>
                                    <th>Posts Category</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Created_At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{$posts->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
