<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Trang chủ</title>
    <style>
        a {
            text-decoration: none;
            color: #333;
        }
        .login {
            background-color: #ffb700;
        }
        .nav_thongbao>div>a>i {
            color: #ffb700;
            transition: .5s;

        }

        .nav_giohang>div>a>i {
            color: #ffb700;
            transition: .5s;
        }

        .nav_call>div>a>i {
            color: #ffb700;
            transition: .5s;

        }
        .nav_thongbao:hover>div>a>i {
            color: red;
            transition: .5s;

        }

        .nav_giohang:hover>div>a>i {
            color: red;
            transition: .5s;
        }

        .nav_call:hover>div>a>i {
            color: red;
            transition: .5s;

        }

        .logo {
            height: 70px;
            width: 200px;
        }

        .trangchu>a,
        .sanpham>a,
        .lienhe>a,
        .khuyenmai>a,
        .tintuc>a,
        .tuvan>a {
            color: #000;
            font-size: 20px;
            font-weight: 600;
        }

        .trangchu:hover>a,
        .sanpham:hover>a,
        .lienhe:hover>a,
        .khuyenmai:hover>a,
        .tintuc:hover>a,
        .tuvan:hover>a {
            color: red;
            border-bottom: 2px solid black;
            transition: .5s;
        }

        .navbar-expand-lg {
            background-color: #ffb700;
        }

        .navbar-collapse {
            margin-left: 20px;
        }

        .product {
            border: 1px solid #000;
        }

        .lienlac>p {
            display: none;

        }

        .lienlac:hover>p {
            display: block;
            cursor: pointer;
        }

        .navbarjs {
            background-color: #ffb700;
        }

        .menu>.cha {
            display: flex;
            justify-content: space-around;

        }

        .menu {
            display: block;
            transition: 1s;
        }

        #toggle {
            display: none;
            text-align: right;
            cursor: pointer;
        }

        @media (max-width: 576px) {

            .alltt {
                margin-top: 10px;
            }
        }

        @media (max-width: 768px) {

            .menu>.cha {
                flex-direction: column;

            }

            .menu>.cha>div {
                margin-top: 10px;
            }

            #toggle {
                display: block;

            }

            .mymaincontent {
                padding-top: 78px;
            }

            .hidden {
                display: none;

            }
        }
    </style>
    @yield('css')
</head>

<body>

@include('fe.layouts.header')
  
@yield('main')
    <!-- đây là phần footer  -->
@include('fe.layouts.footer')
    @yield('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var slideshow = document.getElementById('slideshow');
            var slides = slideshow.getElementsByClassName('slide');
            var currentIndex = 0;
            // Hiển thị slide đầu tiên
            slides[currentIndex].classList.add('active');

            // Hàm chuyển slide tiếp theo
            function nextSlide() {
                slides[currentIndex].classList.remove('active');
                currentIndex = (currentIndex + 1) % slides.length;
                slides[currentIndex].classList.add('active');
            }

            // Tự động chuyển slide sau mỗi 3 giây
            setInterval(nextSlide, 3000);
        });
    </script>
    <script>
        var button = document.querySelector("#toggle");
        var menu = document.querySelector(".menu");
        button.addEventListener("click", function () {
            menu.classList.toggle("hidden");
        });
    </script>
</body>

</html>