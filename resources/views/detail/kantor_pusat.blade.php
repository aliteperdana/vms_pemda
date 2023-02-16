{{-- Kantor Pusat --}}
<div class="row">
    <div class="col-md-12">
        <div class="card custom-rounded mt-5">
            <div class="card-header">
                <div class="card-header-text">Kantor Pusat</div>
            </div>
            <div class="card-body profilvendor">
                <div class="row form-row no-border-top">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-3 iconprofile">
                                    <i class="far fa-address-card"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Alamat</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if($profil[0]->perusahan == 'P')
                                                {{$profil[0]->alamat == null ? '-' : $profil[0]->alamat }}
                                            @else
                                                {{$profil[0]->pusat_alamat == null ? '-' : $profil[0]->pusat_alamat }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
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
                                            @if($profil[0]->perusahan == 'P')
                                                {{$profil[0]->email == null ? '-' : $profil[0]->email }}
                                            @else
                                                {{$profil[0]->pusat_email == null ? '-' : $profil[0]->pusat_email }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-3 iconprofile">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Telepon</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if($profil[0]->perusahan == 'P')
                                                {{$profil[0]->telepon == null ? '-' : $profil[0]->telepon }}
                                            @else
                                                {{$profil[0]->pusat_telepon == null ? '-' : $profil[0]->pusat_telepon }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
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
                                            @if($profil[0]->perusahan == 'P')
                                                {{$profil[0]->fax == null ? '-' : $profil[0]->fax }}
                                            @else
                                                {{$profil[0]->pusat_fax == null ? '-' : $profil[0]->pusat_fax }}
                                            @endif
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