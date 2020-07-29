@extends('layouts.app')
@section('content')
   
    <!-- Map Section Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.131590048758!2d-75.49285368518825!3d40.60492025209744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c439862c390e25%3A0xd8a76e7325ce28ea!2sLiberty%20St%2C%20Allentown%2C%20PA%2C%20USA!5e0!3m2!1sen!2sbd!4v1580135217665!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-text">
                        <h4>Contacts Us</h4>
                        <div class="ct-item">
                            <div class="ci-icon">
                                <span class="ti-location-pin"></span>
                            </div>
                            <div class="ci-text">
                                <ul>
                                    <li>
                                        <span>Our Location</span>
                                        60-49 Road 11378 New York
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ci-icon">
                                <span class="ti-mobile"></span>
                            </div>
                            <div class="ci-text">
                                <ul>
                                    <li>
                                        <span>Phone:</span>
                                        +65 11.188.888
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ci-icon">
                                <span class="ti-email"></span>
                            </div>
                            <div class="ci-text">
                                <ul>
                                    <li>
                                        <span>Mail</span>
                                        hellocolorlib@gmail.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-option">
                        <h4>Leave A Comment</h4>
                        <form action="#" class="comment-form contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Messages"></textarea>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-option">
                        <div class="fo-logo">
                            <a href="#">
                                <img src="img/logo.png" alt="">
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
                            <li><a href="#">About Us</a></li>
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
                            <img src="img/instagram/instagram-1.jpg" alt="">
                            <img src="img/instagram/instagram-2.jpg" alt="">
                            <img src="img/instagram/instagram-3.jpg" alt="">
                            <img src="img/instagram/instagram-4.jpg" alt="">
                            <img src="img/instagram/instagram-5.jpg" alt="">
                            <img src="img/instagram/instagram-6.jpg" alt="">
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
