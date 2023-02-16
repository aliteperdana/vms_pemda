<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak extends Model
{
    use HasFactory;
    protected $table = 'kontrak';
    public $timestamps = false;
    protected $fillable = [
        'kontrak_id',
        'lls_id',
        'rkn_id',
        'kontrak_no',
        'kontrak_nilai',
        'kontrak_mulai',
        'kontrak_akhir',
        'kontrak_lingkup',
        'kontrak_id_attacment',
        'audittype',
        'audituser',
        'auditupdate',
        'ppk_id',
        'kontrak_norekening',
        'kontrak_tanggal',
        'kontrak_kota',
        'kontrak_waktu',
        'kontrak_wakil_penyedia',
        'kontrak_jabatan_wakil',
        'kontrak_tipe_penyedia',
        'kontrak_kso',
        'kontrak_sskk',
        'kontrak_sskk_perubahan',
        'kontrak_id_attacment2',
        'kontrak_sskk_attacment',
        'kontrak_namarekening',
        'kontrak_lingkup_pekerjaan',
        'kontrak_namapemilikrekening',
        'alasanubah_kontrak_nilai',
        'jabatan_ppk_kontrak',
        'anggota_kso',
        'no_skpemenang',
        'tgl_skpemenang',
        'kode_akun_kegiatan',
        'lama_durasi_penyerahan1',
        'lama_durasi_pemeliharaan',
        'nilai_pdn',
        'nip_ppk_kontrak',
        'no_sk_ppk_kontrak',
        'nama_ppk_kontrak'
    ];
}
