@extends('admin.templates.master')
@section('content')
    <form method="post" enctype="multipart/form-data" action="/admin/products/update/{{$products->id }}">
        @method('PATCH')
        @csrf
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Thêm thông tin sản phẩm</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Loại sản phẩm</label>
                                        <div class="col-sm-9">
                                            <select name="category_id" class="select2 form-control custom-select"
                                                    style="width: 100%; height:36px;">
                                                <option>---Chọn---</option>
                                                <option value="1">Sức khỏe</option>
                                                <option value="2">Xinh đẹp</option>
                                                <option value="3">Sành điệu</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Tên sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name"
                                                   value="{{$products->name}}" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Mô tả tóm tắt</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="information"
                                                   value="{{$products->information}}" name="information">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Giới thiệu chi tiết về sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="description"
                                                   value="{{$products->description}}" name="description">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Đơn giá</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="price" value="{{$products->price}}" name="price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                        <div class="col-sm-9">
                                            <select name="status" class="select2 form-control custom-select"
                                                    style="width: 100%; height:36px;">
                                                <option>---Chọn---</option>
                                                <option value="1">Mở</option>
                                                <option value="2">Khóa</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
                                        <button class="btn btn-danger" ><a href="/admin/products/" style="color: #f8f8f8">Hủy bỏ</a></button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
