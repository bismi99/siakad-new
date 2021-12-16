@extends('layouts.main')

@section('content')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Create Jadwal</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->
<!-- Form Examples area start-->
<div class="form-example-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="{{ route('jadwal.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-example-wrap">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Mata Pelajaran</label>
                                        <div class="nk-int-st">
                                            <select id="mapel_id"
                                                class="form-control @error('mapel_id') is-invalid @enderror"
                                                name="mapel_id" required>
                                                @foreach ($mapel as $m)
                                                <option value="{{ $m->id }}"
                                                    {{ $item->mapel_id == $m->id ? 'selected' : '' }}>
                                                    {{ $m->mapel }}</option>
                                                @endforeach
                                                @error('mapel_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Tahun Akademik</label>
                                        <div class="nk-int-st">
                                            <select id="tahunakademik_id"
                                                class="form-control @error('tahunakademik_id') is-invalid @enderror"
                                                name="tahunakademik_id" required>
                                                @foreach ($tahunakademik as $ta)
                                                <option value="{{ $ta->id }}"
                                                    {{ $item->tahunakademik_id == $ta->id ? 'selected' : '' }}>
                                                    {{ $ta->tahunakademik }}</option>
                                                @endforeach
                                                @error('tahunakademik_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <div class="nk-int-st">
                                            <select id="jurusan_id"
                                                class="form-control @error('jurusan_id') is-invalid @enderror"
                                                name="jurusan_id" required>
                                                @foreach ($jurusan as $j)
                                                <option value="{{ $j->id }}"
                                                    {{ $item->jurusan_id == $j->id ? 'selected' : '' }}>
                                                    {{ $j->jurusan }}</option>
                                                @endforeach
                                                @error('jurusan_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <div class="nk-int-st">
                                            <select id="kelas_id"
                                                class="form-control @error('kelas_id') is-invalid @enderror"
                                                name="kelas_id" required>
                                                @foreach ($kelas as $k)
                                                <option value="{{ $k->id }}"
                                                    {{ $item->kelas_id == $k->id ? 'selected' : '' }}>
                                                    {{ $k->kelas }}</option>
                                                @endforeach
                                                @error('kelas_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Guru</label>
                                        <div class="nk-int-st">
                                            <select id="user_id"
                                                class="form-control @error('user_id') is-invalid @enderror"
                                                name="user_id" required>
                                                @foreach ($guru as $g)
                                                <option value="{{ $g->id }}"
                                                    {{ $item->user_id == $g->id ? 'selected' : '' }}>
                                                    {{ $g->name }}</option>
                                                @endforeach
                                                @error('user_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Hari</label>
                                        <div class="nk-int-st">
                                            <select id="hari" class="form-control" name="hari" required>
                                                <option class="text-capitalize" @if(old('hari',$item->hari) === 'Senin')
                                                    selected @endif>
                                                    Senin
                                                </option>
                                                <option class="text-capitalize" @if(old('hari',$item->hari) ===
                                                    'Selasa')
                                                    selected
                                                    @endif>
                                                    Selasa
                                                </option>
                                                <option class="text-capitalize" @if(old('hari',$item->hari) === 'Rabu')
                                                    selected @endif>
                                                    Rabu
                                                </option>
                                                <option class="text-capitalize" @if(old('hari',$item->hari) === 'Kamis')
                                                    selected @endif>
                                                    Kamis
                                                </option>
                                                <option class="text-capitalize" @if(old('hari',$item->hari) === 'Jumat')
                                                    selected @endif>
                                                    Jumat
                                                </option>
                                                <option class="text-capitalize" @if(old('hari',$item->hari) === 'Sabtu')
                                                    selected @endif>
                                                    Sabtu
                                                </option>
                                                @error('hari')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Waktu Mulai</label>
                                        <div class="nk-int-st">
                                            <input type="time" name="waktumulai" class="form-control input-sm"
                                                placeholder="Masukan Waktu" value="{{ $item->waktumulai }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Waktu Selesai</label>
                                        <div class="nk-int-st">
                                            <input type="time" name="waktuselesai" class="form-control input-sm"
                                                placeholder="Masukan Waktu" value="{{ $item->waktuselesai }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success notika-btn-success form-control"
                                type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form Examples area End-->
@endsection
