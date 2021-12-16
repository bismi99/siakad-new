<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahunakademik_id',
        'jurusan_id',
        'kelas_id',
        'mapel_id',
        'user_id',
        'hari',
        'waktumulai',
        'waktuselesai',
    ];
    public function tahunakademik()
    {
        return $this->belongsTo(TahunAkademik::class);
    }
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
