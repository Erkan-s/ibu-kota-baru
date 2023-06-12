@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Pra Pemrosesan Data Twitter</h4>
        </div>
        <div class="card-body">
            <h5>
                Pra pemrosesan dilakukan untuk menghapus URL, Mention, Username, Retweet, spasi berlebih, Angka, Tanda Baca 
                (Case Folding), typo, Stopword , penyeragaman, dan perubahan menjadi kata dasar (Lemmatization) pada data 
                yang telah didapatkan <br> <br>
                *Silahkan tekan tombol “Proses Data” untuk memproses data anda.
                <br>
                Pemrosesan data akan memakan waktu yang 
                cukup lama berdasarkan spesifikasi device dan jumlah data
                <br>
            </h5>
            <br>
            <div class="text-center">
                <a href="{{ url('/penyesuaian-data-proses')}}" class="btn btn-success" onclick="event.preventDefault(); confirmPraPemrosesan()">
                    <i class="fas fa-arrow-right"></i>
                    Proses Data
                </a>
            </div>
        </div>
    </div>  
</div>
<!-- /.container-fluid -->

@endsection