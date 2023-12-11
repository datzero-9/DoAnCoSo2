@extends('fe.index')
@section('main')
<div class="container fs-5"><a href="{{route('home')}}"><strong class="text-dark">Trang chủ /</strong></a><a href="" class="text-dark"> Giỏ hàng /</a> <a href=""> Thanh toán</a></div>
<div class="container">
    @if (session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>   
    @endif
<hr style="margin: 0; top: 0;">
    <form action="" method="POST" role="form" enctype="multipart/form-data">
        @csrf

    <div class="row my-5">
        <div class="col-md-4">
            <div>
                <h4 class="text-center">Nhập thông tin cá nhân của bạn</h4>
            </div>
            <div class="form-group ">
                <label for="">Tên:</label>
                <input type="text" class="form-control" id="productName" name="name"  value="{{Auth::user()->name}}" onkeyup="ChangeToSlug();">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">Email:</label>
                <input type="text" class="form-control" id="slug" name="email" value="{{Auth::user()->email}}">
                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror 
            </div>

            <div class="form-group mt-3">
                <label for="">Điện thoại:</label>
                <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
                @error('phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group my-3">
                <label for="">Địa chỉ:</label>
                <input type="text" class="form-control" name="address" value="{{old('address')}}">
                @error('address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="form-group my-3">
                    <label for="">ghi chú</label>
                    <input type="text" class="form-control" name="note" value="">
                    @error('note')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{route('cart.index')}}" class="btn btn-primary mx-4">Quay lại</a>
                <button type="submit" class="btn btn-warning ">Xác nhận</button>
            </div>
        </div>                     
        <div class="col-md-8 mt-5">
            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh đại diện</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                      
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
                        
                        
                    </tr>
                    @endforeach
                    <tr>
                        <th colspan="5" class="text-end">Số lượng:</th>
                        <th colspan="1" class="text-right">{{number_format($cart->totalquantity)}}</th>
                    </tr> 
                    <tr class="">
                        <th colspan="5" class="text-end">Tổng tiền:</th>
                        <th colspan="1" class="text-right">{{number_format($cart->totalprice)}} VND</th>
                    </tr>
                </tbody>
            </table>
            
        </div>       
        
    </div>
    </form>
</div>
@endsection

@section('css')
   <style>
     .hinhdaidien {
        height: 50px;
    }

   </style>
@endsection
@section('js')
   
@endsection