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
                                    <h2>Data Jadwal</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <a href="{{ route('jadwal.create') }}" data-toggle="tooltip" data-placement="left"
                                    title="Tambah Data" class="btn"><i class="notika-icon notika-up-arrow"> Tambah
                                        Data</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->
<!-- Normal Table area Start-->
<div class="normal-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="normal-table-list">
                    <div class="bsc-tbl">
                        <table class="table table-sc-ex">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Tahun Akademik</th>
                                    <th>Jurusan</th>
                                    <th>Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Guru</th>
                                    <th>Hari</th>
                                    <th>waktu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $items as $no =>$item)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $item->tahunakademik->tahunakademik }}</td>
                                    <td>{{ $item->jurusan->jurusan }}</td>
                                    <td>{{ $item->kelas->kelas }}</td>
                                    <td>{{ $item->mapel->mapel }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->hari }}</td>
                                    <td>{{ $item->waktumulai }} - {{ $item->waktuselesai }}</td>
                                    <td>
                                        <div class="button">
                                            <a href="{{ route('jadwal.edit', $item->id) }}"
                                                class="btn btn-warning btn-notika-warning waves-effect"
                                                data-toggle="tooltip" data-placement="left" title="Edit Data">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a
                                                onclick="return confirm('Yakin untuk menghapus jadwal {{$item->title}}? ')">
                                                <form action="{{ route('jadwal.destroy', $item->id) }}" method="post"
                                                    style="display: inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" data-toggle="tooltip"
                                                        data-placement="right" title="Hapus Data">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-center">Data tidak ada</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Normal Table area End-->
@endsection
