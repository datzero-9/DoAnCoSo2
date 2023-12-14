@extends('admin.master')
@section('title')
Admin | thông tin khách hàng đặt hàng
@endsection 

@section('title-page')
Thông tin khách hàng đặt hàng
@endsection 

@section('content')
<div class="container">
    @foreach ($orders as $item)
        <p>Khách hàng: <strong>{{$item->customer->name}}</strong></p>
        <p>Email: <strong>{{$item->customer->email}}</strong></p>
        <p>Số điện thoại: <strong>{{$item->phone}}</strong></p>
        <p>Địa chỉ giao hàng: <strong>{{$item->address}}</strong></p>
        <p>Ghi chú: <strong>{{$item->note}}</strong></p>
    @endforeach

  <table class="table table-bordered">
    <thead>
        <tr>
            <th width="5%">stt</th>
            <th>Đơn hàng</th>
            <th>Ảnh</th>
            <th>Sán phẩm</th>
            <th>Giá tiền </th>
            <th>Số lượng </th>
            
        
        </tr>
    </thead>
    <tbody>
        
        @forelse ($orders as $item)
       @foreach ($item->orderDetails as $items)
           {{-- {{dd($items);}} --}}
           <tr>

             {{-- <td>{{$item->product->name}}</td> --}}
             <td>{{$items->id}}</td>
             <td width="40%">{{$items->product->name}}</td>
             <td width="10%"><img style="width: 70px;" src="{{asset('storage/images')}}/{{$items->product->image}}" alt=""></td>
             <td>{{$items->product->category->name}}</td>  
             <td>{{$items->product->sale_price > 0 ? number_format($items->product->sale_price) : number_format($items->product->price)}} vnđ</td>               
             <td>x{{$items->quantity }}</td>               
         </tr>
       @endforeach
        @empty
        <strong class="">Không tìm thấy sản phẩm</strong>
        @endforelse
    </tbody>
</table>
<div > <p class="text-right">tổng tiền: {{number_format($item->total_amount)}}</p></div>
</div>

@endsection