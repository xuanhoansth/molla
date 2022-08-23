@extends('admin.templates.master')
@section('content')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">KHÁCH HÀNG LIÊN HỆ</h5>
                        <button type="button" class="btn btn-info" style="background: #3A688C">
                            <a href="/admin/contacts/create" style="color: white">THÊM MỚI</a>
                        </button>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Contact Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Subject</th>
                                    <th>Content</th>
                                    <th>Ghi chú</th>
                                    <th>Created_At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contact as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->phone_number}}</td>
                                        <td>{{$row->subject}}</td>
                                        <td>{{$row->content}}</td>
                                        <td>{{$row->note}}</td>
                                        <td>{{$row->created_at}}</td>
                                        <td>@if($row->status === 1) {{'Đã tư vấn'}}
                                            @else {{'Chưa tư vấn'}}
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" style="background: #3A688C"><a
                                                    href="/admin/contacts/edit/{{$row->id}}" style="color: white">Edit</a>
                                            </button>
                                            <form method="POST" action="/admin/contacts/delete/{{$row->id}}">
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
                                    <th>Contact Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Subject</th>
                                    <th>Content</th>
                                    <th>Ghi chú</th>
                                    <th>Created_At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{$contact->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
