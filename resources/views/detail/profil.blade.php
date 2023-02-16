{{-- Profil Vendor --}}
<div class="row">
    <div class="col-md-12">
        <div class="card custom-rounded">
            <div class="card-header">
                <div class="card-header-text">Profil Vendor</div>
            </div>
            <div class="card-body profilvendor">
                <div class="row form-row no-border-top">
                    <div class="col-md-8">
                        <h5>{{$profil[0]->nama}}</h5>
                        <div class="row form-row no-border-top">
                            <div class="row">
                                <div class="col-md-1 iconprofile">
                                    <i class="far fa-address-card"></i>
                                </div>
                                <div class="col-md-8">
                                    <strong>NPWP</strong>   {{$profil[0]->npwp}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 iconprofile">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="col-md-8">
                                    {{$profil[0]->alamat}}-{{$profil[0]->kota}}-{{$profil[0]->propinsi}}-{{$profil[0]->pos}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 iconprofile">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="col-md-8">
                                    {{$profil[0]->telepon}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                @if($profil[0]->isactive == '-1' & $profil[0]->status == '1')
                                <span class="badge rounded-pill bg-success pill-verifikasi"> <i class="fa fa-check"></i>&nbsp;&nbsp;Aktif </span>
                                @else
                                <span class="badge rounded-pill bg-danger pill-verifikasi"> <i class="fa fa-times"></i>&nbsp;&nbsp;Aktif </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                @if($profil[0]->tgl_setuju == '')
                                <span class="badge rounded-pill bg-danger pill-verifikasi"> <i class="fa fa-times"></i>&nbsp;&nbsp;Terverifikasi </span>
                                @else
                                <span class="badge rounded-pill bg-success pill-verifikasi"> <i class="fa fa-check"></i>&nbsp;&nbsp;Terverifikasi </span>
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-1"><i class="fas fa-trophy icontrophy"></i></div>
                            <div class="col-md-6">Menang Tender</div>
                            <div class="col-md-5">
                                <a href="#data_kontrak" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <strong>{{$count_tender}}</strong>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-1"><i class="fas fa-money-bill-wave-alt icontrophy"></i></div>
                            <div class="col-md-6">Total Kontrak</div>
                            <div class="col-md-5">
                                <a href="#data_kontrak">
                                    <Strong>Rp.{{$count_kontrak}}</Strong>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-1"><i class="fas fa-users icontrophy"></i></div>
                            <div class="col-md-6">Staf Ahli</div>
                            <div class="col-md-5">
                                <a href="#data_staf">
                                    <Strong>{{$count_staf_ahli}}</Strong>
                                </a></div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row form-row no-border-top">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-3 iconprofile">
                                    <i class="far fa-address-card"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Bentuk Usaha</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{$profil[0]->btu_nama == null ? '-' : $profil[0]->btu_nama }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-3 iconprofile">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Email</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{$profil[0]->email == null ? '-' : $profil[0]->email}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3 iconprofile">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Mobile Phone</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{$profil[0]->mobile_phone == null ? '-' : $profil[0]->mobile_phone  }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row form-row no-border-top">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-3 iconprofile">
                                    <i class="fas fa-globe-asia"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Website</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{$profil[0]->website == null ? '-' : $profil[0]->website}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-3 iconprofile">
                                    <i class="far fa-building"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Status Perusahaan</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{$profil[0]->perusahan == 'P' ? 'Kantor Pusat' : 'Kantor Cabang'}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3 iconprofile">
                                    <i class="fas fa-fax"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Fax</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{$profil[0]->fax == null ? '-' : $profil[0]->fax}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row form-row no-border-top">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-3 iconprofile">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Tanggal Daftar</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{$profil[0]->tgl_daftar == null ? '-' : date('d-M-Y', strtotime($profil[0]->tgl_daftar))}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-3 iconprofile">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Tanggal Verifikasi</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{$profil[0]->tgl_setuju == null ? '-' : date('d-M-Y', strtotime($profil[0]->tgl_setuju))}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-3 iconprofile">
                                    <i class="fas fa-user-check"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Verifikator</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{$profil[0]->verifikator == null ? '-' : $profil[0]->verifikator}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <a href="{{route('home')}}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>
</div>