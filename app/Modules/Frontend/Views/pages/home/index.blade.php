@extends('frontend::layouts.app')

@section('content')

<!-- Banner -->
<livewire:frontend.home.banner />

<!-- Brand  -->
<livewire:frontend.home.brand />
<!-- Brand  -->


<!-- About -->
<section class="about-section section-margin">
    <div class="container">
        <div class="row">
            <div class="col-xxl-2 col-xl-2 col-lg-3">
                <h4 class="section-sub-title" data-aos="fade-up">
                    About Us <span></span>
                </h4>
            </div>
            <div class="col-xxl-7 col-xl-9 col-lg-9 offset-xl-1">
                <h2 class="section-title" data-aos="fade-up">
                    Digital Excellence Of Our Digital
                </h2>
            </div>
        </div>
        <div
            class="row wv-mt-92 align-items-start align-items-xl-center wv-gap-xl-30">
            <div class="col-xl-6">
                <div class="overflow-hidden wv-br-20">
                    <img
                        data-aos="zoom-out"
                        src="{{ url('assets/frontend/img/about-1.png') }}"
                        class="w-100"
                        alt="About 1" />
                </div>
            </div>
            <div class="col-xl-6">
                <div class="wv-ml-xxl-0 wv-ml-40">
                    <p data-aos="fade-up">
                        A digital agency specializes in creating online strategies for
                        businesses to optimize their presence on the internet.A digital
                        agency specializes in creating online strategies for businesses
                        to optimize
                    </p>
                    <div class="about-list">
                        <ul>
                            <li data-aos="fade-up">
                                Transforming Visions into Digital Reality
                            </li>
                            <li data-aos="fade-up">
                                Unleash Your Digital Potential Connecting Brands
                            </li>
                            <li data-aos="fade-up">
                                Your Business, Our Digital Expertise Pioneering
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About -->
<!-- Services -->
<section class="services-section section-margin">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title" data-aos="fade-up">Our Service</h2>
        </div>
        <div class="row wv-mt-75">
            <div class="col-lg-4">
                <div data-aos="fade-up">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="wv-icon-crm"></i>
                        </div>
                        <h3 class="service-title">Web Wise Solutions</h3>
                        <p class="service-description">
                            A digital agency specializes in creating online strategies for
                            businesses
                        </p>
                        <a href="services-details.html" class="read-more wv-mt-30">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="wv-icon-computing"></i>
                        </div>
                        <h3 class="service-title">Social Brilliance Studio</h3>
                        <p class="service-description">
                            A digital agency specializes in creating online strategies for
                            businesses
                        </p>
                        <a href="services-details.html" class="read-more wv-mt-30">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="wv-icon-magnet"></i>
                        </div>
                        <h3 class="service-title">Digital Evolution Lab</h3>
                        <p class="service-description">
                            A digital agency specializes in creating online strategies for
                            businesses
                        </p>
                        <a href="services-details.html" class="read-more wv-mt-30">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services -->
<!-- Join -->
<section
    class="join-section section-margin primary-bg wv-mr-40 wv-ml-40 wv-mr-md-10 wv-ml-md-10 wv-br-60 position-relative">
    <div class="container-fluid">
        <div class="row wv-pl-0 wv-pr-lg-0">
            <div class="col-xxl-4 col-xl-5 col-lg-4 wv-pl-0 wv-pr-0">
                <div class="overflow-hidden h-100">
                    <img
                        class="join-img w-100 img-fluid"
                        data-aos="zoom-out"
                        src="{{ url('assets/frontend/img/join.png') }}"
                        alt="Join" />
                </div>
            </div>
            <div
                class="col-xxl-5 col-xl-5 col-lg-6 color-white wv-pl-0 wv-pr-lg-0">
                <div class="wv-pl-40 wv-pr-lg-40 wv-pl-md-15 wv-pr-md-15">
                    <h2
                        class="section-title color-white wv-pt-95 wv-pb-42 wv-pt-md-30 wv-pb-md-20"
                        data-aos="fade-up">
                        Unleash Your <br />
                        Digital Potential
                    </h2>
                    <p data-aos="fade-up">
                        A digital agency specializes in creating online strategies for
                        businesses to optimize their presence on the internet.A digital
                        agency specializes in creating
                    </p>
                </div>
                <div class="join-counter">
                    <div class="row">
                        <div class="col-6 wv-mb-70">
                            <div class="join-counter-item" data-aos="fade-up">
                                <h2><span class="counter">55</span>+</h2>
                                <p class="join-counter-text">Team Member</p>
                            </div>
                        </div>
                        <div class="col-6 wv-mb-70">
                            <div
                                class="join-counter-item"
                                data-aos="fade-up"
                                data-aos-delay="200">
                                <h2><span class="counter">21</span>+</h2>
                                <p class="join-counter-text">Wining Award</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="join-counter-item" data-aos="fade-up">
                                <h2><span class="counter">1</span>k+</h2>
                                <p class="join-counter-text">Complete Project</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div
                                class="join-counter-item"
                                data-aos="fade-up"
                                data-aos-delay="200">
                                <h2><span class="counter">1.1</span>k+</h2>
                                <p class="join-counter-text">Clients Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-2 col-lg-2 d-lg-block d-none">
                <div class="circle-2 circle-animation">
                    <img src="{{ url('assets/frontend/img/circle-2.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Join -->
<!-- Marquee  -->
<section class="marquee-section section-margin">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="marquee2">
                    <div class="marquee-text">
                        <div class="marquee-item">
                            <i class="wv-icon-magnifier"></i>
                        </div>
                        <div class="marquee-item stroke-text">
                            <h2>Email Marketing</h2>
                        </div>
                        <div class="marquee-item">
                            <i class="wv-icon-tag"></i>
                        </div>
                        <div class="marquee-item">
                            <h2>Media Management</h2>
                        </div>
                        <div class="marquee-item">
                            <i class="wv-icon-magnifier"></i>
                        </div>
                        <div class="marquee-item stroke-text">
                            <h2>Email Marketing</h2>
                        </div>
                        <div class="marquee-item">
                            <i class="wv-icon-tag"></i>
                        </div>
                        <div class="marquee-item">
                            <h2>Media Management</h2>
                        </div>
                        <div class="marquee-item">
                            <i class="wv-icon-magnifier"></i>
                        </div>
                        <div class="marquee-item stroke-text">
                            <h2>Email Marketing</h2>
                        </div>
                        <div class="marquee-item">
                            <i class="wv-icon-tag"></i>
                        </div>
                        <div class="marquee-item">
                            <h2>Media Management</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Marquee  -->
<!-- Portfolio  -->
<section class="portfolio-section section-margin">
    <div class="container">
        <div class="portfolio-items">
            <div class="row">
                <div class="col-md-5">
                    <div class="portfolio-item" data-aos="fade-up">
                        <a
                            href="projects-details.html"
                            class="d-block portfolio-img overflow-hidden">
                            <img
                                data-aos="zoom-out"
                                class="w-100 img-fluid"
                                src="{{ url('assets/frontend/img/portfolio-2.png') }}"
                                alt="Portfolio 1" />
                        </a>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="projects-details.html">Redefining E-commerce</a>
                            </h3>
                            <p class="portfolio-cat">SearchStream</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2 wv-mt-80">
                    <div
                        class="portfolio-item"
                        data-aos="fade-up"
                        data-aos-delay="200">
                        <a
                            href="projects-details.html"
                            class="d-block portfolio-img overflow-hidden">
                            <img
                                data-aos="zoom-out"
                                class="w-100 img-fluid"
                                src="{{ url('assets/frontend/img/portfolio-3.png') }}"
                                alt="Portfolio 1" />
                        </a>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="projects-details.html">Design That Converts</a>
                            </h3>
                            <p class="portfolio-cat">SearchStream</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 wv-mt-80">
                    <div class="portfolio-item" data-aos="fade-up">
                        <a
                            href="projects-details.html"
                            class="portfolio-img overflow-hidden d-block">
                            <img
                                data-aos="zoom-out"
                                class="w-100 img-fluid"
                                src="{{ url('assets/frontend/img/portfolio-1.png') }}"
                                alt="Portfolio 1" />
                        </a>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="projects-details.html">A New Brand Identity</a>
                            </h3>
                            <p class="portfolio-cat">SearchStream</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div
                        class="portfolio-item"
                        data-aos="fade-up"
                        data-aos-delay="200">
                        <a
                            href="projects-details.html"
                            class="portfolio-img overflow-hidden d-block">
                            <img
                                data-aos="zoom-out"
                                class="w-100 img-fluid"
                                src="{{ url('assets/frontend/img/portfolio-4.png') }}"
                                alt="Portfolio 1" />
                        </a>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">
                                <a href="projects-details.html">Web Savvy Solutions</a>
                            </h3>
                            <p class="portfolio-cat">SearchStream</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio  -->
<!-- Team -->
<section
    class="team-section section-margin section-padding third-bg wv-br-60 wv-mr-40 wv-ml-40 wv-mr-md-10 wv-ml-md-10"
    data-aos="fade-up">
    <div class="container">
        <div class="row wv-gap-lg-15">
            <div class="col-xl-3 col-lg-3">
                <h4 class="section-sub-title" data-aos="fade-up">
                    Team Member <span></span>
                </h4>
            </div>
            <div class="col-xl-6 col-lg-7">
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="200">
                    Our Creative Team Member
                </h2>
            </div>
            <div
                class="col-xl-3 col-lg-2 flex-start d-flex flex-lg-end wv-gap-20 wv-gap-lg-10">
                <a href="#" class="arrow arrow-prev"><i class="fa-solid fa-arrow-left"></i></a>
                <a href="#" class="arrow arrow-next"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="team-items wv-mt-90">
            <div class="team-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-item" data-aos="fade-up">
                            <div class="team-img">
                                <img
                                    class="w-100 img-fluid"
                                    src="{{ url('assets/frontend/img/team-1.png') }}"
                                    alt="Team 1" />
                                <div class="share-icons">
                                    <a href="#" class="share-icon_"><i class="fa-regular fa-share-nodes"></i></a>
                                    <div class="share-icon">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="team-title">
                                    <a href="team-details.html">Jane Cooper</a>
                                </h4>
                                <p class="team-subtitle">Medical Assistant</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="team-img active">
                                <img
                                    class="w-100 img-fluid"
                                    src="{{ url('assets/frontend/img/team-2.png') }}"
                                    alt="Team 1" />
                                <div class="share-icons">
                                    <a href="#" class="share-icon_"><i class="fa-regular fa-share-nodes"></i></a>
                                    <div class="share-icon">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="team-title">
                                    <a href="team-details.html">Kristin Watson</a>
                                </h4>
                                <p class="team-subtitle">Nursing Assistant</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="team-img">
                                <img
                                    class="w-100 img-fluid"
                                    src="{{ url('assets/frontend/img/team-3.png') }}"
                                    alt="Team 1" />
                                <div class="share-icons">
                                    <a href="#" class="share-icon_"><i class="fa-regular fa-share-nodes"></i></a>
                                    <div class="share-icon">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="team-title">
                                    <a href="team-details.html"> Ronald Richards</a>
                                </h4>
                                <p class="team-subtitle">Dog Trainer</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-item" data-aos="fade-up">
                            <div class="team-img">
                                <img
                                    class="w-100 img-fluid"
                                    src="{{ url('assets/frontend/img/team-1.png') }}"
                                    alt="Team 1" />
                                <div class="share-icons">
                                    <a href="#" class="share-icon_"><i class="fa-regular fa-share-nodes"></i></a>
                                    <div class="share-icon">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="team-title">
                                    <a href="team-details.html">Jane Cooper</a>
                                </h4>
                                <p class="team-subtitle">Medical Assistant</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="team-img active">
                                <img
                                    class="w-100 img-fluid"
                                    src="{{ url('assets/frontend/img/team-2.png') }}"
                                    alt="Team 1" />
                                <div class="share-icons">
                                    <a href="#" class="share-icon_"><i class="fa-regular fa-share-nodes"></i></a>
                                    <div class="share-icon">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="team-title">
                                    <a href="team-details.html">Kristin Watson</a>
                                </h4>
                                <p class="team-subtitle">Nursing Assistant</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="team-img">
                                <img
                                    class="w-100 img-fluid"
                                    src="{{ url('assets/frontend/img/team-3.png') }}"
                                    alt="Team 1" />
                                <div class="share-icons">
                                    <a href="#" class="share-icon_"><i class="fa-regular fa-share-nodes"></i></a>
                                    <div class="share-icon">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="team-title">
                                    <a href="team-details.html">Ronald Richards</a>
                                </h4>
                                <p class="team-subtitle">Dog Trainer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team -->
<!-- Testimonial -->
<section
    class="testimonials-section wv-mt-20 section-padding primary-bg wv-br-60 wv-mr-40 wv-ml-40 wv-mr-md-10 wv-ml-md-10"
    data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-2 d-lg-block d-none">
                <div class="quota-icon">
                    <img src="{{ url('assets/frontend/img/quota.png') }}" alt="" />
                </div>
            </div>
            <div class="col-xl-9 col-lg-10">
                <div class="testimonial-slider-items swiper position-relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div
                                    class="d-flex align-items-center justify-content-between">
                                    <div class="testimonial-user">
                                        <div class="d-flex wv-gap-20">
                                            <div class="user-img">
                                                <img
                                                    src="{{ url('assets/frontend/img/testimonial-author.png') }}"
                                                    alt="User 1" />
                                            </div>
                                            <div class="user-name">
                                                <h3 class="user-title">Jenny Wilson</h3>
                                                <p class="user-subtitle">Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex ratings wv-gap-10">
                                        <i class="fa-solid fa-star color-rating"></i>
                                        <i class="fa-solid fa-star color-rating"></i>
                                        <i class="fa-solid fa-star color-rating"></i>
                                        <i class="fa-solid fa-star color-rating"></i>
                                        <i class="fa-solid fa-star color-rating2"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <p>
                                        A digital agency specializes in a creating strategies
                                        for businesses to optimize their presence the the best
                                        internet ever
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div
                                    class="d-flex align-items-center justify-content-between">
                                    <div class="testimonial-user">
                                        <div class="d-flex wv-gap-20">
                                            <div class="user-img">
                                                <img
                                                    src="{{ url('assets/frontend/img/testimonial-author.png') }}"
                                                    alt="User 1" />
                                            </div>
                                            <div class="user-name">
                                                <h3 class="user-title">Jenny Wilson</h3>
                                                <p class="user-subtitle">Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex ratings wv-gap-10">
                                        <i class="fa-solid fa-star color-rating"></i>
                                        <i class="fa-solid fa-star color-rating"></i>
                                        <i class="fa-solid fa-star color-rating"></i>
                                        <i class="fa-solid fa-star color-rating"></i>
                                        <i class="fa-solid fa-star color-rating2"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <p>
                                        A digital agency specializes in a creating strategies
                                        for businesses to optimize their presence the the best
                                        internet ever
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div
                                    class="d-flex align-items-center justify-content-between">
                                    <div class="testimonial-user">
                                        <div class="d-flex wv-gap-20">
                                            <div class="user-img">
                                                <img
                                                    src="{{ url('assets/frontend/img/testimonial-author.png') }}"
                                                    alt="User 1" />
                                            </div>
                                            <div class="user-name">
                                                <h3 class="user-title">Jenny Wilson</h3>
                                                <p class="user-subtitle">Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex ratings wv-gap-10">
                                        <i class="fa-solid fa-star color-rating"></i>
                                        <i class="fa-solid fa-star color-rating"></i>
                                        <i class="fa-solid fa-star color-rating"></i>
                                        <i class="fa-solid fa-star color-rating"></i>
                                        <i class="fa-solid fa-star color-rating2"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <p>
                                        A digital agency specializes in a creating strategies
                                        for businesses to optimize their presence the the best
                                        internet ever
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial -->
<!-- Faq -->
<section
    class="secondary-bg section-padding wv-br-60 wv-mr-40 wv-ml-40 wv-mr-md-10 wv-ml-md-10 wv-mt-20"
    data-aos="fade-up">
    <div class="container">
        <div class="row wv-gap-xl-30">
            <div class="col-xl-6">
                <div class="faq-contact" data-aos="fade-up">
                    <h2 data-aos="fade-up">Get In Touch</h2>
                    <form class="faq-contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group" data-aos="fade-up">
                                    <input type="text" placeholder="Your Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group" data-aos="fade-up">
                                    <input type="email" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group" data-aos="fade-up">
                                    <input type="email" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group" data-aos="fade-up">
                                    <textarea placeholder="Message here.."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="theme-btn-2" data-aos="fade-up">
                                    Sent Now <i class="fa-light fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6">
                <h2 class="section-title" data-aos="fade-up">Ask Question</h2>
                <div class="faq-items">
                    <div class="accordion" id="accordion">
                        <div class="faq-item" data-aos="fade-up">
                            <h4 class="faq-number">01.</h4>
                            <div class="faq-content">
                                <h4
                                    class="faq-toggle c-pointer"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-1"
                                    aria-expanded="false"
                                    aria-controls="faq-1">
                                    What services do digital agencies provide?
                                </h4>
                                <p
                                    id="faq-1"
                                    class="faq-2-content accordion-collapse collapse show"
                                    data-bs-parent="#accordion">
                                    A digital agency specializes in creating online strategies
                                    for businesses to optimize their on the internet A digital
                                    agency specializes
                                </p>
                            </div>
                        </div>
                        <div class="faq-item" data-aos="fade-up">
                            <h4 class="faq-number">02.</h4>
                            <div class="faq-content">
                                <h4
                                    class="faq-toggle c-pointer collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-2"
                                    aria-expanded="false"
                                    aria-controls="faq-2">
                                    How long does it take for a designed?
                                </h4>
                                <p
                                    id="faq-2"
                                    class="faq-2-content accordion-collapse collapse"
                                    data-bs-parent="#accordion">
                                    A digital agency specializes in creating online strategies
                                    for businesses to optimize their on the internet A digital
                                    agency specializes
                                </p>
                            </div>
                        </div>
                        <div class="faq-item" data-aos="fade-up">
                            <h4 class="faq-number">03.</h4>
                            <div class="faq-content">
                                <h4
                                    class="faq-toggle c-pointer collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-3"
                                    aria-expanded="false"
                                    aria-controls="faq-3">
                                    What is the importance of a business?
                                </h4>
                                <p
                                    id="faq-3"
                                    class="faq-3-content accordion-collapse collapse"
                                    data-bs-parent="#accordion">
                                    A digital agency specializes in creating online strategies
                                    for businesses to optimize their on the internet A digital
                                    agency specializes
                                </p>
                            </div>
                        </div>
                        <div class="faq-item" data-aos="fade-up">
                            <h4 class="faq-number">04.</h4>
                            <div class="faq-content">
                                <h4
                                    class="faq-toggle c-pointer collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-4"
                                    aria-expanded="false"
                                    aria-controls="faq-4">
                                    How do I choose business's success?
                                </h4>
                                <p
                                    id="faq-4"
                                    class="faq-4-content accordion-collapse collapse"
                                    data-bs-parent="#accordion">
                                    A digital agency specializes in creating online strategies
                                    for businesses to optimize their on the internet A digital
                                    agency specializes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog -->
<section class="section-padding">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title" data-aos="fade-up">Our RECENT Blog</h2>
        </div>
        <div class="blog-items wv-mt-75">
            <div class="row wv-gap-lg-30">
                <div class="col-lg-4">
                    <div class="blog-item" data-aos="fade-up">
                        <div class="blog-img overflow-hidden">
                            <img
                                data-aos="zoom-out"
                                src="{{ url('assets/frontend/img/blog-1.png') }}"
                                class="w-100 img-fluid"
                                alt="" />
                        </div>
                        <div class="blog-content">
                            <p class="blog-date">October 19, 2022</p>
                            <h4 class="blog-title">
                                <a class="underline-text-hover" href="blog-details.html">Power of Brand Storytelling: Why Your Brand Needs a
                                    Narrative</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="blog-img overflow-hidden">
                            <img
                                data-aos="zoom-out"
                                src="{{ url('assets/frontend/img/blog-2.png') }}"
                                class="w-100 img-fluid"
                                alt="" />
                        </div>
                        <div class="blog-content">
                            <p class="blog-date">October 19, 2022</p>
                            <h4 class="blog-title">
                                <a class="underline-text-hover" href="blog-details.html">Top 5 Web Design Trends to Watch in 2024</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="blog-img overflow-hidden">
                            <img
                                data-aos="zoom-out"
                                src="{{ url('assets/frontend/img/blog-3.png') }}"
                                class="w-100 img-fluid"
                                alt="" />
                        </div>
                        <div class="blog-content">
                            <p class="blog-date">October 19, 2022</p>
                            <h4 class="blog-title">
                                <a class="underline-text-hover" href="blog-details.html">Design Mistakes That Could Be Hurting Your Brand</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Subscribe -->
<section data-aos="fade-up">
    <div class="container">
        <div class="subscribe">
            <div class="row align-items-center wv-gap-lg-10">
                <div class="col-lg-7">
                    <h2 data-aos="fade-up">
                        Get Latest Update Subscribe to Our Newsletter
                    </h2>
                </div>
                <div class="col-lg-5">
                    <form class="subscribe-form">
                        <div class="input-group" data-aos="fade-up">
                            <input type="text" placeholder="Your Email" />
                            <i class="fa-solid fa-paper-plane"></i>
                        </div>
                        <button
                            data-aos="fade-up"
                            class="theme-btn-2 d-flex w-100 text-center justify-content-center third-bg border-0 color-primary">
                            Subscribe <i class="fa-light fa-arrow-right-long"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer  -->
@endsection