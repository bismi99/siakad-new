<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'jadwal_id', 'tahunakademik_id'
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
    public function absen()
    {
        return $this->belongsTo(Absen::class);
    }
}
