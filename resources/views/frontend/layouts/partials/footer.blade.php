<footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="content">
                    <div class="logo">
                        <a href="index.html"><img data-cfsrc="{{ asset('uploads/images/' . getSettings('logo_light')) }}"
                                alt="logo" style="display:none;visibility:hidden;" /><noscript><img
                                    src="{{ asset('uploads/images/' . getSettings('logo_light')) }}"
                                    alt="logo" /></noscript></a>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, mattetur adipiscing elit, sed do eiusmod.
                    </p>
                    <div class="subscribe">
                        <h4>Join Newsletter</h4>
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" id="emails" class="form-control" placeholder="Your Email"
                                name="EMAIL" required autocomplete="off">
                            <button class="box-btn" type="submit">
                                Subscribe
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                    <ul class="social">
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class='bx bxl-pinterest'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="content ml-15">
                    <h3>Our Service</h3>
                    <ul class="footer-list">
                        <li><a href="#">Visual Design</a></li>
                        <li><a href="#"> Development</a></li>
                        <li><a href="#">QA & Testing</a></li>
                        <li><a href="#">IT Management</a></li>
                        <li><a href="#">Cyber Security</a></li>
                        <li><a href="#">Wireless Connection</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="content">
                    <h3>Quick Links</h3>
                    <ul class="footer-list">
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="solutions.html">Service</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="privecy.html">Privacy & Policy</a></li>
                        <li><a href="terms-condition.html">Terms & Conditions</a></li>
                        <li><a href="#">Data Analysis</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="content contacts">
                    <h3 class="ml-40">Contact</h3>
                    <ul class="footer-list foot-social">
                        <li>
                            <a href="tel:{{ getSettings('phone') }}">
                                <i class="bx bx-phone"></i> {{ getSettings('phone') }}
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{ getSettings('email') }}">
                                <i class="bx bxs-envelope"></i>
                                <span class="__cf_email__">{{ getSettings('email') }}</span>
                            </a>
                        </li>
                        <li>
                            <i class="bx bxs-map"></i> {{ getSettings('address') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="solutions.html">Solutions</a></li>
                        <li><a href="case.html">Case Studies</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p class="right">
                        Copyright @2022 Paso. Designed By
                        <a href="https://hibootstrap.com/" target="_blank">HiBootstrap.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="go-top">
    <i class='bx bx-chevrons-up'></i>
    <i class='bx bx-chevrons-up'></i>
</div>
