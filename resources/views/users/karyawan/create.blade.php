@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-3">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-6">
            <div class="col-lg-8">
                <h6 class="h1 text-white d-inline-block mb-0">Create Data Karyawan</h6>
            </div>
        </div>
      </div>
    </div>
    <div class="container mt--5 mx-auto">
        <div class="card bg-secondary shadow center" style="width: 60rem;">
            <div class="card-body">
                <form action="{{url('storekaryawan')}}" method="post" enctype="multipart/form-data" autocomplete="on">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">{{ __('Kas Kantor') }}</h6>
                    <div class="pl-lg-4">
                        <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-nama">{{ __('Nama') }}</label>
                            <input type="text" name="nama" id="input-nama" class="form-control form-control-alternative{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="Nama" value="{{ old('nama') }}">
                            @if ($errors->has('nama'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-alamat">{{ __('Alamat') }}</label>
                            <input type="text" name="alamat" id="input-alamat" class="form-control form-control-alternative{{ $errors->has('alamat') ? ' is-invalid' : '' }}" placeholder="Alamat" value="{{ old('alamat') }}">
                            @if ($errors->has('alamat'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('telp') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-telp">{{ __('Telp') }}</label>
                            <input type="text" name="telp" id="input-telp" class="form-control form-control-alternative{{ $errors->has('telp') ? ' is-invalid' : '' }}" placeholder="Telp" value="{{ old('telp') }}">
                            @if ($errors->has('telp'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('telp') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                            <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="text-center">
                            <a class="btn btn-success mt-4" href="{{url('/indexkaryawan')}}" role="button" aria-expanded="false" aria-controls="collapseExample">Back</a>
                            <button type="submit" class="btn btn-success mt-4">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection