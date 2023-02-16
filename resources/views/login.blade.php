<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Management System</title>
    @include('include.head')
</head>
<body class="text-center">
    <img src="{{asset('assets/img/Riau-min.png')}}" class="logo_riau_login">
    <p class="login_vms">VMS <br>
        <div class="login_copyright">Vendor Management System</div>
    </p>
    <div class="card card_login">
        <div class="card-body">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger login_alert" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endif
            @if (isset($invalid_login))
                <div class="alert alert-danger login_alert" role="alert">
                    Username atau Password Salah!
                </div>
            @endif
            <form action="{{route('check_login')}}" method="POST" class="p-3">
                @csrf
                <input class="form-control" name="username" type="text" placeholder="Username"  >
                <input class="form-control mt-3" name="password" type="password" placeholder="Password">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <button class="btn btn-primary btn_login">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <p class="login_copyright mt-3">Biro Pengadaan Barang dan Jasa 
        <br>Sekretariat Daerah Provinsi Riau
        <br>Copyright © 2021
    </p>
</body>
@include('include.script')
</html>