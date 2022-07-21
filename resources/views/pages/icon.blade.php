@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-3">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-6">
            <div class="col-lg-8">
                <h6 class="h2 text-white d-inline-block mb-0">Data Kas Kantor</h6>
            </div>
            <div class="col-lg-5">
                <a href="#" class="btn btn-sm btn-neutral">New</a>
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
                                    <tr>
                                        <td>No</td>
                                        <td>p</td>
                                        <td>g</td>
                                        <td>l</td>
                                        <td>ghg</td>
                                        <td>ffhgh</td>
                                        <td>werere</td>
                                        <td>
                                            <a href="#">Edit</a>
                                            <a href="#">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
