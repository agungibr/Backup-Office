@extends('layouts.app')

@section('content')
    
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-xl-3 col-lg-8">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Saldo Kas</h5>
                                        <?php
          
                                            $koneksi = mysqli_connect("localhost", "root", "", "villanet");
                                            $pemasukan = mysqli_query($koneksi, 'SELECT sum(pemasukan) as pemasukan from kas');
                                            $row = mysqli_fetch_array($pemasukan);
                                            $sum = $row['pemasukan'];

                                            $pengeluaran = mysqli_query($koneksi, 'SELECT sum(pengeluaran) as pengeluaran from kas');
                                            $row2 = mysqli_fetch_array($pengeluaran);
                                            $min = $row2['pengeluaran'];

                                            $saldo = $sum - $min;
                                        ?>
                                            <span class="h2 font-weight-bold mb-0">Rp<?php echo number_format($saldo, 0, ',', '.'); ?></span>
                                        <?php?>
                                       
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                            <i class="fas fa-money-bill-wave-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-8">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Kas</h5>
                                        <span class="h2 font-weight-bold mb-0">{{$kas}}</span>                                       
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fas fa-chart-bar"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-8">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Karyawan</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $karyawan }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                            <i class="ni ni-single-02"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-8">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Laptop</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $laptop }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <i class="ni ni-laptop"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            
            
    </div>
        

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush