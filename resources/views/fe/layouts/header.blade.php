<header class="">
    <section class="login  text-dark ">
        <div class="container">
            <div class="row">
                @if (Auth::check())
                <div class="d-flex justify-content-end text-end">
                    <div class="mx-4">Xin chào - <b>{{Auth::User()->name}}</b></div>
                    <div class=""><a href="{{route('logoutAcc')}}">| Đăng xuất</a></div>                    
                </div>

                @else
                <div class="col-12"><a href="{{route('login')}}">Đăng nhập</a></div>
                @endif

            </div>
        </div>
    </section>
    {{-- đây là thanh tìm kiếm --}}
    <section class="myheader bg-dark py-2">
        <div class="container ">
            <div class="row">

                <!-- logo  -->
                <div class="col-sm-3  d-none d-sm-none d-md-block d-lg-block ">
                    <a href="">
                        <img src="//bizweb.dktcdn.net/100/493/970/themes/923518/assets/logo.png?1700473522200"
                            class="img-fluid logo " alt="...">
                    </a>
                </div>
                <!-- tìm kiếm  -->
                <div class="col-sm-5 d-flex align-items-center justify-content-center ">
                    <div class="input-group">
                        <input type="text" class="form-control " placeholder="Nhập sản phẩm bạn muốn tìm"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2"><i
                                class="fa-sharp fa-solid fa-magnifying-glass"></i></span>
                    </div>
                </div>
                <!-- bỏ trống  -->
                <div class="col-sm-1">

                </div>
                <!-- liên hệ, giỏ hàng, thông báo  -->
                <div class="col-sm-3 row alltt ">
                    <!-- liên hệ -->
                    <div class="col-4 d-flex align-items-center justify-content-center nav_call text-center">
                        <div class="lienlac">
                            <a href=""><i class="fa-sharp fa-solid fa-phone fs-4"></i></a>
                            <p><strong class="text-danger">0356031160</strong></p>
                        </div>
                    </div>
                    <!-- thông báo  -->
                    <div class="col-4 d-flex align-items-center justify-content-center nav_thongbao">
                        <div type="button" class="position-relative">
                            <a href=""><i class="fa-sharp fa-regular fa-bell fs-4 "></i></a>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                0
                                <!-- <span class="visually-hidden">unread messages</span> -->
                            </span>
                        </div>

                    </div>
                    <!-- giỏ hàng  -->
                    <div class="col-4 d-flex align-items-center justify-content-center nav_giohang">
                        <div type="button" class="position-relative">
                            <a href="{{route('cart.index')}}"> <i class='bx bxs-cart-alt fs-3'></i></a>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{$cart->totalQuantity()}}

                            </span>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- đây là menu --}}
    <section class="py-3 navbarjs">

        <div class="container navd">
            <div id="toggle">
                <i class="fa-solid fa-bars fs-2"></i>
            </div>
            <nav class="menu">
                <div class="cha">
                    <div class="trangchu"><a href="{{route('index')}}">Trang
                            chủ</a></div>
                    <div class="sanpham"><a href="">Sản
                            phẩm</a></div>
                    <div class="khuyenmai"><a href="">Khuyến
                            mãi</a></div>
                    <div class="tintuc"><a href="">Tin
                            tức</a></div>
                    <div class="lienhe"><a href="">Liên
                            hệ</a></div>
                    <div class="tuvan"><a href="">Tư vấn</a>
                    </div>
                </div>
            </nav>


        </div>
    </section>
</header>
