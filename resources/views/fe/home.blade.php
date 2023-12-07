@extends('fe.index')

@section('main')
<section class="mymaincontent mt-1 ">
    <div class="container">
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="//bizweb.dktcdn.net/thumb/grande/100/493/970/themes/923518/assets/slider_1.jpg?1700473522200"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="//bizweb.dktcdn.net/thumb/grande/100/493/970/themes/923518/assets/slider_1.jpg?1700473522200"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="//bizweb.dktcdn.net/thumb/grande/100/493/970/themes/923518/assets/slider_1.jpg?1700473522200"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sau</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Trước</span>
            </button>
        </div>
    </div>
</section>
<div class="laptop container">
    
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Danh sách Sản phẩm</h1>
            <p class="lead text-muted">Các sản phẩm với chất lượng, uy tín, cam kết từ nhà Sản xuất, phân phối và
                bảo hành
                chính hãng.</p>
        </div>
    </section>
    <!-- Giải thuật duyệt và render Danh sách sản phẩm theo dòng, cột của Bootstrap -->
    <div class="danhsachsanpham py-5 bg-light">
        <div class="container">
            <div class="row">
                <h4>Sản phẩm nổi bật</h4>
                @foreach ($hotproducts as $item)
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="card mb-4 shadow-sm">
                        <a href="#" class="position-relative">
                            <img class=" card-img-top img-fluid 
                            " width="100%" height="400" src="{{asset('storage/images')}}/{{$item->image}}">
                            <button type="submit" class="border border-0 position-absolute start-0 bg-success rounded-end-circle" style="width:60px;top:5px;borber:none;"><b>Hot</b></button>
                            @if ($item->sale_price)
                                
                            <button type="submit" class="border border-0 position-absolute start-0 bg-danger rounded-end-circle" style="top:40px;width:60px;"><b>{{percent($item->sale_price, $item->price)}}%</b></button>
                                
                            @endif
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h6 class="fs-5">{{$item->name}}</h6>
                            </a>
                            <h6>Thương hiệu: {{$item->category->name}}</h6>                            
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted text-right">
                                    <h6>Giá: </h6>
                                    @if ($item->sale_price > 0)
                                    <s>{{number_format($item->price)}} VND</s> -
                                    <b>{{number_format($item->sale_price)}} VND</b> 
                                    
                                    @else
                                    <b>{{number_format($item->price)}} VND</b>
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
            </div><hr>
            <div class="row">
                @foreach ($category as $item)
                    <h1>{{$item->name}}</h1>
                @endforeach
                          
            </div><hr>
        </div>
    </div>

</div>
@endsection

