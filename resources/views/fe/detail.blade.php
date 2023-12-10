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
    
                <div class="card">
                    <div class="container-fliud">
                        
                            <input type="hidden" name="sp_ma" id="sp_ma" value="5">
                            <input type="hidden" name="sp_ten" id="sp_ten" value="Samsung Galaxy Tab 10.1 3G 16G">
                            <input type="hidden" name="sp_gia" id="sp_gia" value="10990000.00">
                            <input type="hidden" name="hinhdaidien" id="hinhdaidien" value="samsung-galaxy-tab-10.jpg">
    
                            <div class="wrapper row">
                                <div class="preview col-md-6">
                                   
                                    <div class="container">
                                        <div class="main">
                                            <img src="{{asset('storage/images')}}/{{$product->image}}" alt="" class="img_feature">
                                     
                                        </div>
                                        <div class="list_image">
                                            <div class="active"><img src="{{asset('storage/images')}}/{{$product->image}}" alt=""></div>
                                            <div><img src="/images/anh2.webp" alt=""></div>
                                            <div><img src="/images/anh3.webp" alt=""></div>
                                            <div><img src="/images/anh4.webp" alt=""></div>
                                
                                        </div>
                                    </div>
                                </div>
                                <div class="details col-md-6">
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
                                    
                                    <small class="text-muted">Giá cũ: <s><span>{{number_format($product->sale_price) > 0 ? number_format($product->price) : 'Chưa giảm giá lần nào'}} vnđ</span></s></small>
                                    <h4 class="price">Giá hiện tại: <span>{{number_format($product->sale_price) > 0 ? number_format($product->sale_price) : number_format($product->price) }} vnđ</span></h4>
                                    <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                        <strong>Uy
                                            tín</strong>!
                                    </p>
                                  
                                    <h5 class="colors">Màu:
                                        <span class="color orange not-available" data-toggle="tooltip"
                                            title="Hết hàng"></span>
                                        <span class="color green"></span>
                                        <span class="color blue"></span>
                                    </h5>



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
    .card {
        background: #eee;
        padding: 3em;
        line-height: 1.5em;
    }


    .product-title,
    .price,
    .sizes,
    .colors {
        text-transform: UPPERCASE;
        font-weight: bold;
    }

    .checked,
    .price span {
        color: #ff9f1a;
    }

    .product-title,
    .rating,
    .product-description,
    .price,
    .vote,
    .sizes {
        margin-bottom: 15px;
    }

    .product-title {
        margin-top: 0;
    }

    .size {
        margin-right: 10px;
    }

    .size:first-of-type {
        margin-left: 40px;
    }

    .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px;
    }

    .color:first-of-type {
        margin-left: 20px;
    }

    .add-to-cart:hover,
    .like:hover {
        background: #b36800;
        color: #fff;
    }

    .not-available {
        text-align: center;
        line-height: 2em;
    }

    .not-available:before {
        font-family: fontawesome;
        content: "\f00d";
        color: #fff;
    }

    .tooltip-inner {
        padding: 1.3em;
    }

    .main {
        height: 80%;
        margin-bottom: 20px;
        position: relative;
    }

    .list_image {
        height: 15%;
        display: flex;
        justify-content: space-between;
    }

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .list_image div {
        flex: 1;
        padding: 5px;
    }

    .control {
        position: absolute;
        top: 50%;
        font-size: 50px;
        color: aliceblue;
        cursor: pointer;
        transform: translateY(-50%);
    }

    .pre {
        left: 10px;
    }

    .next {
        right: 10px;
    }

    .active {
        background-color: black;
    }
</style>
@endsection
@section('js')
<script>
    var imgFeature = document.querySelector('.img_feature')
    var listImg = document.querySelectorAll('.list_image img')
    var preBtn = document.querySelector('.pre')
    var nextBtn = document.querySelector('.next')

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
