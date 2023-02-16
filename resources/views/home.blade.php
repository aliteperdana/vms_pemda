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
    <div class="position-fixed top-50 start-50 translate-middle" style="z-index: 11">
        <div id="liveToast" class="toast hide bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body text-white">
                  <h6>Inputan Tidak Boleh Kosong</h6>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>   
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
        <div class="welcome text-center">Selamat Datang di VMS</div>
        <div class="welcomeText text-center">Vendor Management System</div>
        <!-- Pencarian -->
        <div class="row search">
            <div class="col-md-8 col-sm-12">
                <div class="card custom-rounded">
                    <form action="{{ route('cari')}}" id="cari" method="POST" class="form-inline">
                        @csrf
                        <div class="card-body ">
                            <div class="search-bar p-2">
                                <ul class="nav nav-pills nav-custom mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link nav-link-custom active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Nama Vendor</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link nav-link-custom" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">NPWP</button>
                                    </li>
        
                                </ul>
                                <div class="tab-content nav-custom p-4" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Vendor">
                                                </div>
                                            </div>
                                            <div class="col-md-4 d-grid">
                                                <button type="button" class="btn btn-primary mb-2" id="btn_cari_nama"><i class="fas fa-search"></i> Cari</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <input type="text" class="form-control" id="npwp" name="npwp" placeholder="NPWP">
                                                </div>
                                            </div>
                                            <div class="col-md-4 d-grid">
                                                <button type="button" class="btn btn-primary mb-2" id="btn_cari_npwp"><i class="fas fa-search"></i> Cari</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 d-xs-none d-sm-none d-md-none d-lg-block">
                <div class="card custom-rounded">
                    <div class="card-body ">
                        <div class="total-vendor p-2">
                            <div class="row">
                                <div class="col-md-8">
                                    Total Vendor Aktif
                                    <span class="total-vendor-number">{{$penyedia}}</span>
                                </div>
                                <div class="col-md-4 text-center total-vendor-icon">
                                    <i class="far fa-building"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Data Vendor -->
        <div class="row">
            <div class="col-md-12">
                <div class="card custom-rounded">
                    <div class="card-header">
                        <div class="card-header-text">Daftar Penyedia</div>
                    </div>
                    <div class="card-body">
                        <div class="table-custom">
                            <table id="table_vendor" class="table table-hover tablepenyedia" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th width="24%">NPWP</th>
                                        <th width="24%">Nama</th>
                                        <th width="20%">Kabupaten/Kota</th>
                                        <th width="24%">Alamat</th>
                                        <th width="8%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('include.footer')
</body>
@include('include.script')
<script>
    $('#table_vendor').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('getdata') }}",
        columns: [
            {data: 'npwp', name: 'rkn_npwp'},
            {data: 'nama', name: 'rkn_nama'},
            {data: 'kota', name: 'kbp_nama',searchable: false},
            {data: 'alamat', name: 'rkn_alamat'},                  
            {
                data: 'id',
                searchable: false,
                render: function(data){
                    return '<a href="detail/'+data+'" class="btn btn-primary btn-sm">Lihat</a>';
                }
            }
        ],
        ordering: false, 
        lengthChange : false,
        scrollX: true,
        searchable: false,
        searching: false,
    }); 
    $('#btn_cari_nama').click(function(){
        $('#npwp').val('');
        var nama = $('#nama').val();
        if (nama.length == 0) {
            $('#liveToast').toast('show');
        }else{
            $('form#cari').submit();
        }
    });
    $('#btn_cari_npwp').click(function(){
        $('#nama').val('');
        var npwp = $('#npwp').val();
        if (npwp.length == 0) {
            $('#liveToast').toast('show');
        }else{
            $('form#cari').submit();
        }
});
</script>
</html>