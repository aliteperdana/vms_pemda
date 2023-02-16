{{-- Modal Tender Stat --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <div class="modal-title" id="exampleModalLabel">Statistik Menang Tender</div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Tahun {{$tender_stat[0]['tahun']}} <div class="px-2"><span class="badge bg-danger">{{$tender_stat[0]['data']}}</span></div>
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table id="table_stat" class="table table-hover tablepenyedia" style="width: 100%">
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
                                    @foreach($tender_stat[0]['table'] as $key)
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
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Tahun {{$tender_stat[1]['tahun']}} <div class="px-2"><span class="badge bg-danger">{{$tender_stat[1]['data']}}</span></div>
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table id="table_stat_2" class="table table-hover tablepenyedia" style="width: 100%">
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
                                    @foreach($tender_stat[1]['table'] as $key)
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
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Tahun {{$tender_stat[2]['tahun']}} <div class="px-2"><span class="badge bg-danger text-right">{{$tender_stat[2]['data']}}</span></div>
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table id="table_stat_3" class="table table-hover tablepenyedia" style="width: 100%">
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
                                    @foreach($tender_stat[2]['table'] as $key)
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
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>