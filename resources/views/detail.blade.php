<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Management System</title>
    @include('include.head')
</head>
<body>
    <div class="container custom-container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card custom-rounded logout_card mt-3 mb-3">
                    <div class="card-body p-1">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="session_nama">
                                    <i class="fas fa-user"></i>
                                    {{ session('nama') }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-2">
                                    <a href="{{route('logout')}}" class="btn btn-danger btn-sm">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome text-center"></div>
        <!-- Profil Vendor -->
            @include('detail.profil')
        <!-- Kantor Pusat -->
            @include('detail.kantor_pusat')
        <!-- Pemilik dan Pengurus -->
            @include('detail.pemilik')
        <!-- Ijin -->
            @include('detail.ijin')
        <!-- Kontrak -->
            @include('detail.kontrak')
        <!-- Staf Ahli -->
            @include('detail.staf')
        <!-- Pengalaman -->
            @include('detail.pengalaman')
        <!-- Peralatan -->    
            @include('detail.peralatan')
    </div>
    <!-- Footer -->
    @include('include.footer')
    <!-- Modal Tender Stat-->
    @include('detail.modal_tender_stat')
</body>
@include('include.script')
</html>