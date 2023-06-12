@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <!-- Page Heading -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tampilan Grafik Hasil</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myPieChart" width="301" height="245" style="display: block; width: 301px; height: 245px;" class="chartjs-render-monitor"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-danger"></i> Sentimen Negatif
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Sentimen Positif
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Sentimen Netral
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myBarChart" width="668" height="320" style="display: block; width: 668px; height: 320px;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <!-- Page Heading -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">CONFUSION MATRIX</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <h6><b>AKURASI</b> : 0,5016949</h6>
                    <h6><b>PRESISI</b> : 0,5862069</h6>
                    <h6><b>PRESISI NEGATIF</b> : 0,5462185</h6>
                    <h6><b>PRESISI NETRAL</b> : 0,4152541</h6>
                    <h6><b>RECALL</b> : 0,2165605</h6>
                    <h6><b>RECALL NEGATIF</b> : 0,4113924</h6>
                    <h6><b>RECALL POSITIF</b> : 0,3858268</h6>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection