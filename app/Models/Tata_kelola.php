<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tata_kelola extends Model
{
    use HasFactory;

    protected $fillable = [
        'dok_kak_tor', 'laporan_dpa', 'sk_pengelola_apk',
        'sk_helpdesk_apk', 'laporan_akhir', 'sop',
        'panduan_apk', 'link_video_apk', 'panduan_apkserver',
        'dok_mnjresiko', 'dok_api', 'file_scapk', 'assessment_id'
    ];

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function penilaian_tata_kelola()
    {
        return $this->hasOne(Penilaian_tata_kelola::class);
    }

    public function getDokKakTorAttribute($value)
    {
        return asset('/storage/assessment/tata_kelola/dok_kak_tor/' . $value);
    }

    public function getLaporanDpaAttribute($value)
    {
        return $value ? asset('/storage/assessment/tata_kelola/laporan_dpa/' . $value) : null;
    }

    public function getSkPengelolaApkAttribute($value)
    {
        return asset('/storage/assessment/tata_kelola/sk_pengelola_apk/' . $value);
    }

    public function getSkHelpdeskApkAttribute($value)
    {
        return asset('/storage/assessment/tata_kelola/sk_helpdesk_apk/' . $value);
    }

    public function getLaporanAkhirAttribute($value)
    {
        return asset('/storage/assessment/tata_kelola/laporan_akhir/' . $value);
    }

    public function getSopAttribute($value)
    {
        return asset('/storage/assessment/tata_kelola/sop/' . $value);
    }

    public function getPanduanApkAttribute($value)
    {
        return asset('/storage/assessment/tata_kelola/panduan_apk/' . $value);
    }

    public function getPanduanApkserverAttribute($value)
    {
        return asset('/storage/assessment/tata_kelola/panduan_apkserver/' . $value);
    }

    public function getDokMnjresikoAttribute($value)
    {
        return asset('/storage/assessment/tata_kelola/dok_mnjresiko/' . $value);
    }

    public function getDokApiAttribute($value)
    {
        return asset('/storage/assessment/tata_kelola/dok_api/' . $value);
    }

    public function getFileScapkAttribute($value)
    {
        return asset('/storage/assessment/tata_kelola/file_scapk/' . $value);
    }
}
