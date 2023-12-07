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

            <h1 class="text-center">Giỏ hàng</h1>
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
                            <tr>
                                <td>1</td>
                                <td>
                                    <img src="../assets/img/product/ipad4.png" class="hinhdaidien">
                                </td>
                                <td>Apple Ipad 4 Wifi 16GB</td>
                                <td class="text-right">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                          <button type="button" class="btn btn-default btn-number fs-5" data-type="minus" data-field="quantity">
                                            -
                                          </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity" class="form-control input-number " value="1" min="1" max="100" style="width: 20px;border: none;">
                                        <span class="input-group-btn">
                                          <button type="button" class="btn btn-default btn-number fs-5" data-type="plus" data-field="quantity">
                                            +
                                          </button>
                                        </span>
                                      </div>
                                </td>
                                <td class="text-right">11,800,000.00</td>
                                <td class="text-right">23,600,000</td>
                                <td>
                                    <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                    <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                    </a>
                                </td>
                        
                        </tbody>
                    </table>
                    <section class="totalAllProduct my-2">
                        <div class="d-flex justify-content-end  align-items-center">
                            <b class="mx-2"><a href="">Tổng tiền tất cả:</a></b>
                            <button type="submit" class="btn btn-warning">Mua ngay</button>
                        </div>
                    </section>
                    <a href="" class="btn btn-warning btn-md"><i class="fa fa-arrow-left"
                            aria-hidden="true"></i>&nbsp;Quay
                        về trang chủ</a>
                    <a href="" class="btn btn-primary btn-md"><i class="fa fa-shopping-cart"
                            aria-hidden="true"></i>&nbsp;Thanh toán</a>
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
    /* GLOBAL STYLES
-------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
        color: #5a5a5a;
    }


    /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

    /* Carousel base class */
    .carousel {
        margin-bottom: 4rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        bottom: 3rem;
        z-index: 10;
        color: white;
        text-shadow: 2px 2px 5px black;

    }


    /* Declare heights because of positioning of img element */
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


    /* MARKETING CONTENT
-------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
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


    /* Featurettes
------------------------- */

    .featurette-divider {
        margin: 5rem 0;
        /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
        font-weight: 300;
        line-height: 1;
        letter-spacing: -.05rem;
    }


    /* RESPONSIVE CSS
-------------------------------------------------- */

    @media (min-width: 40em) {

        /* Bump up size of carousel content */
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
        height: 150px;
    }
</style>
@endsection
@section('js')
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