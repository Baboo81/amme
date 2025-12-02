@extends('layouts.app')

@section('content')
{{-- Banner --}}
<section class="banner-section d-flex align-items-center justify-content-center text-center" style="position: relative; height: 100vh; background: url('{{ asset('assets/img/banner.jpg') }}') no-repeat center center; background-size: cover;">
    <div class="overlay" style="position: absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0,0,0,0.5);"></div>
    <div class="container position-relative" style="z-index: 2; color: #fff;">
        <h1 class="display-4 fw-bold"></h1>
        <p class="lead mt-3"></p>
    </div>
</section>
{{-- Banner END --}}
@endsection
