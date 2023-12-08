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
.container1 ul li:nth-child(4) input  {
  width: 250px;
  height: 35px;
  outline: none;
  border: none;
}
.container1 ul li:nth-child(4) i {
  cursor: pointer;
  position: absolute; 
  font-size: 20px;
  right: 0;
  top: 5px;
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
}
.submenu ul  {
display: flex;
flex-direction: column;
}

.submenu ul  li{
  margin: 0;
}
.slider {
  margin-top: 20px;
  height: 350px;
}
.slider-content {
  display: flex;
  justify-content: space-between;
}
.slider-content-left {
  width: 65%;
}
.slider-content-left-top {
  position: relative;
  height: 300px;
  width: 100%;
}
.slider-content-left-top img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.slider-content-left-bottom {
  display: flex;
  justify-content: space-between;
  border: 2px solid #ddd;
  border-top: none;
  height: 50px;
  /* line-height: 30px; */
}
.slider-content-left-bottom li {
  border-top: 4px solid #fff ;
  width: 20%;
  text-align: center;
  cursor: pointer;
  padding: 6px 0;
  height: 100%;
  line-height: 38px;
  position: relative;
}
.slider-content-left-bottom li::before {
  width: 1px;
  position: absolute;
  display: block;
  content: "";
  height: 70%;
  background-color: #ddd;
  right: 0;
}
.slider-content-left-bottom li.active {
  border-top: 4px solid #f8ba2b ;
  font-weight: bold;
}

.slider-content-right {
  width: 35%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  padding: 0 30px;
  
}
.slider-content-right li {
  width: 50%;
  height: 50%; 
  text-align: center;
  margin-bottom: 3px;
}
.slider-content-right li img {
  width: 170px;
  height: 170px; 
}
.slider-content-left-top-btn{
  position: absolute;
  top: 50%;
  display: flex;
  justify-content: space-between;
  width: 100%;

}
.slider-content-left-top-btn i{
  color: #333;
  cursor: pointer;
  font-size: 35px;
  height: 50px;
  width: 30px;
  background-color: #ddd;
  display: flex;
  justify-content: center;
  align-items: center;
  transform: translateY(-50%);
  border-radius: 5px;
  opacity: 0;
  transition: .5s;
}
/* .slider-content-left-top:hover i {
  opacity: 1;
} */
/*----------------------------------js slider--------------*/
.slider-content-left-top img {
position: absolute;
}
.slider-content-left-top a:nth-child(2) img {
transform: translateX(100%);
}

.slider-content-left-top a:nth-child(3) img {
  transform: translateX(200%);
}
.slider-content-left-top a:nth-child(4) img {
transform: translateX(300%);
}
.slider-content-left-top a:nth-child(5) img {
transform: translateX(400%);
}
.slider-content-left-top-container  {
position: relative;
overflow: hidden;
}
.slider-content-left-top-container:hover i {
  opacity: 1;
}
.slider-content-left-top {
  transition: 0.5s;
}
</style>
<header>
<nav class="notice">
<img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/11/banner/BIG-1200-44-1200x44.png"
  alt="">
</nav>
<div class="container container1">
<ul style="padding: 0;">
  <li><a href="{{route('index')}}"> <img
              src="https://www.thegioididong.com/ContentMwg/images/TGDD/Store/background_sieu_thi_tgdd.png"
              alt=""></a></li>
  <li>
      <a href="">Đà nẵng <i class='bx bxs-down-arrow'></i> </a>
  </li>
  <li><a href="">Danh mục</a> <i class='bx bx-grid'></i></li>
  <li><input type="text" placeholder="tìm kiếm sản phẩm"><i class='bx bx-search-alt-2'></i></li>
  <li class="d-flex align-items-center">
      <i class='bx bx-phone-call'></i>
      <a href="">Gọi mua hàng <br>0356031160</a>
  </li>
  <li><a href="{{route('cart.index')}}">Giỏ hàng </a><i class='bx bx-cart-alt'></i></li>
  <li>
          <a href="">Cửa hàng</a><i class='bx bxs-location-plus'></i></option>   
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
  <li>
      <a href="">Laptop <i class='bx bx-laptop'></i></a>
      <div class="submenu">
          <ul style="margin: 0; padding: 0;">
              <li><a href=""><b>Phụ kiện a</b></a></li>
              <li><a href=""><b>Phụ kiện a</b></a></li>
              <li><a href=""><b>Phụ kiện a</b></a></li>
              <li><a href=""><b>Phụ kiện a</b></a></li>
              <li><a href=""><b>Phụ kiện a</b></a></li>
              <li><a href=""><b>Phụ kiện a</b></a></li>

          </ul>
      </div>

  </li>
  <li><a href="">Màn hình <i class='bx bx-tv'></i></a> </li>
  <li><a href="">Bàn phím <i class='bx bxs-keyboard'></i></a> </li>
  <li><a href="">Chuột <i class='bx bx-mouse-alt'></i></a> </li>
  <li><a href="">Tai nghe <i class='bx bx-headphone'></i></a> </li>
  <li><a href="">Sản phẩm khác...</a></li>
</ul>
</nav>
</header>