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

.sanphamnoibat:hover .card-body + .imgproduct{
    border: 1px solid #333;
    transition: 0.5s;
}
    </style>
@endsection
@section('main')

<div class="laptop container mt-3">
    <!-- Giải thuật duyệt và render Danh sách sản phẩm theo dòng, cột của Bootstrap -->
    <div class="danhsachsanpham ">
        <div class="container">
            <div class="row bg-light">
                <h4 class="mt-3">Tất cả sản phẩm {{$categoryy->name}}</h4>
                @if (count($products)>0)
                @foreach ($products as $item)
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="card mb-4 shadow-sm">
                        <a href="#" class="position-relative">
                            <img class="card-img-top img-fluid imgproduct 
                            " src="{{asset('storage/images')}}/{{$item->image}}">
                            <button type="submit" class="border border-0 position-absolute start-0 bg-success rounded-end-circle" style="width:60px;top:5px;borber:none;"><b>Hot</b></button>
                            @if ($item->sale_price > 0)
                                
                            <button type="submit" class="border border-0 position-absolute start-0 bg-danger rounded-end-circle" style="top:40px;width:60px;"><b>{{percent($item->sale_price, $item->price)}}%</b></button>
                                
                            @endif
                        </a>
                        <div class="card-body">
                            <a href="#" class="nameproduct">
                                <h6><strong>{{Str::limit($item->name, 20, '...')}}</strong></h6>
                            </a>
                            <h6><strong>Sản phẩm</strong>: {{$item->category->name ?? 'none'}}</h6>                            
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted text-right">
                                    <h6><strong>Giá</strong>: </h6>
                                    @if ($item->sale_price > 0)
                                    <s>đ{{number_format($item->price)}}</s> -
                                    <b style="color: #DC3545;">đ{{number_format($item->sale_price)}} </b> <br>
                                    
                                    @else
                                    <b style="color: #DC3545;">đ{{number_format($item->price)}} </b><br>
                                    @endif  
                                    <i>Sản phẩm <strong>uy tín</strong>, <strong>chất lượng</strong> 100%, có <strong>bảo hành</strong></i> 
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
                @else
                    <p>sản phẩm không còn hoặc admin đã xóa sản phẩm</p>
                @endif
                {{-- {{$allProduct->links()}}        --}}
            </div><hr>
        </div>
    </div>

</div>
@endsection
@section('js')
       
@endsection