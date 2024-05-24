<!-- resources/views/hero.blade.php -->
@extends('layouts.master')

@section('title', 'Hero Page')

@section('content')
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-lg-6 mx-auto">
            <div class="hero-section text-center text-lg-start mb-5">
                <h1 class="fw-bold">Selamat Datang di Marketplace Kami</h1>
                <p class="lead">
                    Temukan beragam produk berkualitas yang Anda butuhkan di sini. Dari pakaian, perlengkapan rumah tangga, hingga peralatan elektronik, kami menyediakan koleksi produk terbaik untuk Anda. Jelajahi sekarang dan temukan penawaran menarik yang sesuai dengan kebutuhan Anda!
                </p>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Lihat Produk</a>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('th.jpg') }}" class="img-fluid" alt="Hero Image">
        </div>
    </div>
</div>
@endsection
