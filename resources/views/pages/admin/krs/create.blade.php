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
                                    <i class="fa fa-clipboard"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Create Krs</h2>
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
                <form action="{{ route('krs.store') }}" method="POST">
                    @csrf
                    <div class="form-example-wrap">
                        <div class="row">
                            <div class="col-sm-4">
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
                            </div>
                            <div class="col-sm-4">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Siswa</label>
                                        <select id="user_id"
                                            class="form-control rounded-pill @error('user_id') is-invalid @enderror"
                                            name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id"
                                            autofocus>
                                            <option value="" class="text-capitalize text-secondary">
                                                -- Siswa --
                                            </option>
                                            @foreach($siswa as $item)
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
                            </div>
                            <div class="col-sm-4">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Jadwal</label>
                                        <select id="jadwal_id"
                                            class="form-control rounded-pill @error('jadwal_id') is-invalid @enderror"
                                            name="jadwal_id" value="{{ old('jadwal_id') }}" required
                                            autocomplete="jadwal_id" autofocus>
                                            <option value="" class="text-capitalize text-secondary">
                                                -- Jadwal --
                                            </option>
                                            @foreach($jadwal as $item)
                                            <option value="{{ $item->id }}" class="text-capitalize">
                                                {{ $item->tahunakademik->tahunakademik }} -
                                                {{ $item->jurusan->jurusan }} -
                                                {{ $item->kelas->kelas }} -
                                                {{ $item->mapel->mapel }} - {{ $item->user->name }}
                                            </option>
                                            @endforeach
                                            @error('jadwal_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-5">
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
