{{-- Pemilik dan Pengurus --}}
<div class="row">
    <div class="col-md-6">
        <!-- Profile Pemilik -->
        <div class="row">
            <div class="col-md-12">
                <div class="card custom-rounded mt-5">
                    <div class="card-header">
                        <div class="card-header-text">Profil Pemilik</div>
                    </div>
                    <div class="card-body profilvendor">
                        <div class="row form-row no-border-top">
                            <!-- Nama -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1 iconprofile">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="col-md-11">
                                            {{$profil[0]->pemilik_nama == null ? '-' : $profil[0]->pemilik_nama}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- NPWP -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1 iconprofile">
                                            <i class="far fa-address-card"></i>
                                        </div>
                                        <div class="col-md-11">
                                            <strong>NPWP: </strong> {{$profil[0]->pemilik_npwp == null ? '-' : $profil[0]->pemilik_npwp}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- KTP -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1 iconprofile">
                                            <i class="far fa-address-card"></i>
                                        </div>
                                        <div class="col-md-11">
                                            <strong>KTP: </strong> {{$profil[0]->pemilik_ktp == null ? '-' : $profil[0]->pemilik_ktp }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- Alamat -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1 iconprofile">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="col-md-11">
                                            {{$profil[0]->pemilik_alamat == null ? '-' : $profil[0]->pemilik_alamat }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- Saham -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1 iconprofile">
                                            <i class="fas fa-layer-group"></i>
                                        </div>
                                        <div class="col-md-11">
                                            <strong>Saham:</strong>   {{$profil[0]->pemilik_saham == null ? '-' : $profil[0]->pemilik_saham}} <span>%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Profile Pengurus -->
        <div class="row">
            <div class="col-md-12">
                <div class="card custom-rounded mt-5">
                    <div class="card-header">
                        <div class="card-header-text">Profil Pengurus</div>
                    </div>
                    <div class="card-body profilvendor">
                        <div class="row form-row no-border-top">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1 iconprofile">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="col-md-11">
                                            {{$profil[0]->pengurus_nama == null ? '-' : $profil[0]->pengurus_nama}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1 iconprofile">
                                            <i class="far fa-address-card"></i>
                                        </div>
                                        <div class="col-md-11">
                                            <strong>KTP: </strong> {{$profil[0]->pengurus_ktp == null ? '-' : $profil[0]->pengurus_ktp}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1 iconprofile">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="col-md-11">
                                            {{$profil[0]->pengurus_alamat == null ? '-' : $profil[0]->pengurus_alamat }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1 iconprofile">
                                            <i class="fas fa-medal"></i>
                                        </div>
                                        <div class="col-md-11">
                                            <strong>Jabatan:</strong>   {{$profil[0]->pengurus_jabatan == null ? '-' : $profil[0]->pengurus_jabatan}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>