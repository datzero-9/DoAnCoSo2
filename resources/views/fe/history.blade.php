@extends('fe.index')
@section('title')
    lịch sử đơn hàng
@endsection


@section('main')
    <div class="container fs-5 my-3">
        <a href="{{ route('home') }}"><strong class="text-dark">Trang chủ /</strong></a>
        <a href="{{ route('cart.index') }}" class="text-dark"> Giỏ hàng /</a>
        <a href="" class=""> Lịch sử mua hàng </a>

    </div>
    <div class="container">

        @forelse ($orders as $item)
            <table class="table table-hover mb-5" border="2"></strong>
                <thead>
                    <tr>
                        <th width="5%">STT</th>
                        <th>Đơn hàng</th>
                        <th>Ảnh</th>
                        <th>Sán phẩm</th>
                        <th>Giá tiền </th>
                        <th>Số lượng </th>
                        <th>Ngày mua </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($item->orderDetails as $items)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td width="40%">{{ $items->product->name }}</td>
                            <td width="10%"><img style="width: 70px;"
                                    src="{{ asset('storage/images') }}/{{ $items->product->image }}" alt=""></td>
                            <td>{{ $items->product->category->name }}</td>
                            <td>{{ $items->product->sale_price > 0 ? number_format($items->product->sale_price) : number_format($items->product->price) }}
                                vnđ</td>
                            <td>x{{ $items->quantity }}</td>
                            <td>{{ $items->created_at }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="7" class="text-end">
                            <h5><strong>Tổng tiền:</strong> {{ number_format($item->total_amount) }} vnđ </h5>
                        </td>
                    </tr>

                </tbody>
            </table>
        @empty
            <strong class="">Không tìm thấy sản phẩm</strong>
        @endforelse

    </div>

@endsection
