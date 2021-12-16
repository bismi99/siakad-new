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
                <form action="{{ route('jadwal.store') }}" method="POST">
                    @csrf
                    <div class="form-example-wrap">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Tahun Akademik</label>
                                        <select id="tahunakademik_id"
                                            class="form-control rounded-pill @error('tahunakademik_id') is-invalid @enderror"
                                            name="tahunakademik_id" value="{{ old('tahunakademik_id') }}" required
                                            autocomplete="tahunakademik_id" autofocus>
                                            <option value="" class="text-capitalize text-secondary">
                                                -- Tahun Akademik --
                                            </option>
                                            @foreach($tahunakademik as $item)
                                            <option value="{{ $item->id }}" class="text-capitalize">
                                                {{ $item->tahunakademik }}
                                            </option>
                                            @endforeach
                                            @error('tahunakademik_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select id="jurusan_id"
                                            class="form-control rounded-pill @error('jurusan_id') is-invalid @enderror"
                                            name="jurusan_id" value="{{ old('jurusan_id') }}" required
                                            autocomplete="jurusan_id" autofocus>
                                            <option value="" class="text-capitalize text-secondary">
                                                -- Jurusan --
                                            </option>
                                            @foreach($jurusan as $item)
                                            <option value="{{ $item->id }}" class="text-capitalize">
                                                {{ $item->jurusan }}
                                            </option>
                                            @endforeach
                                            @error('jurusan_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <select id="kelas_id"
                                            class="form-control rounded-pill @error('kelas_id') is-invalid @enderror"
                                            name="kelas_id" value="{{ old('kelas_id') }}" required
                                            autocomplete="kelas_id" autofocus>
                                            <option value="" class="text-capitalize text-secondary">
                                                -- Kelas --
                                            </option>
                                            @foreach($kelas as $item)
                                            <option value="{{ $item->id }}" class="text-capitalize">
                                                {{ $item->kelas }}
                                            </option>
                                            @endforeach
                                            @error('kelas_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Mata Pelajaran</label>
                                        <select id="mapel_id"
                                            class="form-control rounded-pill @error('mapel_id') is-invalid @enderror"
                                            name="mapel_id" value="{{ old('mapel_id') }}" required
                                            autocomplete="mapel_id" autofocus>
                                            <option value="" class="text-capitalize text-secondary">
                                                -- Mata Pelajaran --
                                            </option>
                                            @foreach($mapel as $item)
                                            <option value="{{ $item->id }}" class="text-capitalize">
                                                {{ $item->mapel }}
                                            </option>
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
                            <div class="col-sm-6">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Guru</label>
                                        <select id="user_id"
                                            class="form-control rounded-pill @error('user_id') is-invalid @enderror"
                                            name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id"
                                            autofocus>
                                            <option value="" class="text-capitalize text-secondary">
                                                -- Guru --
                                            </option>
                                            @foreach($guru as $item)
                                            <option value="{{ $item->id }}" class="text-capitalize">
                                                {{ $item->name }}
                                            </option>
                                            @endforeach
                                            @error('user_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Hari</label>
                                        <div class="nk-int-st">
                                            <select name="hari" id="hari" class="form-control">
                                                <option value="">-- Hari --</option>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Jumat">Jumat</option>
                                                <option value="Sabtu">Sabtu</option>
                                                <option value="Minggu">Minggu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Waktu Mulai</label>
                                        <div class="nk-int-st">
                                            <input type="time" name="waktumulai" class="form-control input-sm"
                                                placeholder="Masukan Waktu Mulai">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Waktu Selesai</label>
                                        <div class="nk-int-st">
                                            <input type="time" name="waktuselesai" class="form-control input-sm"
                                                placeholder="Masukan Waktu Selesai">
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
