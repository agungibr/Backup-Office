@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-3">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-6">
            <div class="col-lg-8">
                <h6 class="h1 text-white d-inline-block mb-0">Data Kas Kantor</h6>
            </div>
            <div class="col-lg-6">
                <a href="{{url('createkas')}}" class="btn btn-sm btn-neutral">New</a>
            </div>
            
        </div>
      </div>
    </div>
    <div class="container-fluid mt--4">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="row m-t-90">
                    <div class="col-md-12" style="width: 6000px">
                        <div class="table-responsive">
                            <table class="table align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Pemasukan</th>
                                        <th>Pembayaran</th>
                                        <th>Pengeluaran</th>
                                        <th>Notes</th>
                                        <th>Saldo</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($data as $p => $dataKas)
                                    <tr>
                                        <td>{{ $p + 1 }}</td>
                                        <td>{{ $dataKas->tanggal }}</td>
                                        <td>Rp {{ $dataKas->pemasukan }}</td>
                                        <td>{{ $dataKas->pembayaran }}</td>
                                        <td>Rp {{ $dataKas->pengeluaran }}</td>
                                        <td>{{ $dataKas->notes }}</td>
                                        <td>Rp {{ $dataKas->pemasukan }}</td>
                                        <td>
                                            <a href="{{url('/showkas/'.$dataKas->id)}}"><i class="far fa-edit" style="color:green"></i></a>
                                            <a href="#"> <i type="button" class="fas fa-trash-alt" style="color:red" data-toggle="modal" data-target="#exampleModal"></i></a>
                                            
                                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this data?
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                      <a href="{{url('/destroykas/'.$dataKas->id)}}"><button type="button" class="btn btn-primary">Delete</button></a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
