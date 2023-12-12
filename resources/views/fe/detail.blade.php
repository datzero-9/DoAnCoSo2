@extends('fe.index')
@section('main')
    <div class="container"> 
        <main role="main">
            <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
            <div class="container mt-4">
                <div id="thongbao" class="alert alert-danger d-none face" role="alert">                   
                </div>
    
                <div class="card">
                    <div class="container-fliud m-3">
                        

    
                            <div class="wrapper row ">
                                <div class="preview col-md-5 mb-3">
                                   
                                    <div class="container">
                                        <div class="main ">
                                            <img src="{{asset('storage/images')}}/{{$product->image}}" alt="" class="img_feature">
                                        </div>
                                        <div class="list_image">
                                            <div class="active"><img src="{{asset('storage/images')}}/{{$product->image}}"></div>
                                         
                                            @foreach ($product->images as $item)
                                               <div><img src="{{asset('storage/images')}}/{{$item->image}}" alt=""></div>
                                            @endforeach
                         
                                        </div>
                                    </div>
                                </div>
                                <div class="details col-md-7 mb-3">
                                   <div class="container">
                                    <h3 class="product-title">{{$product->name}}</h3>
                                    <div class="rating">
                                        <div class="stars">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <span class="review-no">999 reviews</span>
                                    </div>
                                    
                                    <small class="">Giá cũ: <s><span>{{number_format($product->sale_price) > 0 ? number_format($product->price) : 'Chưa giảm giá lần nào'}} vnđ</span></s></small><br>
                                    <small class=" text-danger">Giảm: {{percent($product->sale_price, $product->price)}}%</small>
                                    <h4 class="price">Giá hiện tại: <span class="text-danger">{{number_format($product->sale_price) > 0 ? number_format($product->sale_price) : number_format($product->price) }} vnđ</span></h4>
                                    <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                        <strong>Uy
                                            tín</strong>!
                                    </p>
                                  
                                    
                                        <div class="radio d-flex align-items-center">
                                            <h5 class="colors">Màu:</h5>
                                            <label for="" class="mx-3" >
                                                <input type="radio" name="status" checked="checked" value="0" >
                                               Trắng  
                                            </label> 
                                            <label for="" >
                                                <input type="radio" name="status" checked="checked" value="1">
                                                đen 
                                            </label>
                                        </div>
  
                                    <form action="{{route('cart.add')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="soluong">Số lượng đặt mua:</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number fs-5" data-type="minus" data-field="quantity">
                                                    -
                                                  </button>
                                                </span>
                                                <input type="text" id="quantity" name="quantity" class="text-center " value="{{old('quantity') ? old('quantity') : 1}}" min="1" max="100" style="width:70px;border: none;">
                                                <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number fs-5" data-type="plus" data-field="quantity">
                                                    +
                                                  </button>
                                                </span>
                                              </div>
                                        </div>
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <div class="action mt-4">
                                            <button type="submit" class=" btn btn-warning" >Thêm vào giỏ hàng</button>
                                        </div>
                                    </form>
                                   </div>


                                </div>
                            </div>                    
                    </div>
                </div>
    
                <div class="card">
                    <div class="container-fluid">
                        <h3>Thông tin chi tiết về Sản phẩm</h3>
                        <div class="row">
                            <div class="col">
                               {!!$product->description!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End block content -->
        </main>
    
        <!-- footer -->
       
        <!-- end footer -->
    
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
    

    .main {
        height: 80%;
        margin-bottom: 20px;
        position: relative;
    }

    .list_image {       
         height: 15%;
        display: flex;
        flex-direction: row;
        /* justify-content: space-between; */
        flex-wrap: wrap;
    }

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .list_image div {
        flex: 1;
        padding: 2px;
    }

 
    .active {
        background-color: black;
    }
    .img_feature {
        width: 100%;
    }
    .product-title{
        font-size : 18px;
    }
</style>
@endsection
@section('js')
<script>
    var imgFeature = document.querySelector('.img_feature')
    var listImg = document.querySelectorAll('.list_image img')

    var currentIndex = 0
    function updateIamgeByIndex(index) {
        //remove active 

        document.querySelectorAll('.list_image div').forEach(item => {
            item.classList.remove('active')
        })
        currentIndex = index;
        imgFeature.src = listImg[index].getAttribute('src')
        listImg[index].parentElement.classList.add('active')
    }

    listImg.forEach((imgElement, index) => {

        imgElement.addEventListener('click', e => {
            updateIamgeByIndex(index)

        })
    })
</script>
<script>
     document.addEventListener("DOMContentLoaded", function() {
      // Lấy các phần tử cần sử dụng
      var btnMinus = document.querySelector('.btn-number[data-type="minus"]');
      var btnPlus = document.querySelector('.btn-number[data-type="plus"]');
      var inputQuantity = document.getElementById('quantity');
  
      // Xử lý sự kiện click nút trừ
      btnMinus.addEventListener("click", function() {
        var currentValue = parseInt(inputQuantity.value);
        if (currentValue > 1) {
          inputQuantity.value = currentValue - 1;
        }
      });
  
      // Xử lý sự kiện click nút cộng
      btnPlus.addEventListener("click", function() {
        var currentValue = parseInt(inputQuantity.value);
        var maxValue = parseInt(inputQuantity.getAttribute('max'));
        if (currentValue < maxValue) {
          inputQuantity.value = currentValue + 1;
        }
      });
    });
</script>
@endsection
