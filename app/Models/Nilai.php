<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'jadwal_id',
        'tahunakademik_id',
        'krs_id',
        'nilai_absen',
        'nilai_tugas',
        'nilai_uts',
        'nilai_uas',
        'nilai_akhir',
        'nilai_huruf',
    ];
    public function tahunakademik()
    {
        return $this->belongsTo(TahunAkademik::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
    public function krs()
    {
        return $this->belongsTo(Krs::class);
    }
}
