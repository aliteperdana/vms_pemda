{{-- Ijin --}}
<div class="row">
    <div class="col-md-12">
        <div class="card custom-rounded mt-5">
            <div class="card-header">
                <div class="card-header-text">Ijin Usaha</div>
            </div>
            <div class="card-body profilvendor">
                <table id="table_ijin" class="table table-hover tablepenyedia" style="width: 100%">
                    <thead>
                        <tr>
                            <td width="5%">Klasifikasi</td>
                            <td width="15%">Jenis</td>
                            <td width="40%">Nomor</td>
                            <td width="20%">Berlaku</td>
                            <td width="20%">Instansi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ijin as $key)
                            <tr>
                                <td>{{ $key->kls_id == '21' ? 'Kecil' : 'Besar'}}</td>
                                <td>{{ $key->jni_nama}}</td>
                                <td>{{ $key->ius_no}}</td>
                                <td>{{ date('d-m-Y', strtotime($key->ius_berlaku))}}</td>
                                <td>{{ $key->ius_instansi}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>