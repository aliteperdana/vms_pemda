{{-- Kontrak --}}
<div class="row" id="data_kontrak">
    <div class="col-md-12">
        <div class="card custom-rounded mt-5">
            <div class="card-header">
                <div class="card-header-text">Kontrak</div>
            </div>
            <div class="card-body profilvendor">
                <table id="table_kontrak" class="table table-hover tablepenyedia" style="width: 100%">
                    <thead>
                        <tr>
                            <td>Kontrak</td>
                            <td>Paket</td>
                            <td>Pagu</td>
                            <td>Mulai</td>
                            <td>Akhir</td>
                            <td>SK</td>
                            <td>Tgl SK</td>
                            <td>Nilai</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kontrak as $key)
                            <tr>
                                <td>{{$key->kontrak}}</td>
                                <td>{{$key->paket_nama}}</td>
                                <td>{{ number_format($key->paket_pagu)}}</td>
                                <td>{{ date('d-m-Y', strtotime($key->mulai)) }}</td>
                                <td>{{ date('d-m-Y', strtotime($key->akhir)) }}</td>
                                <td>{{$key->sk}}</td>
                                <td>{{ $key->tgl_sk == null ? '-' : date('d-m-Y', strtotime($key->tgl_sk)) }}</td>
                                <td>{{ number_format($key->nilai)}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>