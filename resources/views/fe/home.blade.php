@extends('fe.index')
@section('css')
    <style>
        .nameproduct {
            color: black;
            text-decoration: none;
            font-size: 15px;
        }
        .imgproduct {
            width: 100%;
            height: 160px;
        }
        .slider {
  margin-top: 20px;
  height: 350px;
}
.slider-content {
  display: flex;
  justify-content: space-between;
}
.slider-content-left {
  width: 65%;
}
.slider-content-left-top {
  position: relative;
  height: 300px;
  width: 100%;
}
.slider-content-left-top img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.slider-content-left-bottom {
  display: flex;
  justify-content: space-between;
  border: 2px solid #ddd;
  border-top: none;
  height: 50px;
  /* line-height: 30px; */
}
.slider-content-left-bottom li {
  border-top: 4px solid #fff ;
  width: 20%;
  text-align:center;
  cursor: pointer;
  padding: 6px 0;
  height: 100%;
  line-height: 38px;
  position: relative;
}
.slider-content-left-bottom li::before {
  width: 1px;
  position: absolute;
  display: block;
  content: "";
  height: 70%;
  background-color: #ddd;
  right: 0;
}
.slider-content-left-bottom li.active {
  border-top: 4px solid #f8ba2b ;
  font-weight: bold;
}

.slider-content-right {
  width: 35%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  padding: 0 30px;
  
}
.slider-content-right li {
  width: 50%;
  height: 50%; 
  text-align: center;
  margin-bottom: 3px;
}
.slider-content-right li img {
  border: 1px solid #333;
  width: 160px;
  height: 170px; 
}
.slider-content-left-top-btn{
  position: absolute;
  top: 50%;
  display: flex;
  justify-content: space-between;
  width: 100%;

}
.slider-content-left-top-btn i{
  color: #333;
  cursor: pointer;
  font-size: 35px;
  height: 50px;
  width: 30px;
  background-color: #ddd;
  display: flex;
  justify-content: center;
  align-items: center;
  transform: translateY(-50%);
  border-radius: 5px;
  opacity: 0;
  transition: .5s;
}
/* .slider-content-left-top:hover i {
  opacity: 1;
} */
/*----------------------------------js slider--------------*/
.slider-content-left-top img {
position: absolute;
}
.slider-content-left-top a:nth-child(2) img {
transform: translateX(100%);
}

.slider-content-left-top a:nth-child(3) img {
  transform: translateX(200%);
}
.slider-content-left-top a:nth-child(4) img {
transform: translateX(300%);
}
.slider-content-left-top a:nth-child(5) img {
transform: translateX(400%);
}
.slider-content-left-top-container  {
position: relative;
overflow: hidden;
}
.slider-content-left-top-container:hover i {
  opacity: 1;
}
.slider-content-left-top {
  transition: 0.5s;
}
    </style>
@endsection
@section('main')
<main class="container">
    <a href="#"><img class="avatar" src="https://cdn.tgdd.vn/2023/11/banner/Laptop-HP-720-220-720x220-1.png"
            alt=""></a>
    <section class="slider">
        <div class="container container3">

            <div class="slider-content">

                <div class="slider-content-left">
                    <div class="slider-content-left-top-container">
                        <div class="slider-content-left-top">
                            <a href="#"><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/12/banner/720x220-min-720x220-1.png" alt=""></a>
                            <a href="#"><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/11/banner/IP15-720-220-720x220-3.png" alt=""></a>
                            <a href="#"><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/12/banner/720x220Xahangbackuppng-720x220.png" alt=""></a>
                            <a href="#"><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/11/banner/Vivo-Y17s-720-220-720x220-3.png" alt=""></a>
                            <a href="#"><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/12/banner/dh-befit-720-220-720x220.png" alt=""></a>

                        </div>
                        <div class="slider-content-left-top-btn">
                            <i class='bx bx-chevron-left'></i>
                            <i class='bx bx-chevron-right'></i>
                        </div>
                    </div>
                    <div class="slider-content-left-bottom">
                        <li class="active">Laptop</li>
                        <li>Màn hình</li>
                        <li>Bàn phím</li>
                        <li>Chuột</li>
                        <li>Tai nghe</li>

                    </div>
                </div>

                <div class="slider-content-right">
                    <li><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/44/296847/dell-inspiron-15-3520-i5-n5i5122w1-191222-091429-600x600.jpg" alt=""></li>
                    <li><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/44/314840/dell-inspiron-14-7430-i5-n7430i58w1-221023-102403-600x600.png" alt=""></li>
                    <li><img src="{{asset('storage/images/anh4.webp')}}" alt=""></li>
                    <li><img src="{{asset('storage/images/anh2.jpg')}}" alt=""></li>
                </div>
            </div>
        </div>
    </section>
</main>
<div class="laptop container mt-3">
    
    <section class="jumbotron text-center">
        <div class="container">
            <h2 class="jumbotron-heading">Danh sách Sản phẩm</h2>
            <p class="lead text-muted">Các sản phẩm với chất lượng, uy tín, cam kết từ nhà Sản xuất, phân phối và
                bảo hành
                chính hãng.</p>
        </div>
    </section>
    <!-- Giải thuật duyệt và render Danh sách sản phẩm theo dòng, cột của Bootstrap -->
    <div class="danhsachsanpham py-5 ">
        <div class="container">
            <div class="row bg-light">
                <h4>Sản phẩm nổi bật</h4>
                @foreach ($hotproducts as $item)
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="card mb-4 shadow-sm">
                        <a href="#" class="position-relative">
                            <img class="card-img-top img-fluid imgproduct 
                            " src="{{asset('storage/images')}}/{{$item->image}}">
                            <button type="submit" class="border border-0 position-absolute start-0 bg-success rounded-end-circle" style="width:60px;top:5px;borber:none;"><b>Hot</b></button>
                            @if ($item->sale_price)
                                
                            <button type="submit" class="border border-0 position-absolute start-0 bg-danger rounded-end-circle" style="top:40px;width:60px;"><b>{{percent($item->sale_price, $item->price)}}%</b></button>
                                
                            @endif
                        </a>
                        <div class="card-body">
                            <a href="#" class="nameproduct">
                                <h6 class="">{{$item->name}}</h6>
                            </a>
                            <h6>Thương hiệu: {{$item->category->name}}</h6>                            
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted text-right">
                                    <h6>Giá: </h6>
                                    @if ($item->sale_price > 0)
                                    <s>đ{{number_format($item->price)}} </s> -
                                    <b>đ{{number_format($item->sale_price)}}</b> 
                                    
                                    @else
                                    <b>đ{{number_format($item->price)}} </b>
                                    @endif   
                                </small>   
                            </div>
                            <div class="btn-group mt-3 d-flex justify-content-right">
                                <a class="btn btn-sm btn-outline-secondary" href="{{route('detail',$item->slug)}}">Xem
                                    chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>  
                @endforeach   
                {{$hotproducts->links()}}       

            </div>
            <hr style="margin: 20px 0px;">

            <div class="row bg-light">
                <h4>Tất cả sản phẩm chúng tôi có</h4>
                @foreach ($allProduct as $item)
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="card mb-4 shadow-sm">
                        <a href="#" class="position-relative">
                            <img class="card-img-top img-fluid imgproduct 
                            " src="{{asset('storage/images')}}/{{$item->image}}">
                            <button type="submit" class="border border-0 position-absolute start-0 bg-success rounded-end-circle" style="width:60px;top:5px;borber:none;"><b>Hot</b></button>
                            @if ($item->sale_price)
                                
                            <button type="submit" class="border border-0 position-absolute start-0 bg-danger rounded-end-circle" style="top:40px;width:60px;"><b>{{percent($item->sale_price, $item->price)}}%</b></button>
                                
                            @endif
                        </a>
                        <div class="card-body">
                            <a href="#" class="nameproduct">
                                <h6 class="">{{$item->name}}</h6>
                            </a>
                            <h6>Thương hiệu: {{$item->category->name ?? 'none'}}</h6>                            
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted text-right">
                                    <h6>Giá: </h6>
                                    @if ($item->sale_price > 0)
                                    <s>đ{{number_format($item->price)}} </s> -
                                    <b>đ{{number_format($item->sale_price)}} </b> 
                                    
                                    @else
                                    <b>đ{{number_format($item->price)}} </b>
                                    @endif   
                                </small>   
                            </div>
                            <div class="btn-group mt-3 d-flex justify-content-right">
                                <a class="btn btn-sm btn-outline-secondary" href="{{route('detail',$item->slug)}}">Xem
                                    chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div> 
                @endforeach
                {{$allProduct->links()}}       
            </div><hr>
        </div>
    </div>

</div>
@endsection
@section('js')
        <script>
            const rightBtn = document.querySelector('.bx-chevron-right')
    const leftBtn = document.querySelector('.bx-chevron-left')
    var index = 0;
    const imgNumber = document.querySelectorAll('.slider-content-left-top img')
    max = imgNumber.length;

    //silder
    rightBtn.addEventListener('click', function () {
        document.querySelector('.slider-content-left-top').style.right = index * 100 + "%"
        index = index + 1
        if (index > max - 1) {
            index = 0;
        }
    })

    leftBtn.addEventListener('click', function () {
        document.querySelector('.slider-content-left-top').style.right = index * 100 + "%"
        index = index - 1
        if (index < 0) {
            index = max - 1;
        }
    })

    //slider trượt khi click
    const listClick = document.querySelectorAll('.slider-content-left-bottom li')


    listClick.forEach(function (image, index) {
        image.addEventListener('click', function () {
            document.querySelector('.slider-content-left-top').style.right = index * 100 + "%"
            removeActive()
            image.classList.add('active')
        })
    })
    function removeActive() {
        let imagActive = document.querySelector('.active')
        imagActive.classList.remove('active')
    }
    //slide tự trượt
    function imgAuto() {
        index = index + 1;
        
        if (index > max - 1) {
            index = 0;
        }
        removeActive()
        document.querySelector('.slider-content-left-top').style.right = index * 100 + "%"
        // console.log(index)
        listClick[index].classList.add('active')
    }

    setInterval(imgAuto, 3000);
    </script>
@endsection

