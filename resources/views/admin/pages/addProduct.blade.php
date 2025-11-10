@extends('admin.admin')

@section('title', 'Add Product')

@section('main_content_product')
    <form action="{{route('product.store')}}" name="frm_create_student" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" required class="form-control" name="name" id="name" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" required class="form-control" name="price" id="price" placeholder="100.000.000">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" required id="status" name="status">
                        <option value="1">
                            Đồng Hồ Mới
                        </option>
                        <option value="2">
                            Đồng Hồ Cũ
                        </option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" required name="description" id="description" placeholder="">
            </div>

            <label for="gender">Gender</label>
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
                <input type="number" required class="form-control" name="quantity" id="quantity" placeholder="">
            </div>

            <div class="form-group">
                <label for="sale">Sale</label>
                <input type="number" required class="form-control" name="sale" id="sale" placeholder="">
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
        <div class="form-group">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Tên Ảnh</span>
                <input type="text" required class="form-control" name="images-name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div>
                <label for="formFileLg" class="form-label">Chọn ảnh</label>
                <input class="form-control form-control-lg" required name="formFileLg" id="formFileLg" type="file">
            </div>
        </div>

        <div class="card-action">
            <button class="btn btn-success" name="create_student" type="submit">Create</button>
            <button class="btn btn-danger" type="reset">Cancel</button>
        </div>
    </form>

@endsection()
