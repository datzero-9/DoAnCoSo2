@extends('admin.master')
@section('title')
Admin | master layouts
@endsection 

@section('title-page')
Giao diện admin
@endsection 

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">Mã đơn hàng</th>
                        <th>Tên SP</th>
                        <th>Giá</th>
                        <th>Ngày tạo</th>
                        <th>Edit</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @forelse ($order as $item)
                    <tr>
                      
                      <td>{{$item->id}}</td>
                      @php
                          dd($item->pro);
                      @endphp
                      {{-- <td>{{$item->pro->name}}</td> --}}
                      <td></td>
                      
                      
                      <td>{{$item->created_at}}</td>
                      
                
                      
                      <td><a href="{{route('product.edit',$item)}}" class="btn btn-info">sửa</a></td>
                  </tr>
                    @empty
                    <strong class="">Không tìm thấy sản phẩm</strong>
                    @endforelse
                      
                    
                  
                  
                </tbody>
          </table> 
        </div>
        <div class="col-md-6"></div>
    </div>
</div>

@endsection