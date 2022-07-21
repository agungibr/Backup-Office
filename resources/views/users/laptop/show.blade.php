@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-3">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-6">
            <div class="col-lg-8">
                <h6 class="h1 text-white d-inline-block mb-0">Edit Data Laptop</h6>
            </div>
        </div>
      </div>
    </div>
    <div class="container mt--5 mx-auto">
        <div class="card bg-secondary shadow center" style="width: 60rem;">
            <div class="card-body">
                <form action="{{ url('/updatelaptop/'.$data->id) }}" method="post" enctype="multipart/form-data" autocomplete="on">
                    @csrf
                    <div class="pl-lg-4">
                        <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-nama">{{ __('Nama') }}</label>
                            <input type="text" name="nama" id="input-nama" class="form-control form-control-alternative{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="Nama" value="{{ $data->nama }}">
                            @if ($errors->has('nama'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('tglambil') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-date">{{ __('Tanggal Ambil') }}</label>
                            <input type="date" name="tglambil" id="input-date" class="form-control form-control-alternative{{ $errors->has('tglambil') ? ' is-invalid' : '' }}" placeholder="D/m/Y" value="{{ $data->tglambil }}">
                            @if ($errors->has('tglambil'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('tglambil') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('serialnumber') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-serialnumber">{{ __('Serial Number') }}</label>
                            <input type="text" name="serialnumber" id="input-serialnumber" class="form-control form-control-alternative{{ $errors->has('serialnumber') ? ' is-invalid' : '' }}" placeholder="Serial Number" value="{{ $data->serialnumber }}">
                            @if ($errors->has('serialnumber'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('serialnumber') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('merk') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-merk">{{ __('Merk') }}</label>
                            <input type="text" name="merk" id="input-merk" class="form-control form-control-alternative{{ $errors->has('merk') ? ' is-invalid' : '' }}" placeholder="Merk" value="{{ $data->merk }}">
                            @if ($errors->has('merk'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('merk') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('notes') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-notes">{{ __('Notes') }}</label>
                            <textarea name="notes" id="input-notes" class="form-control form-control-alternative{{ $errors->has('notes') ? ' is-invalid' : '' }}" placeholder="Notes">{{ $data->notes }}</textarea>
                            @if ($errors->has('notes'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('notes') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="text-center">
                            <a class="btn btn-success mt-4" href="{{url('/indexlaptop')}}" role="button" aria-expanded="false" aria-controls="collapseExample">Back</a>
                            <button type="submit" class="btn btn-success mt-4">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection