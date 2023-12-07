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
    .full {
        display: flex;
        justify-content: center;
        height: 100vh;
        align-items: center;


    }

    form {

        background-color: rgb(168, 165, 162);

        width: 400px;
        border: 1px solid #000;
        padding: 20px;
    }
</style>

<body>

    <div class="full">


        <form action="" method="POST">
            @csrf
            <h2 class="text-center">Đăng ký</h2>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Họ tên:</label>
                <input type="name" class="form-control" id="email" placeholder=" Nhập tên của bạn " name="name" value="{{old('name')}}">
                @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn " name="email" value="{{old('email')}}">
                @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Mật khẩu :</label>
                <input type="password" class="form-control" id="pwd" placeholder=" Nhập password của bạn "
                    name="password" value="{{old('password')}}">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Nhập lại mật khẩu :</label>
                <input type="password" class="form-control" id="pwd" placeholder=" Nhập lại password của bạn "
                    name="password_confirmation" value="{{old('password_confirmation')}}">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>
            <a href="{{route('login')}}">Tôi đã có tài khoản</a>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary text-right mx-2">Đăng ký</button>

            </div>
        </form>

    </div>

</body>

</html>