<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countRekanan = DB::table('rekanan')
                        ->join('kabupaten', 'rekanan.kbp_id', '=', 'kabupaten.kbp_id')
                        ->where('rekanan.rkn_isactive','-1')
                        ->where('rekanan.rkn_status','1')
                        ->count();
        return view('home', ['penyedia' => $countRekanan]);
    }

    public function checkDb(){
      
        // $count = DB::table('instansi')->get();
        // var_dump($count);

    }

    public function getData(Request $request){
        if($request->ajax()){
            $data = DB::table('rekanan')
                    ->join('kabupaten', 'rekanan.kbp_id', '=', 'kabupaten.kbp_id')
                    ->select(
                        'rekanan.rkn_id as id',
                        'rekanan.rkn_npwp as npwp', 
                        'rekanan.rkn_nama as nama',
                        'kabupaten.kbp_nama as kota',
                        'rekanan.rkn_alamat as alamat')
                    ->where('rekanan.rkn_isactive','-1')
                    ->where('rekanan.rkn_status','1')
                    ->orderBy('rekanan.auditupdate','desc'); 
            
            return Datatables::of($data)
                    ->make(true);
        }

    }

    private function getStaf($rkn_id){

        $data = DB::table('staf_ahli')
                ->select(
                    'sta_nama',
                    'sta_tgllahir',
                    'sta_jabatan',
                    'sta_pendidikan',
                    'sta_keahlian',
                    'sta_pengalaman',
                    'sta_jenis_kelamin'
                )
                ->where('rkn_id', $rkn_id)
                ->where('sta_status','1')
                ->get();
        
        return $data;
    }

    private function getCountStaf($rkn_id){
        $count_staf_ahli = DB::table('staf_ahli')
                            ->where('rkn_id', $rkn_id)
                            ->where('sta_status', '1')
                            ->count();
                       
        return $count_staf_ahli;
    }

    private function getProfil($rkn_id){
        $profil = DB::table('rekanan')
        ->leftJoin('bentuk_usaha', 'rekanan.btu_id', '=', 'bentuk_usaha.btu_id')
        ->leftJoin('kabupaten', 'rekanan.kbp_id', '=', 'kabupaten.kbp_id')
        ->leftJoin('propinsi', 'kabupaten.prp_id', '=', 'propinsi.prp_id')
        ->leftJoin('pemilik', 'rekanan.rkn_id', '=', 'pemilik.rkn_id')
        ->leftJoin('pengurus', 'rekanan.rkn_id', '=', 'pengurus.rkn_id')
        ->select(
            'rekanan.rkn_npwp as npwp',
            'bentuk_usaha.btu_nama',
            'rekanan.rkn_nama as nama',
            'rekanan.rkn_alamat as alamat',
            'kabupaten.kbp_nama as kota',
            'rekanan.rkn_kodepos as pos',
            'propinsi.prp_nama as propinsi',
            'rekanan.rkn_email as email',
            'rekanan.rkn_telepon as telepon',
            'rekanan.rkn_mobile_phone as mobile_phone',
            'rekanan.rkn_statcabang as perusahan',
            'rekanan.rkn_website as website',
            'rekanan.rkn_fax as fax',
            'rekanan.rkn_tgl_daftar as tgl_daftar',
            'rekanan.rkn_tgl_setuju as tgl_setuju',
            'rekanan.rkn_mobile_phone as hp',
            'rekanan.rkn_almtpusat as pusat_alamat',
            'rekanan.rkn_telppusat as pusat_telepon',
            'rekanan.rkn_faxpusat as pusat_fax',
            'rekanan.rkn_emailpusat as pusat_email',
            'rekanan.rkn_isactive as isactive',
            'rekanan.rkn_status as status',
            'pemilik.pml_nama as pemilik_nama',
            'pemilik.pml_ktp as pemilik_ktp',
            'pemilik.pml_npwp as pemilik_npwp',
            'pemilik.pml_alamat as pemilik_alamat',
            'pemilik.pml_saham as pemilik_saham',
            'pengurus.pgr_nama as pengurus_nama',
            'pengurus.pgr_ktp as pengurus_ktp',
            'pengurus.pgr_alamat as pengurus_alamat',
            'pengurus.pgr_jabatan as pengurus_jabatan',
            'rekanan.ver_namauser as verifikator'
        )
        ->where('rekanan.rkn_id',$rkn_id)
        ->get(); 

        return $profil;
    }

    private function getPengalaman($rkn_id){
        $data = DB::table('pengalaman')
                    ->select(
                        'pgl_kegiatan',
                        'pgl_lokasi',
                        'pgl_pembtgs',
                        'pgl_nokontrak',
                        'pgl_nilai',
                        'pgl_persenprogress',
                        'pgl_tglkontrak'
                    )
                    ->where('rkn_id', $rkn_id)
                    ->orderBy('pgl_tglkontrak', 'desc')
                    ->get();
                       
        return $data;
    }

    private function getIjinUsaha($rkn_id){
        $data = DB::table('ijin_usaha')
                    ->select(
                        'kls_id',
                        'ius_no',
                        'ius_berlaku',
                        'ius_instansi',
                        'jni_nama'
                    )
                    ->where('rkn_id', $rkn_id)
                    ->get();
                       
        return $data;
    }

    private function countKontrak($rkn_id){
        $data = DB::table('kontrak')
                    ->where('rkn_id',$rkn_id)
                    // ->whereNotNull('no_skpemenang')
                    // ->whereNotNull('tgl_skpemenang')
                    ->sum('kontrak_nilai');
        $dalam_juta = $data / 1000000;  

        if ($dalam_juta < 1000) {
            return round($dalam_juta,2).' JT';
        }elseif ($dalam_juta >= 1000) {
            $dalam_miliyar = $dalam_juta/1000;
            return round($dalam_miliyar,2).' M';
        }
    }

    private function countTender($rkn_id){
        $data = DB::table('kontrak')
                    ->where('rkn_id',$rkn_id)
                    // ->whereNotNull('no_skpemenang')
                    // ->whereNotNull('tgl_skpemenang')
                    ->count();
        return $data;         
    }

    private function tenderStat($rkn_id){
        $tahun = date('Y');
        $tahun_2 = $tahun-1;
        $tahun_3 = $tahun-2;

        $data = DB::table('kontrak')
                    ->where('rkn_id',$rkn_id)
                    // ->whereNotNull('no_skpemenang')
                    ->whereRaw("extract( year from kontrak_tanggal) = ?", [$tahun])
                    ->count();
        $data_2 = DB::table('kontrak')
                    ->where('rkn_id',$rkn_id)
                    // ->whereNotNull('no_skpemenang')
                    ->whereRaw("extract( year from kontrak_tanggal) = ?", [$tahun_2])
                    ->count();
        $data_3 = DB::table('kontrak')
                    ->where('rkn_id',$rkn_id)
                    // ->whereNotNull('no_skpemenang')
                    ->whereRaw("extract( year from kontrak_tanggal) = ?", [$tahun_3])
                    ->count();

        $table = DB::table('kontrak as kk')
                    ->join('lelang_seleksi as lls', 'kk.lls_id','=','lls.lls_id')
                    ->join('paket as pkt', 'lls.pkt_id', '=', 'pkt.pkt_id')
                    ->select(
                        'kk.kontrak_no as kontrak',
                        'pkt.pkt_nama as paket_nama',
                        'pkt.pkt_pagu as paket_pagu',
                        'kk.kontrak_mulai as mulai',
                        'kk.kontrak_akhir as akhir',
                        'kk.no_skpemenang as sk',
                        'kk.tgl_skpemenang as tgl_sk',
                        'kk.kontrak_nilai as nilai'
                    )
                    ->where('kk.rkn_id',$rkn_id)
                    // ->whereNotNull('kk.no_skpemenang')
                    // ->whereNotNull('kk.tgl_skpemenang')
                    ->whereRaw("extract( year from kk.kontrak_tanggal) = ?", [$tahun])
                    ->get();

        $table_2 = DB::table('kontrak as kk')
                    ->join('lelang_seleksi as lls', 'kk.lls_id','=','lls.lls_id')
                    ->join('paket as pkt', 'lls.pkt_id', '=', 'pkt.pkt_id')
                    ->select(
                        'kk.kontrak_no as kontrak',
                        'pkt.pkt_nama as paket_nama',
                        'pkt.pkt_pagu as paket_pagu',
                        'kk.kontrak_mulai as mulai',
                        'kk.kontrak_akhir as akhir',
                        'kk.no_skpemenang as sk',
                        'kk.tgl_skpemenang as tgl_sk',
                        'kk.kontrak_nilai as nilai'
                    )
                    ->where('kk.rkn_id',$rkn_id)
                    // ->whereNotNull('kk.no_skpemenang')
                    // ->whereNotNull('kk.tgl_skpemenang')
                    ->whereRaw("extract( year from kk.kontrak_tanggal) = ?", [$tahun_2])
                    ->get();
        $table_3 = DB::table('kontrak as kk')
                    ->join('lelang_seleksi as lls', 'kk.lls_id','=','lls.lls_id')
                    ->join('paket as pkt', 'lls.pkt_id', '=', 'pkt.pkt_id')
                    ->select(
                        'kk.kontrak_no as kontrak',
                        'pkt.pkt_nama as paket_nama',
                        'pkt.pkt_pagu as paket_pagu',
                        'kk.kontrak_mulai as mulai',
                        'kk.kontrak_akhir as akhir',
                        'kk.no_skpemenang as sk',
                        'kk.tgl_skpemenang as tgl_sk',
                        'kk.kontrak_nilai as nilai'
                    )
                    ->where('kk.rkn_id',$rkn_id)
                    // ->whereNotNull('kk.no_skpemenang')
                    // ->whereNotNull('kk.tgl_skpemenang')
                    ->whereRaw("extract( year from kk.kontrak_tanggal) = ?", [$tahun_3])
                    ->get();



        $result[0] = ['tahun'=>$tahun,'data'=>$data, 'table'=>$table];
        $result[1] = ['tahun'=>$tahun_2,'data'=>$data_2, 'table'=>$table_2];
        $result[2] = ['tahun'=>$tahun_3,'data'=>$data_3, 'table'=>$table_3];

        return $result;         
    }

    private function getKontrak($rkn_id){
        $data = DB::table('kontrak as kk')
                    ->join('lelang_seleksi as lls', 'kk.lls_id','=','lls.lls_id')
                    ->join('paket as pkt', 'lls.pkt_id', '=', 'pkt.pkt_id')
                    ->select(
                        'kk.kontrak_no as kontrak',
                        'pkt.pkt_nama as paket_nama',
                        'pkt.pkt_pagu as paket_pagu',
                        'kk.kontrak_mulai as mulai',
                        'kk.kontrak_akhir as akhir',
                        'kk.no_skpemenang as sk',
                        'kk.tgl_skpemenang as tgl_sk',
                        'kk.kontrak_nilai as nilai'
                    )
                    ->where('kk.rkn_id',$rkn_id)
                    // ->whereNotNull('kk.no_skpemenang')
                    // ->whereNotNull('kk.tgl_skpemenang')
                    ->get();
        return $data;            
    }

    private function getPeralatan($rkn_id){
        $data = DB::table('peralatan')
                ->select(
                    'alt_jenis as jenis',
                    'alt_jumlah as jumlah',
                    'alt_merktipe as tipe',
                    'alt_thpembuatan as tahun',
                    'alt_kondisi as kondisi',
                    'alt_lokasi as lokasi'
                )
                ->where('rkn_id',$rkn_id)
                ->get();
        return $data;        
    }

    public function detail($id){
        $profil = $this->getProfil($id);           
        $count_staf_ahli = $this->getCountStaf($id);
        $staf = $this->getStaf($id);
        $pengalaman = $this->getPengalaman($id);
        $ijin = $this->getIjinUsaha($id);
        $count_kontrak = $this->countKontrak($id);
        $kontrak = $this->getKontrak($id);
        $count_tender = $this->countTender($id);
        $tender_stat = $this->tenderStat($id);
        $peralatan = $this->getPeralatan($id);
        
        // var_dump($tender_stat);
        // die();
        
        return view('detail',[
            'profil' => $profil, 
            'count_staf_ahli' => $count_staf_ahli,
            'staf' => $staf,
            'pengalaman' => $pengalaman,
            'ijin' => $ijin,
            'count_kontrak' => $count_kontrak,
            'kontrak' => $kontrak,
            'count_tender' => $count_tender,
            'tender_stat' => $tender_stat,
            'peralatan' => $peralatan
        ]);
    }

    public function cari(Request $request){
        $nama = $request->input('nama');
        $npwp = $request->input('npwp');

        if ($nama != null) {
            $active = "nama";
            $string = '%'.$nama.'%';
            $data = DB::table('rekanan')
                    ->join('kabupaten', 'rekanan.kbp_id', '=', 'kabupaten.kbp_id')
                    ->select(
                        'rekanan.rkn_id as id',
                        'rekanan.rkn_npwp as npwp', 
                        'rekanan.rkn_nama as nama',
                        'kabupaten.kbp_nama as kota',
                        'rekanan.rkn_alamat as alamat')
                    ->where('rekanan.rkn_isactive','-1')
                    ->where('rekanan.rkn_status','1')
                    ->whereRaw('LOWER(rekanan.rkn_nama) LIKE LOWER(?)',[$string])
                    ->orderBy('rekanan.auditupdate','desc')
                    ->get(); 
            return view('cari',['active'=>$active,'nama'=>$nama,'data'=>$data]);        
        }

        if ($npwp != null) {
            $active = "npwp";
            $data = DB::table('rekanan')
                    ->join('kabupaten', 'rekanan.kbp_id', '=', 'kabupaten.kbp_id')
                    ->select(
                        'rekanan.rkn_id as id',
                        'rekanan.rkn_npwp as npwp', 
                        'rekanan.rkn_nama as nama',
                        'kabupaten.kbp_nama as kota',
                        'rekanan.rkn_alamat as alamat')
                    ->where('rekanan.rkn_isactive','-1')
                    ->where('rekanan.rkn_status','1')
                    ->where('rekanan.rkn_npwp',$npwp)
                    ->orderBy('rekanan.auditupdate','desc')
                    ->get(); 
            return view('cari',['active'=>$active,'nama'=>$npwp,'data'=>$data]);  
        }
    }
}
