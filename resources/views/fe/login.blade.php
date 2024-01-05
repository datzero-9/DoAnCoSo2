<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Đăng nhập </title>
</head>
<style>
   html {
    font-size: 14px;
    word-spacing: 1px;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    box-sizing: border-box;
    background-color: #fff;
    color: #333;
    font-family: 'Open Sans', sans-serif;
  }

  a {
    color: #1b73e8;
    text-decoration: none;
    font-weight: 600;
  }
  
  .content-body {
    min-height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #5f6368;
    background-image: url('https://image.vietgoing.com/destination/vietgoing_kay2103314829.webp');
  background-size: cover;
  }
  
  .heading,
  .sub-heading {
    font-weight: 600;
    color: #202124;
  }

  .form-wrapper {
    width: 448px;
    min-height: 460px;
    margin: 0 auto;
    background-color:rgba(253, 252, 252, 0.9) ;
    padding: 21px 31px 21px;
    border: 1px solid #dbdce0;
    border-radius: 5px;
  }
  
  .form-wrapper .logo img {
    width: 75px;
    display: block;
    margin: 0 auto;
  }

  .field {
    position: relative;
  }
  
  .input {
    width: 100%;
    padding: 13px 15px;
    border-radius: 3px;
    line-height: 24px;
    border: #dbdce0 solid 1px;
    font-size: 16px;
    position: relative;
  }
  
  .input:focus {
    box-shadow: 0 0 0 2px #1b73e8 inset;
    outline: none;
    transition: 100ms;
  }
  
  .label {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    transform-origin: 0%;
    transition: 0.5s;
    font-size: 16px;
    pointer-events: none;
  }
  
  .field:focus-within .label,
  .input:not(:placeholder-shown) + .label {
    transform: scale(0.8) translateY(-43px);
    left: 12px;
    background-color: #fff;
    color: #1b73e8;
    padding: 1px 5px;
    border-radius: 50px;
  }
  
  .form-action {
    margin-top: 32px;
    display: flex;
    justify-content: space-between;
  }
  
  
  
  /* For Mobile View */
  @media (max-width: 520px) {
    .form-wrapper {
      border: none;
      padding: 48px 20px 36px;
    }
  }
</style>

<body>
    <div class="content-body">
        <div class="form-wrapper">
            
            <!-- <div class="logo">
                <img src="../assets/favicon/android-chrome-192x192.png" alt="Logo" />
            </div> -->
            <h1 class="heading text-center pt-4">Đăng nhập</h1>
            <h3 class="sub-heading text-center">welcome back</h3>
            @if (session('msg'))
            <div class="alert alert-success text-center"> {{session('msg')}}</div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger text-center"> <strong>{{session('error')}}</strong></div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="field mt-4">
                    <input type="email" name="email" class="input" placeholder=" " value="{{old('name')}}"/>
                    <label for="email" class="label">Email</label>
                </div>
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                <div class="field mt-4">
                    <input type="password" name="password" class="input" placeholder=" " value="{{old('password')}}"/>
                    <label for="password" class="label">Nhập mật khẩu</label>                   
                </div>
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                <div class="forgot-button mt-3">
                    <a href="#">Quên mât khẩu? </a>
                </div>

                <div class="description-text mt-4">
                    <p>
                        Mọi thắc mắc xin vui lòng liên hệ đến người quản trị viên <a href="https://www.facebook.com/datZeroNicekine">Hoàng Tiến Đạt</a>
                    </p>
                </div>

                <div class="form-action d-flex justify-content-end ">
                    <a href="{{route('register')}}" class="btn btn-primary mx-4 ">Đăng ký</a>
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
    {{-- <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-25065548-2');
    </script> --}}

</body>

</html>