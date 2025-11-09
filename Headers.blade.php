@extends('site.layouts.master')


@section('content')


        <div class="menu-mask">
            <div class="row">
                <div class="col-lg-7">

                    <div class="col-lg-5">
                        <div class="menu-contact">
                            <!-- Add your menu contact content here -->
                        </div>
                    </div>

                    <style>
                        .social-media {
                            list-style: none;
                            padding: 0;
                            display: flex;
                        }

                        .social-media li {
                            margin-right: 15px;
                        }

                        .social-media a {
                            text-decoration: none;
                            font-size: 18px;
                            color: #333;
                            display: flex;
                            align-items: center;
                        }

                        .social-media a:hover {
                            color: #007bff;
                        }

                        .social-media i {
                            margin-right: 8px;
                            font-size: 22px;
                        }

                        .social-media img {
                            height: 25px;
                            width: 25px;
                            border-radius: 50%;
                        }


                        .btn-header-5 {
                            display: right;
                            align-items: center;
                            justify-content: right;
                            gap: 20px;
                            padding: 20px;
                        }

                        .icon-link {
                            color: #AA896F;
                            text-decoration: none;
                            padding: 10px;
                            font-size: 24px;
                        }

                        .icon-link:hover {
                            color: #000;
                        }


                        .icon-link:active {
                            color: #000;
                        }

                        .icon-link i {
                            transition: color 0.3s ease;
                        }

                        .sidebar {
                            height: 100%;
                            width: 0;
                            position: fixed;
                            top: 0;
                            left: 0;
                            background-color: #fff;
                            overflow-y: auto;
                            transition: all 0.4s ease;
                            padding: 0;
                            box-shadow: 2px 0 12px rgba(0, 0, 0, 0.2);
                            z-index: 1050;
                            visibility: hidden;
                            opacity: 0;
                        }

                        .sidebar.active {
                            width: 350px;
                            padding: 40px 20px;
                            visibility: visible;
                            opacity: 1;
                        }

                        .color-btn.active {
                            border: 3px solid #AA896F !important;
                        }

                        .star {
                            font-size: 24px;
                            cursor: pointer;
                            color: #ccc;
                        }

                        .star.selected {
                            color: gold;
                        }
                    </style>

                    <div class="btn-header btn-header-5">

                        <a href="cart.html" class="icon-link">
                            <i class="fa fa-shopping-cart" style="font-size: 24px; color: #AA896F;"></i>
                        </a>


                        <a href="favorites.html" class="icon-link">
                            <i class="fa fa-heart" style="font-size: 24px; color: #AA896F;"></i>
                        </a>


                        <a href="login.html" class="icon-link">
                            <i class="fa fa-user" style="font-size: 24px; color: #AA896F;"></i>
                        </a>
                    </div>





                    <ul class="social-media">
                        <li><a class="social-facebook" href="https://www.facebook.com/Syrianmik" target="_blank"><i
                                    class="fab fa-facebook-f"></i> </a></li>
                        <li><a class="social-whatsapp" href="https://wa.me/905510069156" target="_blank"><i
                                    class="fab fa-whatsapp"></i></a></li>

                        <li><a class="social-instagram" href="https://www.instagram.com/glamour_gruop/" target="_blank"><i
                                    class="fab fa-instagram"></i> </a></li>
                        <li><a class="social-telegram" href="https://web.telegram.org/a/#-1001618501822" target="_blank"><i
                                    class="fab fa-telegram-plane"></i> </a></li>
                        <li><a href="https://www.tiktok.com/@glamour_gruop?lang=ar" target="_blank"><i
                                    class="fab fa-tiktok"></i> </a></li>
                    </ul>


                </div>
            </div>
        </div>
        <!-- /col-lg-5 -->
        </div>
        <!-- /row -->
        </div>
        <!-- /container -->
        </div>
        <!-- /MOBILE MENU HOLDER -->

        <!-- HOME SLIDER -->
        <div class="swiper-mt">
            <div class="swiper-wrapper">
               <div class="swiper-slide slider-img" style="background-image: url('{{ asset('site/images/409.jpg') }}');">

                    <div class="container slider-caption">
                        <div class="slider-text">
                            <h1 class="display-2">Our offers</h1>

                        </div>
                    </div>
                </div>
                <!-- /slider-img -->
                <div class="swiper-slide slider-img" style="background-image: url('{{ asset('site/images/408.jpg') }}');">
                    <div class="container slider-caption">
                        <div class="slider-text">
                            <h1 class="display-2">Our offers</h1>

                        </div>
                    </div>
                </div>
                <!-- /slider-img -->
                <div class="swiper-slide slider-img" style="background-image: url('{{ asset('site/images/410.jpg') }}');">
                    <div class="container slider-caption">
                        <div class="slider-text">
                            <h1 class="display-2">Our offers</h1>

                        </div>
                    </div>
                </div>
                <!-- /slider-img -->
            </div>
            <!-- /swiper-wrapper -->
            <div class="swiper-mt-button-prev" tabindex="0" role="button" aria-label="Previous slide">
                <svg version="1.1" class="arrow-slider" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55"
                    style="enable-background:new 0 0 55 55;" xml:space="preserve">
                    <path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1
              c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>
                    <path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5
              S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>
                </svg>
            </div>
            <!-- /swiper-mt-button-prev -->
            <div class="swiper-mt-button-next" tabindex="0" role="button" aria-label="Next slide">
                <svg version="1.1" class="arrow-slider" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55"
                    style="enable-background:new 0 0 55 55;" xml:space="preserve">
                    <path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1
              c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>
                    <path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5
              S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>
                </svg>
            </div>
            <!-- /swiper-mt-button-next -->
        </div>
        <div id="home-section-1-3" class="section-holder home-section-1-3">
            <div class="container">
                <div class="row align-items-center margin-b50">
                    <div class="col-lg-6 tablet-margin-b30">

                        <h2 class="display-4">Our products:



                        </h2>
                    </div>
                    <!-- /col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="el-align-right">
                            <a href="#" class="read-more">View All Work</a>
                        </div>
                    </div>
                    <!-- /col-lg-6 -->
                </div>
                <!-- SECTION 2 -->
                <div id="home-section-1-2" class="section-holder home-section-1-2 parallax"
                    style="background-image:url('{{ asset('site/images/407.jpg') }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 mobile-margin-b30">
                                <div class="icon-svg icon-svg-border margin-b15">
                                    <img class="img-fluid" loading="lazy" src="{{ asset('site/images/314.jpg') }}"
                                        width="512" height="512" x="0" y="0">
                                </div>
                                <!-- /icon-svg -->
                                <h5 class="white margin-b10">Flower bouquets</h5>

                            </div>
                            <!-- /col-md-6 -->
                            <div class="col-md-6 col-lg-3 mobile-margin-b30">
                                <div class="icon-svg icon-svg-border margin-b15">
                                    <img class="img-fluid" loading="lazy" src="{{ asset('site/images/213.jpg') }}"
                                        width="512" height="512" x="0" y="0">


                                </div>
                                <!-- /icon-svg -->
                                <h5 class="white margin-b10">cap</h5>

                            </div>
                            <!-- /col-md-6 -->
                            <div class="col-md-6 col-lg-3 mobile-margin-b30">
                                <div class="icon-svg icon-svg-border margin-b15">
                                    <img class="img-fluid" loading="lazy" src="{{ asset('site/images/360.jpg') }}"
                                        width="512" height="512" x="0" y="0">
                                </div>
                                <!-- /icon-svg -->
                                <h5 class="white margin-b10">Crown</h5>

                            </div>
                            <!-- /col-md-6 -->
                            <div class="col-md-6 col-lg-3">
                                <div class="icon-svg icon-svg-border margin-b15">
                                    <img class="img-fluid" loading="lazy" src="{{ asset('site/images/379.jpg') }}"
                                        width="512" height="512" x="0" y="0">
                                </div>
                                <!-- /icon-svg -->
                                <h5 class="white margin-b10">High heel</h5>

                            </div>
                            <!-- /col-md-6 -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /SECTION 2 -->
                <!-- SECTION 3 -->
                <div id="home-section-1-3" class="section-holder home-section-1-3">
                    <div class="container">
                        <div class="row align-items-center margin-b50">
                            <div class="col-lg-6 tablet-margin-b30">

                                <h2 class="display-4">Discounts </h2>
                            </div>
                            <!-- /col-lg-6 -->

                        </div>
                        <!-- /row -->
                        <div class="gallery-container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="portfolio-grid gallery-holder-grid gallery-justify">

                                            <div class="row">
                                                @foreach ($Products as $product)
                                                    <div class="col-md-4 mb-4">
                                                        <div class="card position-relative shadow"
                                                            style="width: 100%; height: 400px;">
                                                            <a href="#"
                                                                onclick="openSidebar(
                        '{{ asset($product->image) }}',
                        '{{ $product->title }}',
                        '{{ $product->price }}',
                        '{{ $product->size }}'
                    )"
                                                                class="lightbox">
                                                                <img class="card-img-top img-fluid"
                                                                    src="{{ asset($product->image) }}"
                                                                    alt="{{ $product->title }}"
                                                                    style="object-fit: cover; height: 280px;">
                                                            </a>
                                                            <div class="card-body text-center">
                                                                <h6>{{ $product->title }}</h6>
                                                                <br>
                                                                <a class="btn purchaseButton text-white"
                                                                    style="background-color: #AA896F;"
                                                                    href="#">Purchase</a>
                                                            </div>
                                                            <div
                                                                class="position-absolute top-0 end-0 m-2 heart-icon-container">
                                                                <i class="fa-regular fa-heart fs-4"
                                                                    style="color: #AA896F;"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                            <!-- Sidebar -->
                                            <div id="sidebar" class="sidebar">
                                                <span class="close-btn" onclick="closeSidebar()">&times;</span>
                                                <img id="sidebarImage" src="" alt="Product"
                                                    class="img-fluid mb-3 rounded">
                                                <h5 id="sidebarTitle"></h5>
                                                <p id="sidebarPrice" class="text-primary fw-bold"></p>

                                                <!-- Color Options -->
                                                <label><strong>Choose Color:</strong></label>
                                                <div class="d-flex mb-3" id="colorOptions">
                                                    <button class="btn color-btn me-2" data-color="White"
                                                        style="background-color: white;">White</button>
                                                    <button class="btn color-btn me-2" data-color="Beige"
                                                        style="background-color: beige;">Beige</button>
                                                    <button class="btn color-btn" data-color="Pink"
                                                        style="background-color: pink;">Pink</button>
                                                </div>

                                                <!-- Size Selector -->
                                                <label><strong>Select Size:</strong></label>
                                                <select id="sizeSelect" class="form-select mb-3">
                                                    <option disabled selected>Choose size</option>
                                                </select>

                                                <!-- Rating -->
                                                <label><strong>Your Rating:</strong></label>
                                                <div class="mb-3" id="ratingStars">
                                                    <span class="star" data-value="1">&#9734;</span>
                                                    <span class="star" data-value="2">&#9734;</span>
                                                    <span class="star" data-value="3">&#9734;</span>
                                                    <span class="star" data-value="4">&#9734;</span>
                                                    <span class="star" data-value="5">&#9734;</span>
                                                </div>

                                                <!-- Add to Cart -->
                                                <button class="btn w-100" style="background-color: #AA896F; color: white;"
                                                    onclick="addToCart()">Add to Cart</button>
                                            </div>
                                            <script>
                                                let selectedColor = null;
                                                let selectedSize = null;
                                                let selectedRating = 0;

                                                function openSidebar(imageSrc, title, price, sizeValue) {
                                                    document.getElementById("sidebar").classList.add("active");
                                                    document.getElementById("sidebarImage").src = imageSrc;
                                                    document.getElementById("sidebarTitle").textContent = title;
                                                    document.getElementById("sidebarPrice").textContent = "$" + price;

                                                    // تعبئة قائمة المقاسات
                                                    let sizeSelect = document.getElementById("sizeSelect");
                                                    sizeSelect.innerHTML = '<option disabled selected>Choose size</option>';
                                                    if (sizeValue) {
                                                        let sizeOption = document.createElement("option");
                                                        sizeOption.text = sizeValue;
                                                        sizeOption.value = sizeValue;
                                                        sizeOption.selected = true;
                                                        sizeSelect.appendChild(sizeOption);
                                                    }
                                                }

                                                function closeSidebar() {
                                                    document.getElementById("sidebar").classList.remove("active");
                                                }

                                                document.querySelectorAll('.color-btn').forEach(btn => {
                                                    btn.addEventListener('click', function() {
                                                        document.querySelectorAll('.color-btn').forEach(b => b.classList.remove('active'));
                                                        this.classList.add('active');
                                                        selectedColor = this.getAttribute('data-color');
                                                    });
                                                });

                                                document.getElementById('sizeSelect').addEventListener('change', function() {
                                                    selectedSize = this.value;
                                                });

                                                document.querySelectorAll('#ratingStars .star').forEach(star => {
                                                    star.addEventListener('click', function() {
                                                        selectedRating = parseInt(this.getAttribute('data-value'));
                                                        updateStars(selectedRating);
                                                    });
                                                });

                                                function updateStars(rating) {
                                                    document.querySelectorAll('#ratingStars .star').forEach(star => {
                                                        const val = parseInt(star.getAttribute('data-value'));
                                                        star.classList.toggle('selected', val <= rating);
                                                        star.innerHTML = val <= rating ? '&#9733;' : '&#9734;';
                                                    });
                                                }

                                                function addToCart() {
                                                    if (!selectedColor || !selectedSize) {
                                                        alert("Please select a color and a size.");
                                                        return;
                                                    }
                                                    alert(
                                                        `✔ Product added to cart!\nColor: ${selectedColor}\nSize: ${selectedSize}\nRating: ${selectedRating} star(s)`);
                                                }
                                            </script>

                                            <!-- End Gallery Row -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div id="home-section-1-6" class="section-holder home-section-1-6">
                            <div class="container">
                                <div class="row align-items-center margin-b30less">
                                    <div class="col-6 col-md-3 alignc margin-b30">
                                        <img class="img-fluid" src="{{ asset('site/images/411.png') }}" alt=" "
                                            width="150" />
                                    </div>
                                    <!-- /col-md-3 -->
                                    <div class="col-6 col-md-3 alignc margin-b30">
                                        <img class="img-fluid" src="{{ asset('site/images/415.png') }}" alt=" "
                                            width="150" />
                                    </div>
                                    <!-- /col-md-3 -->
                                    <div class="col-6 col-md-3 alignc margin-b30">
                                        <img class="img-fluid" src="{{ asset('site/images/413.png') }}" alt=" "
                                            width="150" />
                                    </div>
                                    <!-- /col-md-3 -->
                                    <div class="col-6 col-md-3 alignc margin-b30">
                                        <img class="img-fluid" src="{{ asset('site/images/414.png') }}" alt=" "
                                            width="150" />
                                    </div>
                                    <!-- /col-md-3 -->

                                    <!-- /col-md-3 -->
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /container -->
                        </div>
                        <!-- /SECTION 6 -->
                        <!-- SECTION 7 -->
                        <div id="home-section-1-7" class="section-holder home-section-1-7 section-nomargin parallax"
                            style="background-image:url('{{ asset('site/images/407.jpg') }}');">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="padding-lr200 alignc">

                                            <h2 class="display-4 margin-b30">"Stay tuned for everything new."</h2>


                                        </div>
                                    </div>
                                    <!-- /col-lg-12 -->
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /container -->
                        </div>
                        <!-- /SECTION 7 -->
                    </div>
                    <br><br>
                    <!-- /WRAP CONTENT -->
<div id="footer-instagram">
					<ul class="instagram-pics instagram-size-small">
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/9.jpg') }}" height="250"
									width="250" /></a></li>
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/20.jpg') }}" height="250"
									width="250" alt="" /></a></li>
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/28.jpg') }}"height="250"
									width="250" alt="" /></a></li>
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/22.jpg') }}" height="250"
									width="250" alt="" /></a></li>
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/23.jpg') }}" height="250"
									width="250" alt="" /></a></li>jpg
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/24.jpg') }}" height="250"
									width="250" alt="" /></a></li>
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/29.jpg') }}"height="250"
									width="250" alt="" /></a></li>
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/26.jpg') }}" height="250"
									width="250" alt="" /></a></li>
					</ul>

				</div>
                    <div class="scrollup">
                        <a class="scrolltop" href="#">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

                    <!-- Bootstrap Bundle JS (يتضمن Modal functionality) -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

                    <!-- JS -->


@endsection
