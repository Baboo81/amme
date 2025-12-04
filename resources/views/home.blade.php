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
                    <h2>Augmenter la performance de votre entreprise</h2>
                    <p class="lead">Je me concentre sur l’élaboration de stratégies sur mesure qui naviguent dans la
                        complexité et offrent des résultats tangibles à mes clients.</p>
                    <p class="lead">Grâce à un mélange d’analyse sophistiquée et de résolution de problèmes créatifs, je donne à mes
                        clients les moyens de prospérer sur des marchés en évolution rapide.</p>

                    <div class="row g-4 mt-3">
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                            <div class="feature-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <h5>Savoir soutenir</h5>
                                <p>Je m'engage à fournir un service personnalisé et des solutions adaptées à chaque
                                    engagement.</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                            <div class="feature-item">
                                <i class="bi bi-lightbulb-fill"></i>
                                <h5>Approche Moderne</h5>
                                <p>J'adopte des méthodologies modernes pour développer des stratégies uniques qui
                                    favorisent un succès durable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
{{-- Section : about END --}}
@endsection
