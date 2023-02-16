{{-- Pengalaman --}}
<div class="row">
    <div class="col-md-12">
        <div class="card custom-rounded mt-5">
            <div class="card-header">
                <div class="card-header-text">Peralatan</div>
            </div>
            <div class="card-body profilvendor">
                <table id="table_peralatan" class="table table-hover tablepenyedia" style="width: 100%">
                    <thead>
                        <tr>
                            <td width="25%">Jenis</td>
                            <td width="25%">Tipe</td>
                            <td width="10%">Jumlah</td>
                            <td width="10%">Tahun</td>
                            <td width="10%">Kondisi</td>
                            <td width="20%">Lokasi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peralatan as $key)
                            <tr>
                                <td>{{ $key->jenis == null ? '-' : $key->jenis}}</td>
                                <td>{{ $key->tipe == null ? '-' : $key->tipe}}</td>
                                <td>{{ $key->jumlah == null ? '-' : $key->jumlah}}</td>
                                <td>{{ $key->tahun == null ? '-' : $key->tahun}}</td>
                                <td>
                                    @if ($key->kondisi == null)
                                        {{'-'}}
                                    @elseif($key->kondisi == 1)
                                        {{'Bagus'}}
                                    @else  
                                        {{'Rusak'}}      
                                    @endif
                                </td>
                                <td>{{ $key->lokasi == null ? '-' : $key->lokasi}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>