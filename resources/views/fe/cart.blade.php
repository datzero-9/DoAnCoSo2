@extends('fe.index')
@section('main')
    <div class="container"> 
        
    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
                    @if (session('msg'))
                        <div class="alert alert-warning text-center">{{session('msg')}}</div>
                    @endif
            <h2 class="text-start">Giỏ hàng</h2>
            <div class="row">
                <div class="col col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh đại diện</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="datarow">
                            @foreach ($cart->list() as $items => $value )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                 <img src="{{asset('storage/images')}}/{{$value['image']}}" class="hinhdaidien">
                                </td>
                                <td>{{$value['name']}}</td>
                                {{-- <td class="text-right">
                                    <div class="input-group">
                                        <form action="{{route('updatecart.index',$value['id'])}}" method="get">

                                            @php
                                            $value['quantity']
                                            @endphp
                                            <input type="number" style="width: 60px;" name="quantity" value="{{$value['quantity']}}">
                                            <button type="submit" style="border: none;">xác nhận</button>
                                        </form>
                                      </div>
                                </td> --}}
                                <td>{{$value['quantity']}}</td>
                                <td>{{number_format($value['price'])}}</td>
                                <td class="text-right">{{number_format($value['quantity'] * $value['price'])}}</td>
                                
                                <td>
                                    <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                    <a href="{{route('deletecart.index',$value['id'])}}" onclick="confirm('xóa sản phẩm trong giỏ hàng')"  class="btn btn-danger ">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <th colspan="6" class="text-end">Số lượng:</th>
                                <th colspan="1" class="text-right">{{number_format($cart->totalquantity)}}</th>
                            </tr> 
                            <tr class="">
                                <th colspan="6" class="text-end">Tổng tiền:</th>
                                <th colspan="1" class="text-right">{{number_format($cart->totalprice)}} VND</th>
                            </tr>
                        </tbody>
                    </table>
                   
                    <section class="totalAllProduct my-2 d-flex  justify-content-end  align-items-center">
                        @if ($cart->totalquantity > 0)
                        <a href="{{route('home')}}" class="btn btn-primary "><i class="fa fa-shopping-cart"
                            aria-hidden="true"></i>&nbsp;Tiếp tục mua hàng</a>

                           <a href="{{route('clear.cart')}}" onclick="confirm('bạn có muốn xóa sạch giỏ hàng ')" class="btn btn-danger mx-5 "><i class="fa fa-shopping-cart"
                            aria-hidden="true"></i>&nbsp;Xóa hết giỏ hàng </a>
                            <a href="" class="btn btn-warning "><i class="fa fa-shopping-cart"
                                aria-hidden="true"></i>&nbsp;Thanh toán</a>
                        @else
                        <a href="{{route('home')}}" class="btn btn-primary "><i class="fa fa-shopping-cart"
                            aria-hidden="true"></i>&nbsp;Tiếp tục mua hàng</a>
                        @endif
                       
                        
                    </section>
                   
                </div>
            </div>
        </div>
        <!-- End block content -->
    </main>
    
        
    
        <!-- Optional JavaScript -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
         <!-- Custom script - Các file js do mình tự viết -->
    
    </div>
    <!--  -->
@endsection
@section('css')
        <style>
         

            body {
                color: #5a5a5a;
            }
            .carousel {
                margin-bottom: 4rem;
            }
            .carousel-caption {
                bottom: 3rem;
                z-index: 10;
                color: white;
                text-shadow: 2px 2px 5px black;

            }

            .carousel-item {
                height: 42rem;
            }

            .carousel-item>img {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                height: 42rem;
            }
            .marketing .col-lg-4 {
                margin-bottom: 1.5rem;
                text-align: center;
            }

            .marketing h2 {
                font-weight: 400;
            }

            .marketing .col-lg-4 p {
                margin-right: .75rem;
                margin-left: .75rem;
            }
            .featurette-divider {
                margin: 5rem 0;
            }

            .featurette-heading {
                font-weight: 300;
                line-height: 1;
                letter-spacing: -.05rem;
            }
            @media (min-width: 40em) {
                .carousel-caption p {
                    margin-bottom: 1.25rem;
                    font-size: 1.25rem;
                    line-height: 1.4;
                }

                .featurette-heading {
                    font-size: 50px;
                }
            }

            @media (min-width: 62em) {
                .featurette-heading {
                    margin-top: 7rem;
                }
            }

            .hinhdaidien {
                width: 150px;
                height: 100px;
            }
        </style>
@endsection
@section('js')
   
@endsection