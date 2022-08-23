@extends('admin.templates.master')
@section('content')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">DANH MỤC SẢN PHẨM</h5>
                        <button type="button" class="btn btn-info" style="background: #3A688C">
                            <a href="/admin/product-category/create" style="color: white">THÊM MỚI</a>
                        </button>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Total</th>
                                    <th>Description</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productCategory as $row)
                                    <tr align="center">
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->products ? $row->products->count() : 0 }}</td>
                                        <td>{{$row->description}}</td>
                                        <td>{{$row->created_at->format('d-m-Y')}}</td>
                                        <td>@if($row->status == 1)
                                                <span class="badge badge-success">Publish</span>
                                            @else <span class="badge badge-danger">Private</span>
                                            @endif
                                        </td>
                                        {{--                                        <td>--}}
                                        {{--                                            <button type="button" class="btn btn-info" style="background: #3A688C"><a--}}
                                        {{--                                                    href="/admin/product-category/edit/{{$row->id}}" style="color: white">Edit</a>--}}
                                        {{--                                            </button>--}}
                                        {{--                                            <form method="POST" action="/admin/product-category/delete/{{$row->id}}">--}}
                                        {{--                                                @method('PATCH')--}}
                                        {{--                                                @csrf--}}
                                        {{--                                                <button type="submit" class="btn btn-danger">Delete</button>--}}
                                        {{--                                            </form>--}}
                                        {{--                                        </td>--}}
                                        <td>
                                            <a href="/admin/product-category/edit/{{$row->id}}" class="btn btn-sm btn-success">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="/admin/product-category/delete/{{$row->id}}" class="btn btn-sm btn-danger btndelete">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Total</th>
                                    <th>Description</th>
                                    <th>Created Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                            <form method="POST" action="" id="form-delete">
                                @csrf @method('PATCH')
                            </form>
                            {{$productCategory->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('js')
    <script>
        $('.btndelete').click(function (ev){
            ev.preventDefault();
            var _href = $(this).attr('href');
            $('form#form-delete').attr('action',_href);
            if (confirm('Bạn có chắc chắn muốn xóa không ?')){
                $('form#form-delete').submit();
            }
        })
    </script>
@stop
