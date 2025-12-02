@extends('layouts.app')

@section('content')
{{-- Banner --}}
<section class="banner-section d-flex align-items-center justify-content-center text-center">
    <div class="overlay">
        <div class="container">
            <h1 class="display-4 fw-bold">
                {{ homeData()['mainTitle'] ?? '' }}
            </h1>
            <p class="lead mt-3"></p>
        </div>
    </div>
</section>
{{-- Banner END --}}
@endsection
