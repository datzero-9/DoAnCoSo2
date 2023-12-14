<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family:Arial, Helvetica, sans-serif ;
}
.notice img {
  width: 100%;
  height: 35px;
}
header {
  width: 100%;
  background-color: #FFF200;
}
li{
  list-style: none;
}
li a {
  font-size: 14px;
  text-decoration: none;
  color: #333;
}

.container1 ul {
  margin: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.container1 ul li:nth-child(1) img {
  height: 48px;
  width: 100%;
}
.container1 ul li:nth-child(2) {
  
  background-color: #FFBB09 ;
  padding: 6px;
  border-radius: 2px;
}
.container1 ul li:nth-child(2):hover {
  background-color: #f6c960;
  cursor: pointer;
  transition: 0.5s;
}
.container1 ul li:nth-child(3) {
  cursor: pointer;
  background-color: #FFBB09 ;
  padding: 6px;
  border-radius: 2px;
  display: flex;
  align-items: center;
}
.container1 ul li:nth-child(3):hover {
  background-color: #f6c960;
  cursor: pointer;
  transition: 0.5s;
}
.container1 ul li:nth-child(3) i {
font-size: 20px; 
}

.container1 ul li:nth-child(4)  {
  position: relative; 
  }
  .container1 ul li:nth-child(4)  {
  position: relative; 
  }
  .container1 ul li:nth-child(4) input  {
    width: 250px;
    height: 35px;
    outline: none;
    border: none;
    border-radius: 5px;
    padding: 10px;
  }
  .container1 ul li:nth-child(4) button {
    cursor: pointer;
    position: absolute; 
    font-size: 30px;
    right: 0;
    top: 2px;
    border: none;
    background-color: #FFFFFF;
  }
  .search-ajax {
    position: relative;
  }

  .search-ajax .display-ajax {
    width: 250px;
    position: absolute;
    z-index: 2;
    /* border: 1px solid #333; */
    background-color: #FFFFFF;
    top: 38px;
  }
  .search-ajax .display-ajax .around {
    border:1px solid #333;
    margin: 3px 10px;
  }
  .search-ajax .display-ajax .around:hover {
    background-color:#cbc2c2; 
  }
  .search-ajax .display-ajax a {
    display: flex;
    align-items:center;
  }
  .search-ajax .display-ajax a img {
    width: 60px;
    height: 60px;
    padding: 5px;
  }
.container1 ul li:nth-child(5):hover {   
  background-color: #f6c960;
  cursor: pointer;
  transition: 0.5s;

}
.container1 ul li:nth-child(5) i {
font-size: 20px;
margin-right: 10px;
}
.container1 ul li:nth-child(6):hover {
  background-color: #f8ba2b;
  cursor: pointer;
  transition: 0.5s;
}
.container1 ul li:nth-child(6)  {
  display: flex;
  justify-content: center;
  padding: 8px;

}
.container1 ul li:nth-child(6) i {
  text-align: center;
  font-size: 20px;  
}
.container1 ul li:nth-child(7) {
  display: flex;
  padding: 8px;
}
.container1 ul li:nth-child(7):hover {
  background-color: #f8ba2b;
  cursor: pointer;
  transition: 0.5s;
}
.container1 ul li:nth-child(7) i {
  font-size: 18px;
}
.container1 ul li:nth-child(8) i {
  font-size: 23px;
}

.container2 ul {
  display: flex;
  justify-content: center;
}
.container2 ul li{
  margin: 0 5px;
  padding: 8px 20px ;
}
.container2 ul li:hover{
  background-color: #f8ba2b;
  cursor: pointer;
  transition: 0.5s;
}
.container2 ul li a{
  font-size: 16px;
}
.avatar {
  width: 100%;
  height: auto;
}
/*----------------------submenu----------------------*/
.container2 ul li {
  position: relative;
}
.container2 ul li:hover>.submenu{
  visibility: visible;
  top: 40px;
  transition: .5s;
}
.submenu {
  width: 200px;
  top: 80px;
  position: absolute;
  border: 1px solid #333;
  background-color: rgb(192, 205, 219);
  visibility: hidden;
  z-index: 100;
}
.submenu ul  {
display: flex;
flex-direction: column;
}

.submenu ul  li{
  margin: 0;
}

</style>
<header>
<nav class="notice">
<img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/11/banner/BIG-1200-44-1200x44.png"
  alt="">
</nav>
<div class="container container1">
<ul style="padding: 0;">
  <li><a href="{{route('home')}}"><h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; margin: 0 0 0 20px;"> MOCO</h2></a></li>
  <li>
      <a href="">Đà nẵng <i class='bx bxs-down-arrow'></i> </a>
  </li>
  <li><a href="">Tin tức</a> <i class='bx bx-news'></i></li>
  <li>
    <form action="{{route('search.index')}}" method="get">
          <div class="search-ajax">
            <div class="">
                @csrf
                <input type="text" placeholder="tìm kiếm sản phẩm" name="key" class="input-search-ajax">
                <button type="submit" class='bx bx-search-alt-2'></button>
            </div>
              <div class="display-ajax">
                
          </div>

    </form>
  </li>
  <li class="d-flex align-items-center">
      <i class='bx bx-phone-call'></i>
      <a href="">Gọi mua hàng <br>0356031160</a>
  </li>
  <li>
  <a href="{{route('cart.index')}}">Giỏ hàng 
    <div type="button" class="position-relative">
        <a href=""> <i class='bx bxs-cart-alt fs-5'></i></a>
        <span
            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{$cart->totalquantity}}
        </span>
    </div>
  </a>
</li>
  <li>
          <a href="{{route('contact.index')}}">Cửa hàng</a><i class='bx bxs-location-plus'></i></option>   
  </li>
  <li>
      @if (Auth::check())
        <a href="{{route('logoutAcc')}}" onclick="confirm('bạn muốn đăng xuất ?')">| Đăng xuất</a><br>
        <b>{{Auth::User()->name}}</b>            
      @else
      <div class="d-flex align-items-center"><a href="{{route('login')}}">Đăng nhập </a><i class='bx bxs-user-circle'></i></div>
      @endif
  </li>
</ul>
</div>
<hr style="margin: 0; top: 0;">
<nav class="container container2">
<ul style="padding: 0; margin: 0 0 2px 0;">
  <li><a href="{{route('laptop.index','11')}}">Laptop <i class='bx bx-laptop'></i></a></li>
  <li><a href="{{route('manhinh.index','9')}}">Màn hình <i class='bx bx-tv'></i></a> </li>
  <li><a href="{{route('banphim.index','6')}}">Bàn phím <i class='bx bxs-keyboard'></i></a> </li>
  <li><a href="{{route('chuot.index','7')}}">Chuột <i class='bx bx-mouse-alt'></i></a> </li>
  <li><a href="{{route('tainghe.index','8')}}">Tai nghe <i class='bx bx-headphone'></i></a> </li>
  {{-- <li><a href="{{route('sanphamkhac.index')}}">Sản phẩm khác...</a></li> --}}
</ul>
</nav>
</header>
@section('headerjs')
<script>
  $('.display-ajax').hide();
  $('.input-search-ajax').keyup(function(){
  var _text =$(this).val();
    if(_text!=''){
      $.ajax({
          //api llấy dữ liệu từ backend về
          url: 'http://127.0.0.1:8000/api/search-product?key=' + _text,
          type: 'GET',
          success: function (req) {
              var _html = '';
              for (var product of req) {
                  _html += '<div class="around">';
                  _html += '<a href="http://127.0.0.1:8000/detail/' + product.slug + '">';
                  _html += `<img src="{{asset('storage/images')}}/${product.image}">`;
                  _html += `<span>${product.name.length > 20 ? product.name.slice(0, 30) + '...' : product.name}</span> <br>`;
                  _html += '</a>';
                  _html += '</div>';
              }
              $('.display-ajax').show(100);
              $('.display-ajax').html(_html);
          }
      });
    }else {
          $('.display-ajax').html('');
          $('.display-ajax').hide();

  }

})
</script>
@endsection