<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Krs;
use App\Models\TahunAkademik;
use App\Models\Jadwal;
use App\Models\User;
use App\Models\Absen;
use App\Models\Nilai;
use App\Http\Requests\KrsRequest;

class KrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Krs::all();
        // dd($items);
        return view('pages.admin.krs.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tahunakademik = TahunAkademik::all();
        $siswa = User::where('role', 'Siswa')->get();
        $guru = User::where('role', 'Guru')->get();
        $jadwal = Jadwal::all();
        $items = Krs::all();
        return view('pages.admin.krs.create', compact('tahunakademik','siswa','items','jadwal','guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KrsRequest $request)
    {
        $data = $request->all();
        $data = new Krs();
        $data->user_id = $request->user_id;
        $data->jadwal_id = $request->jadwal_id;
        $data->tahunakademik_id = $request->tahunakademik_id;
        $data->save();
        // dd($data);
        Absen::insert([
            'krs_id' => $data->id,
            'user_id' => $request->user_id,
            'jadwal_id' => $request->jadwal_id,
            'tahunakademik_id' => $request->tahunakademik_id,
        ]);
        Nilai::insert([
            'krs_id' => $data->id,
            'user_id' => $request->user_id,
            'jadwal_id' => $request->jadwal_id,
            'tahunakademik_id' => $request->tahunakademik_id,
        ]);
        return redirect()->route('krs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Krs::findOrFail($id);
        $tahunakademik = TahunAkademik::all();
        $siswa = User::where('role', 'Siswa')->get();
        $jadwal = Jadwal::all();
        return view('pages.admin.krs.edit', compact('tahunakademik','siswa','item','jadwal'));
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
        
        $item = Krs::findOrFail($id);
        $item->update($data);

        return redirect()->route('krs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Krs::findOrFail($id);

        $item->delete();
        return redirect()->route('krs.index');
    }
}
