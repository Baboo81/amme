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
                <div><span> {{ homeData()['about']['subTitle'] ?? '' }} </span> <span
                        class="description-title my-3"></span></div>
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
                    @foreach (homeData()['about']['paragraphs'] as $paragraph)
                    <p class="lead">{{ $paragraph }}</p>
                    @endforeach

                    <div class="row g-4 mt-3">

                        {{-- Features dynamiques --}}
                        @foreach (homeData()['about']['features'] as $feature)
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

{{-- Section : services --}}
<section id="services" class="section-services">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <div class="col-3">
            <h2> {{ homeData()['services']['mainTitle'] ?? '' }} </h2>
            <div><span> {{ homeData()['services']['subTitle'] ?? '' }} </span> <span class="description-title"></span>
            </div>
        </div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="service-header">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12 my-5">
                    <div class="service-intro">
                        <h2 class="service-heading mb-4">
                            <div> {{ homeData()['services']['service_heading_1'] ?? '' }} </div>
                            <div><span>{{ homeData()['services']['service_heading_2'] ?? '' }}</span></div>
                        </h2>
                        <article>
                            <p class="lead">
                                {!! nl2br(e(homeData()['services']['txt'])) !!}
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        {{-- Section : services END --}}

        {{-- Section : outils --}}

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div class="col-3">
                <h2> {{ homeData()['outils']['mainTitle'] ?? '' }} </h2>
                <div><span> {{ homeData()['outils']['subTitle'] ?? '' }} </span> <span class="description-title"></span>
                </div>
            </div>
        </div>
        <!-- End Section Title -->
        <div class="row justify-content-center my-5">
            @foreach (homeData()['outils']['features'] as $feature)
            <div class="col-lg-6 col-md-12 my-3" data-aos="fade-up" data-aos-delay="{{ $feature['delay'] }}">
                <div class="service-card position-relative z-1">
                    <div class="service-icon">
                        <i class="{{ $feature['icon'] }}"></i>
                    </div>
                    <a href="{{ $feature['link'] }}"
                        class="card-action d-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                    <h3>
                        <a href="{{ $feature['link'] }}">
                            {{ $feature['title'] }} <span>{{ $feature['subtitle'] }}</span>
                        </a>
                    </h3>
                    <p>
                        {{ $feature['text'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- Section : outild END --}}
</section>

{{-- Section : contact --}}
<section class="contact section-services">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title mb-5" data-aos="fade-up">
            <div class="col-3">
                <h2> {{ homeData()['contact']['mainTitle'] ?? '' }} </h2>
                <div><span> {{ homeData()['contact']['subTitle'] ?? '' }} </span> <span
                        class="description-title"></span></div>
            </div>
        </div>
        <!-- End Section Title -->
        <div class="row justify-content-center">

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card p-4 shadow-sm rounded-3 my-5">

                    <h3 class="my-5 text-center">
                        Envoyez-moi un message
                    </h3>

                    <form method="POST" action="{{ route('contact.send') }}" class="row g-3 my-5">
                        @csrf

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nom</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Email</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-envelope-at"></i></span>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Sujet</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-chat-left-dots"></i></span>
                                <input type="text" name="subject" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Message</label>
                            <textarea name="message" rows="4" class="form-control" required></textarea>
                        </div>

                        <div class="text-center my-5">
                            <button class="btn btn-outline-light px-4 py-2 rounded-pill">
                                <i class="bi bi-send-check me-2"></i>
                                Envoyer le message
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
{{-- Section : contact END --}}
@endsection
