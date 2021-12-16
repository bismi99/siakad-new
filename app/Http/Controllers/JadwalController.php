<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\TahunAkademik;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use App\Http\Requests\JadwalRequest;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Jadwal::all();
        // dd($items);
        return view('pages.admin.jadwal.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tahunakademik = TahunAkademik::all();
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        $guru = User::where('role', 'Guru')->get();
        $items = Jadwal::all();
        return view('pages.admin.jadwal.create', compact('tahunakademik','jurusan','kelas','mapel','guru','items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JadwalRequest $request)
    {
        $data = $request->all();

        Jadwal::create($data);
        // dd($data;)
        return redirect()->route('jadwal.index');
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
        $item = Jadwal::findOrFail($id);
        $tahunakademik = TahunAkademik::all();
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        $guru = User::where('role', 'Guru')->get();
        return view('pages.admin.jadwal.edit', compact('tahunakademik','jurusan','kelas','mapel','guru','item'));
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
        
        $item = Jadwal::findOrFail($id);
        $item->update($data);

        return redirect()->route('jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Jadwal::findOrFail($id);

        $item->delete();
        return redirect()->route('jadwal.index');
    }
}
