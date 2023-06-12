@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Penyesuaian Data Twitter</h4>
        </div>
        <div class="card-body">
            <h5>
                Data yang telah melalui pra pemrosesan dilakukan pengalihan bahasa menjadi bahasa inggris 
                secara keseluruhan, kemudian di pisahkan menjadi perkata (Tokenization) <br> <br>
                    *Silahkan tekan tombol “Sesuaikan Data” untuk memproses data anda.
                <br>
                Pemrosesan data akan memakan waktu yang 
                cukup lama berdasarkan spesifikasi device dan jumlah data
                <br>
                <br>
            </h5>
            <div class="text-center">
                <a href="{{ url('/penyesuaian-data-proses')}}" class="btn btn-success" onclick="event.preventDefault(); confirmPenyesuaian()">
                    <i class="fas fa-arrow-right"></i>
                    Sesuaikan Data
                </a>
            </div>
        </div>
    </div>  
</div>
<!-- /.container-fluid -->

@endsection