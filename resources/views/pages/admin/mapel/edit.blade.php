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
                                    <i class="fa fa-book"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Create Mata Pelajaran</h2>
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
                <form action="{{ route('mapel.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-example-wrap">
                        <div class="form-group d-none">
                            <input class="form-control" name="id" type="text" value="{{ $item->id }}">
                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Kode</label>
                                <div class="nk-int-st">
                                    <input type="text" name="kode" class="form-control input-sm"
                                        placeholder="Masukan Mata Pelajaran" value="{{ $item->kode }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Mata Pelajaran</label>
                                <div class="nk-int-st">
                                    <input type="text" name="mapel" class="form-control input-sm"
                                        placeholder="Masukan Mata Pelajaran" value="{{ $item->mapel }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form Examples area End-->
@endsection
