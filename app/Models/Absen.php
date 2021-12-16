<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'jadwal_id', 
        'tahunakademik_id', 
        'krs_id',
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'p7',
        'p8',
        'p9',
        'p10',
        'p11',
        'p12',
        'p13',
        'p14',
        'p15',
        'p16',
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
