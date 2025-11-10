<div class="container-fluid fixed-top">
    <div class="row">
        <div class="top-bar">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" placeholder="Nhập tên sản phẩm cần tìm" aria-label="Search" />
                        </div>
                    </div>
                    <div class="col-4 icon_topbar">
                        <div class="user">
                            <a href="{{route('login.form')}}"><i class="fas fa-user"></i></a>
                        </div>
                        <div class="cart">
                            <a href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col align-self-center bg-white">
            <a href="{{route('home.index')}}"><img src="{{asset('img/logo3.png')}}" alt="logo Golden_time" class="logo rounded mx-auto d-block" style="width: 14%;"></a>
        </div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('home.index')}}" class="nav-link active" aria-current="page">Trang chủ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Thương hiệu</a>
                            <ul class="dropdown-menu">
{{--                                @foreach($category as $item)--}}
{{--                                <li class="dropdown-item"><a class="nav-link" href="{{route('showCategory',['slug'=>$item->slug])}}">{{$item->name}}</a></li>--}}
{{--                                @endforeach--}}
                                <li class="dropdown-item"><a class="nav-link" href="http://127.0.0.1:8000/category/dong-ho-rolex">Rolex</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="http://127.0.0.1:8000/category/dong-ho-hublot">Hublot</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="">Longines</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="">Breitling</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="">Tudor</a></li>
                            </ul>

                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Đồng hồ nam</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Đồng hồ nữ</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Sale</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Về chúng tôi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
