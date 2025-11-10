@extends('admin.admin')

@section('title', 'Edit Product')

@section('main_content_product')
    <form action="{{route('product.update', ['id' => $id])}}" name="frm_create_student" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" required class="form-control" name="name" id="name" placeholder="" value="{{$product->name}}">
            </div>

            <div class="form-group">
                <label for="price">Giá</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="100.000.000" value="{{$product->price}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="1">
                        Đồng Hồ Mới
                    </option>

                    <option value="2">
                        Đồng Hồ Cũ
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Mô tả</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="" value="{{$product->description}}">
            </div>

            <label for="gender">Giới tính</label>
            <select class="form-control" id="gender" name="gender">
                <option value="1">
                    Đồng Hồ Nam
                </option>

                <option value="0">
                    Đồng Hồ Nữ
                </option>
            </select>

            <div class="form-group">
                <label for="quantity">Số Lượng</label>
                <input type="number" class="form-control" name="quantity" id="quantity" value="{{$product->quantity}}">
            </div>

            <div class="form-group">
                <label for="sale">Sale</label>
                <input type="text" class="form-control" name="sale" id="sale" value="{{$product->sale}}">
            </div>


            @yield('main_content_product')


            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="category" name="category">
                    @foreach($category as $brand)
                        <option value="{{$brand -> id}}">
                            {{$brand -> brand_name}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="card-action">
            <button class="btn btn-success" name="update_student" type="update">Update</button>
            <button class="btn btn-danger" type="reset">Cancel</button>
        </div>
    </form>
@endsection()
