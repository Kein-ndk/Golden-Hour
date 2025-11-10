
<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
@include('layout.header')

<div class="container-fuild" style="margin-top: 170px">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container">
    @include('layout.MenWatch')
</div>


<div id="banner2"></div>

<!-- ĐỒNG HỒ NỮ -->


@include('layout.WomenWatch')

<div class="container-fuild gap"></div>


<div id="banner3" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./img/slide1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./img/slide2.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>


<!-- ĐỒNG HỒ ĐÔI -->

<div class="container">
@include('layout.CoupleWatch')
</div>

<!-- ACCESSORY -->

<div class="container">
@include('layout.accessory')
</div>

<div id="more-infomation">
    <div class="title text-center">
        <h1>Thông tin hữu ích</h1>
        <div class="title_border"></div>
    </div>
</div>


<div class="container">
@include('layout.blog')
</div>

<div class="container-fuild gap"></div>


@include('layout.footer')

</body>
</html>
@include('layout.script')
