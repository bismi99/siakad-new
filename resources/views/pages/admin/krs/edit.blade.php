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
                <form action="{{ route('krs.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-example-wrap">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Siswa</label>
                                        <div class="nk-int-st">
                                            <select id="user_id"
                                                class="form-control @error('user_id') is-invalid @enderror"
                                                name="user_id" required>
                                                @foreach ($siswa as $s)
                                                <option value="{{ $s->id }}"
                                                    {{ $item->user_id == $s->id ? 'selected' : '' }}>
                                                    {{ $s->name }}</option>
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
                            </div>
                            <div class="col-sm-4">
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
                            </div>
                            <div class="col-sm-4">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <label>Jadwal</label>
                                        <div class="nk-int-st">
                                            <select id="jadwal_id"
                                                class="form-control @error('jadwal_id') is-invalid @enderror"
                                                name="jadwal_id" required>
                                                @foreach ($jadwal as $j)
                                                <option value="{{ $j->id }}"
                                                    {{ $item->jadwal_id == $j->id ? 'selected' : '' }}>
                                                    {{ $j->user->name }} - {{ $j->mapel->mapel }} -
                                                    {{ $j->kelas->kelas }}</option>
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
