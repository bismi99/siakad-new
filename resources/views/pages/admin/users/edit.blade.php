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
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Edit User</h2>
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
                <form action="{{ route('users.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-example-wrap">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="nk-int-st">
                                    <input type="text" name="name" class="form-control input-sm" placeholder="Enter Name" value="{{ $item->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Email</label>
                                <div class="nk-int-st">
                                    <input type="text" name="email" class="form-control input-sm" placeholder="Enter Email" value="{{ $item->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="nk-int-st">
                                    <input type="password" name="password" class="form-control input-sm" placeholder="Enter Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select id="role" class="form-control rounded-pill" name="role" required>
                                    <option value=""  class="text-capitalize text-secondary">
                                        -- Role --
                                    </option>
                                    <option class="text-capitalize" @if(old('role',$item->role) === 'Admin') selected @endif>
                                        Admin
                                    </option>
                                    <option class="text-capitalize" @if(old('role',$item->role) === 'Guru') selected @endif>
                                        Guru
                                    </option>
                                    <option class="text-capitalize" @if(old('role',$item->role) === 'Siswa') selected @endif>
                                        Siswa
                                    </option>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </select>
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