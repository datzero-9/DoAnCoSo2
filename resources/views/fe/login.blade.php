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
        width: 400px;
        border: 1px solid #000;
        padding: 20px;
        background-color: rgb(168, 165, 162);
    }
</style>

<body>

    <div class="full">


        <form action="" method="POST">
            @csrf
            <h2 class="text-center">Đăng nhập</h2>
            @if (session('msg'))
                <div class="alert alert-success text-center"> {{session('msg')}}</div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger text-center"> {{session('error')}}</div>
        @endif
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn " name="email" value="{{old('email')}}">
                @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Hãy nhập passwword của bạn "
                    name="password">
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <a href="">quên mật khẩu</a>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary text-right mx-2">Đăng nhập</button>
                <a href="{{route('register')}}" class="btn btn-primary text-right">Đăng ký</a>

            </div>
        </form>

    </div>

</body>

</html>