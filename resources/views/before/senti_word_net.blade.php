@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Algoritma Lexicon Based</h4>
        </div>
        <div class="card-body">
            <h5>
                Data yang telah disesuaikan dengan kebutuhan sistem kemudian di proses menggunakan algoritma
                Lexicon Based berdasarkan SentiWordNet untuk dilakukan klasifikasi pada tiap kata yang diperoleh.  <br> <br>
                *Silahkan tekan tombol “Klasifikasi Data” untuk memproses data anda.
                <br>
                Pemrosesan data akan memakan waktu yang 
                cukup lama berdasarkan spesifikasi device dan jumlah data
                <br>
                <br>
            </h5>
            <div class="text-center">
                <a href="{{ url('/senti-word-net-proses')}}" class="btn btn-success" onclick="event.preventDefault(); confirmKlasifikasi()">
                    <i class="fas fa-arrow-right"></i>
                    Klasifikasi Data
                </a>
            </div>
        </div>
    </div>  
</div>
<!-- /.container-fluid -->

@endsection