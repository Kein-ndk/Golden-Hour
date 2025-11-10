<!DOCTYPE html>
<html lang="en">
@include('admin.include.head')

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{route('home.index')}}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Trang chủ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.admin')}}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.pages.order')}}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Blogs</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">

                            <li class="w-100">
                                <a href="{{route('admin.pages.ListProducts')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">List Product</span></a>
                            </li>

                            <li class="w-100">
                                <a href="{{route('admin.pages.addProduct')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Add Product</span></a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Đăng xuất</span> </a>
                    </li>
                </ul>
                <hr>
{{--                <div class="dropdown pb-4">--}}
{{--                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">--}}
{{--                        <span class="d-none d-sm-inline mx-1">loser</span>--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">--}}
{{--                        <li><a class="dropdown-item" href="#">New project...</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Settings</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Profile</a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="#">Sign out</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="col py-3">
            <h3>Chào mừng đến với trang quản trị Golden Hour</h3>
{{--            <div class="container">--}}
{{--                <div class="container-fluid p-0">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-6 col-xxl-5 d-flex">--}}
{{--                            <div class="w-100">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col mt-0">--}}
{{--                                                        <h5 class="card-title">Sales</h5>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="col-auto">--}}
{{--                                                        <div class="stat text-primary">--}}
{{--                                                            <i class="align-middle" data-feather="truck"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <h1 class="mt-1 mb-3">2.382</h1>--}}
{{--                                                <div class="mb-0">--}}
{{--                                                    <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>--}}
{{--                                                    <span class="text-muted">Since last week</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col mt-0">--}}
{{--                                                        <h5 class="card-title">Visitors</h5>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="col-auto">--}}
{{--                                                        <div class="stat text-primary">--}}
{{--                                                            <i class="align-middle" data-feather="users"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <h1 class="mt-1 mb-3">14.212</h1>--}}
{{--                                                <div class="mb-0">--}}
{{--                                                    <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>--}}
{{--                                                    <span class="text-muted">Since last week</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col mt-0">--}}
{{--                                                        <h5 class="card-title">Earnings</h5>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="col-auto">--}}
{{--                                                        <div class="stat text-primary">--}}
{{--                                                            <i class="align-middle" data-feather="dollar-sign"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <h1 class="mt-1 mb-3">$21.300</h1>--}}
{{--                                                <div class="mb-0">--}}
{{--                                                    <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>--}}
{{--                                                    <span class="text-muted">Since last week</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col mt-0">--}}
{{--                                                        <h5 class="card-title">Orders</h5>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="col-auto">--}}
{{--                                                        <div class="stat text-primary">--}}
{{--                                                            <i class="align-middle" data-feather="shopping-cart"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <h1 class="mt-1 mb-3">64</h1>--}}
{{--                                                <div class="mb-0">--}}
{{--                                                    <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>--}}
{{--                                                    <span class="text-muted">Since last week</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-xl-6 col-xxl-7">--}}
{{--                            <div class="card flex-fill w-100">--}}
{{--                                <div class="card-header">--}}

{{--                                    <h5 class="card-title mb-0">Recent Movement</h5>--}}
{{--                                </div>--}}
{{--                                <div class="card-body py-3">--}}
{{--                                    <div class="chart chart-sm">--}}
{{--                                        <canvas id="chartjs-dashboard-line"></canvas>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">--}}
{{--                            <div class="card flex-fill w-100">--}}
{{--                                <div class="card-header">--}}

{{--                                    <h5 class="card-title mb-0">Browser Usage</h5>--}}
{{--                                </div>--}}
{{--                                <div class="card-body d-flex">--}}
{{--                                    <div class="align-self-center w-100">--}}
{{--                                        <div class="py-3">--}}
{{--                                            <div class="chart chart-xs">--}}
{{--                                                <canvas id="chartjs-dashboard-pie"></canvas>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <table class="table mb-0">--}}
{{--                                            <tbody>--}}
{{--                                            <tr>--}}
{{--                                                <td>Chrome</td>--}}
{{--                                                <td class="text-end">4306</td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>Firefox</td>--}}
{{--                                                <td class="text-end">3801</td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>IE</td>--}}
{{--                                                <td class="text-end">1689</td>--}}
{{--                                            </tr>--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">--}}
{{--                            <div class="card flex-fill w-100">--}}
{{--                                <div class="card-header">--}}

{{--                                    <h5 class="card-title mb-0">Real-Time</h5>--}}
{{--                                </div>--}}
{{--                                <div class="card-body px-4">--}}
{{--                                    <div id="world_map" style="height:350px;"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">--}}
{{--                            <div class="card flex-fill">--}}
{{--                                <div class="card-header">--}}

{{--                                    <h5 class="card-title mb-0">Calendar</h5>--}}
{{--                                </div>--}}
{{--                                <div class="card-body d-flex">--}}
{{--                                    <div class="align-self-center w-100">--}}
{{--                                        <div class="chart">--}}
{{--                                            <div id="datetimepicker-dashboard"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-12 col-lg-8 col-xxl-9 d-flex">--}}
{{--                            <div class="card flex-fill">--}}
{{--                                <div class="card-header">--}}

{{--                                    <h5 class="card-title mb-0">Latest Projects</h5>--}}
{{--                                </div>--}}
{{--                                <table class="table table-hover my-0">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>Name</th>--}}
{{--                                        <th class="d-none d-xl-table-cell">Start Date</th>--}}
{{--                                        <th class="d-none d-xl-table-cell">End Date</th>--}}
{{--                                        <th>Status</th>--}}
{{--                                        <th class="d-none d-md-table-cell">Assignee</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>Project Apollo</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">01/01/2023</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">31/06/2023</td>--}}
{{--                                        <td><span class="badge bg-success">Done</span></td>--}}
{{--                                        <td class="d-none d-md-table-cell">Vanessa Tucker</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Project Fireball</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">01/01/2023</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">31/06/2023</td>--}}
{{--                                        <td><span class="badge bg-danger">Cancelled</span></td>--}}
{{--                                        <td class="d-none d-md-table-cell">William Harris</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Project Hades</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">01/01/2023</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">31/06/2023</td>--}}
{{--                                        <td><span class="badge bg-success">Done</span></td>--}}
{{--                                        <td class="d-none d-md-table-cell">Sharon Lessman</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Project Nitro</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">01/01/2023</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">31/06/2023</td>--}}
{{--                                        <td><span class="badge bg-warning">In progress</span></td>--}}
{{--                                        <td class="d-none d-md-table-cell">Vanessa Tucker</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Project Phoenix</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">01/01/2023</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">31/06/2023</td>--}}
{{--                                        <td><span class="badge bg-success">Done</span></td>--}}
{{--                                        <td class="d-none d-md-table-cell">William Harris</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Project X</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">01/01/2023</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">31/06/2023</td>--}}
{{--                                        <td><span class="badge bg-success">Done</span></td>--}}
{{--                                        <td class="d-none d-md-table-cell">Sharon Lessman</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Project Romeo</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">01/01/2023</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">31/06/2023</td>--}}
{{--                                        <td><span class="badge bg-success">Done</span></td>--}}
{{--                                        <td class="d-none d-md-table-cell">Christina Mason</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Project Wombat</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">01/01/2023</td>--}}
{{--                                        <td class="d-none d-xl-table-cell">31/06/2023</td>--}}
{{--                                        <td><span class="badge bg-warning">In progress</span></td>--}}
{{--                                        <td class="d-none d-md-table-cell">William Harris</td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-lg-4 col-xxl-3 d-flex">--}}
{{--                            <div class="card flex-fill w-100">--}}
{{--                                <div class="card-header">--}}

{{--                                    <h5 class="card-title mb-0">Monthly Sales</h5>--}}
{{--                                </div>--}}
{{--                                <div class="card-body d-flex w-100">--}}
{{--                                    <div class="align-self-center chart chart-lg">--}}
{{--                                        <canvas id="chartjs-dashboard-bar"></canvas>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <p class="lead">--}}
{{--                An example 2-level sidebar with collasible menu items. The menu functions like an "accordion" where only a single--}}
{{--                menu is be open at a time. While the sidebar itself is not toggle-able, it does responsively shrink in width on smaller screens.</p>--}}
            @yield('main_content_product')

            @yield('list_product')

            @yield('main_content')

{{--            <ul class="list-unstyled">--}}
{{--                <li>--}}
{{--                    <h5>Responsive</h5> shrinks in width, hides text labels and collapses to icons only on mobile--}}
{{--                </li>--}}
{{--            </ul>--}}
        </div>
    </div>
</div>
</html>
@include('admin.include.script')
