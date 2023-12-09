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
                                    <div class="preview-pic tab-content">
                                        <div class="tab-pane" id="pic-1">
                                            <img src="../assets/img/product/samsung-galaxy-tab-10.jpg">
                                        </div>
                                        <div class="tab-pane" id="pic-2">
                                            <img src="../assets/img/product/samsung-galaxy-tab.jpg">
                                        </div>
                                        <div class="tab-pane active" id="pic-3">
                                            <img src="{{asset('storage/images')}}/{{$product->image}}">
                                        </div>
                                    </div>
                                    <ul class="preview-thumbnail nav nav-tabs">
                                        <li class="active">
                                            <a data-target="#pic-1" data-toggle="tab" class="">
                                                <img src="https://scontent.fdad1-4.fna.fbcdn.net/v/t39.30808-6/409131802_1559195081504832_5605846028303741474_n.jpg?stp=c0.22.843.843a_cp6_dst-jpg_p843x403&_nc_cat=105&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=BEicB11KmK4AX9iBCaN&_nc_oc=AQnROkTH1jmrCu4aF4RRQCbVgQHQg7EA08bjdIqUSXpnYLCZbmIxi6A5ZxGk4a6uarUwY5lu9bVagxCbvYAvANJx&_nc_ht=scontent.fdad1-4.fna&cb_e2o_trans=t&oh=00_AfAdIt80iB1JJu5M-78IdZDDwL0FI3ZCwr9TvrsPTmdrhA&oe=6578B6E1">
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-target="#pic-2" data-toggle="tab" class="">
                                                <img src="https://scontent.fdad1-4.fna.fbcdn.net/v/t39.30808-6/409131802_1559195081504832_5605846028303741474_n.jpg?stp=c0.22.843.843a_cp6_dst-jpg_p843x403&_nc_cat=105&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=BEicB11KmK4AX9iBCaN&_nc_oc=AQnROkTH1jmrCu4aF4RRQCbVgQHQg7EA08bjdIqUSXpnYLCZbmIxi6A5ZxGk4a6uarUwY5lu9bVagxCbvYAvANJx&_nc_ht=scontent.fdad1-4.fna&cb_e2o_trans=t&oh=00_AfAdIt80iB1JJu5M-78IdZDDwL0FI3ZCwr9TvrsPTmdrhA&oe=6578B6E1">
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-target="#pic-3" data-toggle="tab" class="active">
                                                <img src="https://scontent.fdad1-4.fna.fbcdn.net/v/t39.30808-6/409131802_1559195081504832_5605846028303741474_n.jpg?stp=c0.22.843.843a_cp6_dst-jpg_p843x403&_nc_cat=105&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=BEicB11KmK4AX9iBCaN&_nc_oc=AQnROkTH1jmrCu4aF4RRQCbVgQHQg7EA08bjdIqUSXpnYLCZbmIxi6A5ZxGk4a6uarUwY5lu9bVagxCbvYAvANJx&_nc_ht=scontent.fdad1-4.fna&cb_e2o_trans=t&oh=00_AfAdIt80iB1JJu5M-78IdZDDwL0FI3ZCwr9TvrsPTmdrhA&oe=6578B6E1">

                                            </a>
                                        </li>
                                    </ul>
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

             img {
                max-width: 100%;
            }

            .preview {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            @media screen and (max-width: 996px) {
                .preview {
                    margin-bottom: 20px;
                }
            }

            .preview-pic {
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-height: 300px;
            }

            .preview-thumbnail.nav-tabs {
                border: none;
                margin-top: 15px;
            }

            .preview-thumbnail.nav-tabs li {
                width: 18%;
                margin-right: 2.5%;
            }

            .preview-thumbnail.nav-tabs li img {
                max-width: 100%;
                display: block;
            }

            .preview-thumbnail.nav-tabs li a {
                padding: 0;
                margin: 0;
            }

            .preview-thumbnail.nav-tabs li:last-of-type {
                margin-right: 0;
            }

            .tab-content {
                overflow: hidden;
            }

            .tab-content img {
                width: 100%;
                -webkit-animation-name: opacity;
                animation-name: opacity;
                -webkit-animation-duration: .3s;
                animation-duration: .3s;
            }

            .card {
                background: #eee;
                padding: 3em;
                line-height: 1.5em;
            }

            @media screen and (min-width: 997px) {
                .wrapper {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                }
            }

            .details {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .colors {
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
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

            .add-to-cart,
            .like {
                background: #ff9f1a;
                padding: 1.2em 1.5em;
                border: none;
                text-transform: UPPERCASE;
                font-weight: bold;
                color: #fff;
                -webkit-transition: background .3s ease;
                transition: background .3s ease;
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

            .orange {
                background: #ff9f1a;
            }

            .green {
                background: #85ad00;
            }

            .blue {
                background: #0076ad;
            }

            .tooltip-inner {
                padding: 1.3em;
            }

            @-webkit-keyframes opacity {
                0% {
                    opacity: 0;
                    -webkit-transform: scale(3);
                    transform: scale(3);
                }

                100% {
                    opacity: 1;
                    -webkit-transform: scale(1);
                    transform: scale(1);
                }
            }

            @keyframes opacity {
                0% {
                    opacity: 0;
                    -webkit-transform: scale(3);
                    transform: scale(3);
                }

                100% {
                    opacity: 1;
                    -webkit-transform: scale(1);
                    transform: scale(1);
                }
            }
    </style>
@endsection
@section('js')
<script src="">

    smallImgs[0].addEventListener('click', () => {
        featuedImg.src = smallImgs[0].src;
        smallImgs[0].classList.add('sm-card')
        smallImgs[1].classList.remove('sm-card')
        smallImgs[2].classList.remove('sm-card')
        smallImgs[3].classList.remove('sm-card')
        smallImgs[4].classList.remove('sm-card')
    })
    smallImgs[1].addEventListener('click', () => {
        featuedImg.src = smallImgs[1].src;
        smallImgs[0].classList.remove('sm-card')
        smallImgs[1].classList.add('sm-card')
        smallImgs[2].classList.remove('sm-card')
        smallImgs[3].classList.remove('sm-card')
        smallImgs[4].classList.remove('sm-card')
    })
    smallImgs[2].addEventListener('click', () => {
        featuedImg.src = smallImgs[2].src;
        smallImgs[0].classList.remove('sm-card')
        smallImgs[1].classList.remove('sm-card')
        smallImgs[2].classList.add('sm-card')
        smallImgs[3].classList.remove('sm-card')
        smallImgs[4].classList.remove('sm-card')
    })
    smallImgs[3].addEventListener('click', () => {
        featuedImg.src = smallImgs[3].src;
        smallImgs[0].classList.remove('sm-card')
        smallImgs[1].classList.remove('sm-card')
        smallImgs[2].classList.remove('sm-card')
        smallImgs[3].classList.add('sm-card')
        smallImgs[4].classList.remove('sm-card')
    })
    smallImgs[4].addEventListener('click', () => {
        featuedImg.src = smallImgs[4].src;
        smallImgs[0].classList.remove('sm-card')
        smallImgs[1].classList.remove('sm-card')
        smallImgs[2].classList.remove('sm-card')
        smallImgs[3].classList.remove('sm-card')
        smallImgs[4].classList.add('sm-card')
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
