@extends('admin.master')
@section('title')
Admin | thông tin khách hàng đặt hàng
@endsection 

@section('title-page')
Thông tin khách hàng đặt hàng
@endsection 

@section('content')
<div class="container">
<p>Khách hàng: <strong>{{$order->customer->name}}</strong></p>
<p>Email: <strong>{{$order->customer->email}}</strong></p>
<p>Số điện thoại: <strong>{{$order->phone}}</strong></p>
<p>Địa chỉ giao hàng: <strong>{{$order->address}}</strong></p>
<p>Ghi chú: <strong>{{$order->note}}</strong></p>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th width="5%">stt</th>
            <th>Đơn hàng</th>
            <th>Ảnh</th>
            <th>Giá tiền </th>
            <th>Số lượng </th>
            
        
        </tr>
    </thead>
    <tbody>
      
        @forelse ($OrderDetail as $item)
        <tr>
         @php
                dd($item)
            @endphp
          
          {{-- <td>{{$item->product->name}}</td> --}}
          <td>{{$item->order_id}}</td>
          <td>{{$item->id}}</td>
          <td>{{$item->id}}</td>
          <td>{{}}</td>  
          
      </tr>
        @empty
        <strong class="">Không tìm thấy sản phẩm</strong>
        @endforelse

    </tbody>
</table>
{{-- {{$OrderDetail->links()}}   --}}
</div>

@endsection