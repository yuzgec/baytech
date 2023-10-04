<footer class="footer-bg footer-p pt-95 pb-30 ">
    <div class="footer-top pb-30">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>İletişim Bilgileri</h5>
                        </div>
                        <div class="footer-link">
                            <div class="f-contact">
                                <ul>
                                    <li>
                                        <i class="icon dripicons-phone"></i>
                                        <span>0 212 222 22 22<br>+0 212 222 22 33</span>
                                    </li>
                                    <li>
                                        <i class="icon dripicons-mail"></i>
                                        <span><a href="mailto:info@bay-tech.com">info@bay-tech.com</a><br><a href="mailto:satis@bay-tech.com">satis@bay-tech.com</a></span>
                                    </li>
                                    <li>
                                        <i class="fal fa-map-marker-alt"></i>
                                        <span>İstanbul</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Hizmetlerimiz</h5>
                        </div>
                        <div class="footer-link">
                            <ul>
                                @foreach($Service as $item)
                                    <li><a href="{{ route('servicedetail', $item->slug) }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Subscribe To Our News Letter</h5>
                        </div>
                        <div class="footer-text mb-20">
                            <p>Pellentesque quis volutpat odio, rhoncus tempor tellus. Proin condimentum turpis.</p>
                            <form name="ajax-form" id="contact-form4" action="" method="post" class="contact-form  newslater">
                                <div class="form-group">
                                    <input class="form-control" id="email2" name="email" type="email" placeholder="Your email" value="" required>
                                    <button type="submit" class="btn btn-custom" id="send2"><i class="fad fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="footer-social">
                            <span>Follow Us</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-text text-center">
                        <p>&copy; {{ date('Y') }} Bay-Tech.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
