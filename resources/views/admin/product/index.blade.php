@extends('admin.master')
@section('title')
Admin | Product
@endsection 

@section('title-page')
Danh sách sản phẩm
@endsection 

@section('content')

<div class="content">


  @if (session('msg'))
  <div class="alert alert-success my-5 text-center">{{session('msg')}}</div>   
  @endif
  @if (session('error'))
  <div class="alert alert-danger my-5 text-center">{{session('error')}}</div>   
  @endif

   <hr>
  <table class="table table-bordered">
        <thead>
            <tr>
                <th width="5%">stt</th>
                <th>Tên SP</th>
                <th>Giá</th>
                <th>Giá KM</th>
                <th>Danh mục</th>
                <th>Ảnh</th>
                <th>Ngày tạo</th>
                <th>Edit</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $item)
            <tr>
              
              <td>{{$loop->iteration}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->price}}</td>
              <td>{{$item->sale_price}}</td>
              <td>{{$item->category->name ?? 'none'}}</td>
              <td>
                <img src="{{asset('storage/images')}}/{{$item->image}}" alt="" width="200px">
              </td>
              <td>{{$item->created_at}}</td>
              
        
              
              <td><a href="{{route('product.edit',$item)}}" class="btn btn-info">sửa</a></td>
              <td> 
                <form action="{{route('product.destroy',$item)}}" method="POST">
                  @method('DELETE')
                  @csrf
              <button type="submit"  onclick="return confirm('Do you want delete this product ?')" class="btn btn-danger">xóa</button>      
              </form></td>  
          </tr>
            @empty
                <span>don't exist data</span>
            @endforelse
              
            
          
          
        </tbody>
  </table>

 {{$products->appends(request()->all())->links()}}
     
</div>

@endsection