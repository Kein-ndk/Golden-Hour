@extends('admin.admin')

@section('title', 'ListProducts')

@section('list_product')

    @if(session('alert'))
        <section class='alert alert-success'>{{session('alert')}}</section>
    @endif

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Tên Sản phẩm</th>
            <th scope="col">Hãng</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá tiền</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody

        <?php $count = 0 ?>
        @foreach($lists as $list)
            <tr>
                <th scope="row">{{++$count}}</th>
                <td>
                    <img src="{{ asset($list -> path) }}" alt="{{$list -> nameimage }}" width="80" height="80">
                    </td>
                <td>{{$list -> name}}</td>
                <td>{{$list -> namebrand}}</td>
                <td>{{$list -> quantity}}</td>
                <td>{{$list -> price}}</td>
                <td>{{$list -> gender}}</td>
                <td>
                    <a href="{{route('product.edit', ['id' => $list->id])}}" type="submit" name="submit_edit_product" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{route('product.delete', ['id' => $list->id])}}" method="POST">
                        @csrf
                        <button type="submit" name="submit_delete_product" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>


@endsection()
