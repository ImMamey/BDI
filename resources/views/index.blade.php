<!--  <img src="{{ asset('img/logo.png') }}" class="image-responsive" width="90px" height="90px"/>  -->
@extends('layouts.app')
@section('content')
   

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="{{ asset('img/hero-bg.jpg') }}"  >
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hs-text">
                        <span>Productos</span>
                        <h2>Nuestros Productos</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <a href="#" class="primary-btn">Agregar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="about-us-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="{{ asset('img/about-us.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="as-text">
                        <div class="section-title">
                            <span>¿Desea un perfume?</span>
                            <h2>¡Utilize nuestro Recomendador de Perfumes!</h2>
                        </div>
                        <p class="f-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. </p>
                        <p class="s-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <!--Borrar este botton, no se usa -->
                        <a href="#" class="primary-btn">Leer Más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Services</span>
                        <h2>Best Services Save The World</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('img/services/service-1.png') }}" alt="">
                        <h4>Proveedores</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('img/services/service-2.png') }}" alt="">
                        <h4>Productos</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('img/services/service-3.png') }}" alt="">
                        <h4>Productores</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

  

    <!-- Call To Action Section Begin -->
    <section class="callto-section set-bg" data-setbg="{{ asset('img/ctc-bg.jpg') }}" >
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="ctc-text">
                        <h2>We Create Trends For The World</h2>
                        <p>Donec faucibus consequat ante. Mauris eget mi sed ex efficitur porta id non quam. Cras
                            aliquam turpis tellus, quis laoreet lacus congue sed. Nullam at est quis urna vestibulum
                            interdum. Praesent auctor leo ut massa ultrices tempor.</p>
                        <a href="#" class="primary-btn ctc-btn">Work With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-option">
                        <div class="fo-logo">
                            <a href="#">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="fo-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget fw-links">
                        <h5>Useful Links</h5>
                        <ul>
                            <li><a href="#">Recomendador</a></li>
                            <li><a href="#">Model</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Join The Newsletter</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="news-form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Instagram</h5>
                        <div class="insta-pic">
                            <img src="{{ asset('img/instagram/instagram-1.jpg') }}" alt="">
                            <img src="{{ asset('img/instagram/instagram-2.jpg') }}" alt="">
                            <img src="{{ asset('img/instagram/instagram-3.jpg') }}" alt="">
                            <img src="{{ asset('img/instagram/instagram-4.jpg') }}" alt="">
                            <img src="{{ asset('img/instagram/instagram-5.jpg') }}" alt="">
                            <img src="{{ asset('img/instagram/instagram-6.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
        </div>
    </section>
    <!-- Footer Section End -->
@endsection
