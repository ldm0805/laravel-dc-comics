{{-- Pagina 1 e 2 in comune --}}
<footer>
    {{-- Sezione con i link --}}
    <div class="cols cont_list">
        <div class="d-flex flex-column">
            <div class="d-flex flex-row">
                <div>
                    <div class="footer-links">
                        <ul>
                            <li><h4>Dc Comics</h4></li>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                    <!-- Link footer -->
                    <div class="footer-links">
                        <ul>
                            <li><h4>Shop</h4></li>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC Collectibles</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Link footer -->
                <div class="footer-links">
                    <ul>
                        <li><h4>DC</h4></li>
                        <li><a href="#">Temos Of Use</a></li>
                        <li><a href="#">Privacy policy (New)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Cerrificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            
                <div class="footer-links">
                    <ul>
                        <li><h4>SITES</h4></li>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
            </div>
                <div>
                    <p class="copyright">
                        All Site Content and 
                        <i class="fa-regular fa-copyright"></i>
                        DC Entertaiment, unless otherwise 
                        <a href="#">noted here</a>.
                        All rights reserved.
                        <a href="#">Cookies Settings</a>
                    </p>
                </div>
        </div>
        <div class="dc_bg">
            <div class="img_dc_bg">
            </div>
        </div>
    </div>
    {{-- Zona social del footer --}}
    <div class="social">
        <div class="col-but">
            <button class="footer-button">Sign-up now!</button>
        </div>
        <div class="icon">
            <h3 class="follow">Follow us</h3>
            <ul>
                @foreach($productsocial as $product)
                    <li>
                        <img src="{{ asset(Vite::asset($product['logo'])) }}" alt="">
                    </li>
                @endforeach 
            </ul>
        </div>
    </div>
</footer>