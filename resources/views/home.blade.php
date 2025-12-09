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
                <h2>Services</h2>
                <div><span>Méthode de travail</span> <span class="description-title"></span></div>
            </div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="service-header">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12 my-5">
                        <div class="service-intro">
                            <h2 class="service-heading mb-4">
                                <div>La digitalisation,</div>
                                <div><span>au service de votre entreprise</span></div>
                            </h2>
                            <article>
                                <p class="lead">
                                    Votre partenaire comptable, au service de votre activité.<br />J'accompagne les
                                    indépendants dans la gestion quotidienne de leur comptabilité. Mon objectif, est
                                    d'offrir un service fiable, clair et accessible, afinque vous puissiez vous concentrer
                                    pleinement sur votre activité. De la tenue comptable au suivi de vos obligations
                                    fiscales, je vous propose un accompagnement personnalisé, adapté à votre réalité
                                    professionnelle.
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-header">
                <h2 class="service-heading mb-5">
                    <div>Technologies,</div>
                    <div><span>au service de votre comptabilité</span></div>
                </h2>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card position-relative z-1">
                        <div class="service-icon">
                            <i class="bi bi-palette"></i>
                        </div>
                        <a href="service-details.html"
                            class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="service-details.html">
                                Creative <span>branding</span>
                            </a>
                        </h3>
                        <p>
                            Nulla facilisi. Maecenas eget magna neque. Suspendisse potenti. Curabitur eleifend nisi non
                            magna vulputate, vel condimentum libero tempus. Proin consectetur feugiat diam.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card position-relative z-1">
                        <div class="service-icon">
                            <i class="bi bi-gem"></i>
                        </div>
                        <a href="service-details.html"
                            class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="service-details.html">
                                Design <span>systems</span>
                            </a>
                        </h3>
                        <p>
                            Praesent euismod varius tellus, vel bibendum nunc interdum at. Donec vehicula diam vel metus
                            venenatis convallis. Aliquam erat volutpat. Etiam viverra magna sit amet.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card position-relative z-1">
                        <div class="service-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <a href="service-details.html"
                            class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="service-details.html">
                                Growth <span>acceleration</span>
                            </a>
                        </h3>
                        <p>
                            Aenean vel augue vel nisi bibendum posuere. Phasellus in lacus quis urna sodales dignissim. Duis
                            aliquam libero eget risus facilisis. Quisque eget libero vel nisl fringilla.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card position-relative z-1">
                        <div class="service-icon">
                            <i class="bi bi-camera-video"></i>
                        </div>
                        <a href="service-details.html"
                            class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="service-details.html">
                                Media <span>solutions</span>
                            </a>
                        </h3>
                        <p>
                            Etiam efficitur lacus in diam finibus, nec ultrices est sagittis. Maecenas elementum magna sed
                            risus faucibus, nec commodo purus facilisis. Vestibulum accumsan magna.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Services Section -->
    {{-- Section : services END --}}
@endsection
