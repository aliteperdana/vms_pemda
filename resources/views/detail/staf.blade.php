{{-- Staf Ahli --}}
<div class="row" id='data_staf'>
    <div class="col-md-12">
        <div class="card custom-rounded mt-5">
            <div class="card-header">
                <div class="card-header-text">Staf Ahli</div>
            </div>
            <div class="card-body profilvendor">
                <table id="table_staf" class="table table-hover tablepenyedia" style="width: 100%">
                    <thead>
                        <tr>
                            <td width="20%">Nama</td>
                            <td width="5%">JK</td>
                            <td width="40%">Pendidikan</td>
                            <td width="30%">Keahlian</td>
                            <td width="5%">Pengalaman</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($staf as $key)
                            <tr>
                                <td>{{ ucwords(strtolower($key->sta_nama))}}</td>
                                <td>{{ $key->sta_jenis_kelamin == '1' ? 'L' : 'W'}}</td>
                                <td>{{ $key->sta_pendidikan}}</td>
                                <td>{{ $key->sta_keahlian}}</td>
                                <td>{{ $key->sta_pengalaman}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>