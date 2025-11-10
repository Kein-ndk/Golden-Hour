@extends('admin.admin')

@section('title', 'Order')

@section('main_content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Tổng tiền</th>
        </tr>
        </thead>
        <tbody>
            <?php $count = 0 ?>
            @foreach($titles as $title)
                <tr>
                    <th scope="row">{{++$count}}</th>
                    <td>{{$title -> customer }}</td>
                    <td>{{$title -> name}}</td>
                    <td>{{$title -> quantity}}</td>
                    <td>{{$title -> total_price}}</td>
                </tr>
            @endforeach

        </tbody>

    </table>


@endsection()


