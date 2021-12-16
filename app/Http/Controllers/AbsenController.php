<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\TahunAkademik;
use App\Models\Absen;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\User;
use DateTime;
use Auth;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //mahasiswa
    public function index()
    {
        // ambil tahun akademik yg aktif
        $ta = TahunAkademik::where('status', 'Aktif')->first();
        // ambil data absen mahasiswa
        $absens = Absen::where('user_id', Auth::user()->id)->get();
        // dd($absens);
        return view('pages.siswa.absen.index')->with([
            'ta' => $ta,
            'absens' => $absens,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //dosen
    {
        $items = Absen::where('jadwal_id', $id)->get();
        $jadwal = Jadwal::findOrFail($id);
        $ta = TahunAkademik::where('status', 'Aktif')->first();
        // dd($items);
        return view('pages.guru.absen.show',compact('items','jadwal','ta','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Absen::where('jadwal_id', $id)->with('user')->get();
        $jadwal = Jadwal::findOrFail($id);
        // dd($jadwal);
        return view('pages.guru.absen.edit')->with([
            'items' => $items,
            'jadwal' => $jadwal,
            'id' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        foreach($data['idSiswa'] as $index=>$item){
            Absen::where('user_id', $data['idSiswa'][$index])
            ->where('jadwal_id', $id)
            ->update([
                'p1' => $data['p1'][$index],
                'p2' => $data['p2'][$index],
                'p3' => $data['p3'][$index],
                'p4' => $data['p4'][$index],
                'p5' => $data['p5'][$index],
                'p6' => $data['p6'][$index],
                'p7' => $data['p7'][$index],
                'p8' => $data['p8'][$index],
                'p9' => $data['p9'][$index],
                'p10' => $data['p10'][$index],
                'p11' => $data['p11'][$index],
                'p12' => $data['p12'][$index],
                'p13' => $data['p13'][$index],
                'p14' => $data['p14'][$index],
                'p15' => $data['p15'][$index],
                'p16' => $data['p16'][$index],
            ]);
        }

        return redirect()->route('absen.show', $id)->with('status', 'Absen berhasil diisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function list(Request $request)
    {
        // ambil tahun akademik
        $ta = TahunAkademik::where('status', 'Aktif')->first();
        // panggil data schedule berdasarkan id dosen dan ta
        $data = Jadwal::where('user_id', Auth::user()->id)->where('tahunakademik_id', $ta->id)->with('mapel')->get();
        // dd($data);
        return view('pages.guru.absen.list',compact('data'));
    }

    public function cetak($id)
    {
        $items = Absen::where('id_schedule', $id)->with('mahasiswas')->get();
        $schedule = Schedule::findOrFail($id);
        $ta = TahunAkademik::where('status', 1)->first();

        // ambil tgl sekarang
        $date = new DateTime('now');
        $dateNow = $date->format('d-M-Y');
        $tgl = preg_replace("/-/"," ", $dateNow);

        return view('dosen.absen.cetak')->with([
            'items' => $items,
            'schedule' => $schedule,
            'ta' => $ta,
            'tgl' => $tgl,
        ]);
    }
}
