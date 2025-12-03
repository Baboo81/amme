@extends('layouts.app')

@section('content')
{{-- Banner --}}
<section class="banner-section">
    <div class="overlay">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <img src="{{ homeData()['banner']['img'] ?? '' }}" alt="{{ homeData()['banner']['alt'] ?? '' }}">
            <h1 class="">
                {{ homeData()['banner']['mainTitle'] ?? '' }}
            </h1>
        </div>
    </div>
</section>
{{-- Banner END --}}
@endsection
