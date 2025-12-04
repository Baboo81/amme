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

{{-- Section : about --}}
<section class="about">
    <!-- Section Title -->
    <div class="container section-title">
        <div class="row">
            <div class="col-3" data-aos="fade-down" data-aos-duration="1000">
                <h2>
                    {{ homeData()['about']['mainTitle'] ?? '' }}
                </h2>
                <div><span> {{ homeData()['about']['subTitle'] ?? '' }} </span> <span class="description-title my-3"></span></div>
            </div>
        </div>
    </div>
    <!-- End Section Title -->

    <div class="container">

        <div class="row gx-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="800">
                <div class="about-image position-relative">
                    <img src="assets/img/about/about-portrait-1.webp" class="img-fluid rounded-4 shadow-sm"
                        alt="About Image" loading="lazy">
                    <div class="experience-badge">
                        <span class="years">20+</span>
                        <span class="text">années d'expertise</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="800">
                <div class="about-content">

                    <h2>{{ homeData()['about']['title'] }}</h2>

                    {{-- Paragraphes dynamiques --}}
                    @foreach(homeData()['about']['paragraphs'] as $paragraph)
                        <p class="lead">{{ $paragraph }}</p>
                    @endforeach

                    <div class="row g-4 mt-3">

                        {{-- Features dynamiques --}}
                        @foreach(homeData()['about']['features'] as $feature)
                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                                <div class="feature-item">
                                    <i class="{{ $feature['icon'] }}"></i>
                                    <h5>{{ $feature['title'] }}</h5>
                                    <p>{{ $feature['text'] }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
</section>
{{-- Section : about END --}}
@endsection
