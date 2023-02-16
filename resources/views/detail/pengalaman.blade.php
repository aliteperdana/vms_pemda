{{-- Pengalaman --}}
<div class="row">
    <div class="col-md-12">
        <div class="card custom-rounded mt-5">
            <div class="card-header">
                <div class="card-header-text">Pengalaman</div>
            </div>
            <div class="card-body profilvendor">
                <table id="table_pengalaman" class="table table-hover tablepenyedia" style="width: 100%">
                    <thead>
                        <tr>
                            <td width="15%">Kegiatan</td>
                            <td width="5%">Lokasi</td>
                            <td width="10%">Pemberi Tugas</td>
                            <td width="15%">Kontrak</td>
                            <td width="10%">Tgl Kontrak</td>
                            <td width="10%">Nilai</td>
                            <td width="5%">Persentase</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengalaman as $key)
                            <tr>
                                <td>{{ ucwords(strtolower($key->pgl_kegiatan))}}</td>
                                <td>{{ ucwords(strtolower($key->pgl_lokasi))}}</td>
                                <td>{{ ucwords(strtolower($key->pgl_pembtgs))}}</td>
                                <td>{{ $key->pgl_nokontrak}}</td>
                                <td>{{ date('d-m-Y', strtotime($key->pgl_tglkontrak)) }}</td>
                                <td>{{ number_format($key->pgl_nilai)}}</td>
                                <td>{{ $key->pgl_persenprogress}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>