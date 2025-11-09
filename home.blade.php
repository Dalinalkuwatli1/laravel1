@extends('site.layouts.master')


@section('content')
    <!-- HOME SLIDER -->
    <div class="swiper-mt">
        <div class="swiper-wrapper">
            <div class="swiper-slide slider-img" style="background-image: url('{{ asset('site/images/1.jpg') }}');">
                <div class="container slider-caption">

                </div>
            </div>
            <!-- /slider-img -->
            <div class="swiper-slide slider-img" style="background-image: url('{{ asset('site/images/30.jpg') }}');">
                <div class="container slider-caption">

                </div>
            </div>
            <!-- /slider-img -->
            <div class="swiper-slide slider-img" style="background-image: url('{{ asset('site/images/2.jpg') }}');">
                <div class="container slider-caption">

                </div>
            </div>
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
            <!-- /slider-img -->
        </div>
        <!-- /swiper-wrapper -->

        <!-- /swiper-mt-button-next -->
    </div>
    <!-- /swiper-mt -->
    <!-- /HOME SLIDER -->
    <!-- WRAP CONTENT -->
    <div id="wrap-content" class="page-content custom-page-template">
        <!-- SECTION 1 -->
        <div id="home-section-2-1" class="section-holder section-info padding-tb100 margin-notop100 home-section-2-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-mobi2">
                        <div class="margin-r50">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="img-fluid radius10 margin-b30" src='{{ asset('site/images/4.jpg') }}'
                                        alt=" " />
                                    <img class="img-fluid radius10" src='{{ asset('site/images/1.jpg') }}' alt=" " />
                                </div>
                                <!-- /col-md-6 -->
                                <div class="col-md-6">

                                    <img class="img-fluid radius10  margin-t30" src='{{ asset('site/images/444.jpg') }}'
                                        alt=" " />
                                </div>
                                <!-- /col-md-6 -->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /margin-r50 -->
                    </div>
                    <!-- /col-lg-6 -->
                    <div class="col-lg-6 order-mobi1 margin-bm50">
                        <div class="el-smalltitle">Dresses Gallery</div>
                        <h2 class="display-4 margin-b30">Glamour - Wedding Dresses & Designs</h2>
                        <p>At Glamour, we specialize in designing and selling unique wedding dresses. Our collection is
                            carefully crafted to make every bride feel beautiful and special on her big day. </p>
                        <p>Whether you're looking for a traditional, modern, or customized design, our dresses are made with
                            the highest quality materials and craftsmanship.</p>


                    </div>
                    <!-- /col-lg-6 -->
                </div>

            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION 1 -->
        <!-- SECTION 2 -->
        <div id="home-section-2-2" class="section-holder home-section-2-2">
            <div class="container">
                <div class="row align-items-center margin-b50">
                    <div class="col-lg-6 tablet-margin-b30">

                        <h2 class="display-4">Selected Work</h2>
                    </div>
                    <!-- /col-lg-6 -->

                    <!-- /col-lg-6 -->
                </div>
                <!-- /row -->
                <!-- SweetAlert2 -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <div class="row">
                    @foreach ($Products as $showworklist)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="item-portfolio-holder-v2" style="width: 100%; height: 350px; cursor: pointer;"
                                onclick="openDressModal(
    '{{ asset($showworklist->image) }}',
    '{{ $showworklist->title }}',
    '{{ $showworklist->description }}',
    '{{ $showworklist->id }}',
    '{{ $showworklist->price }}'
)">

                                <div class="post-image item-grid-image-v2">
                                    <img loading="lazy" src="{{ asset($showworklist->image) }}"
                                        class="img-grid-v2 w-100 h-100 object-fit-cover rounded"
                                        alt="{{ $showworklist->title }}">
                                </div>

                                <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
                                    <div class="heart-circle" onclick="event.stopPropagation(); toggleHeart(this)">
                                        <i class="fa-regular fa-heart fs-4"></i>
                                    </div>
                                </div>



                                <div class="card-body text-center">
                                    <button class="btn purchaseButton text-white">Purchase</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Dress Modal -->
                <div class="modal fade" id="dressModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content p-4">
                            <div class="modal-header">
                                <h5 class="modal-title" id="dressTitle"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body row">
                                <div class="col-md-6">
                                    <img id="dressImage" src="" class="img-fluid rounded" alt="Dress Image">
                                </div>

                                <div class="col-md-6">

                                    <!-- Hidden fields -->
                                    <input type="hidden" id="selectedProductId">
                                    <input type="hidden" id="selectedProductPrice">

                                    <!-- Select Color -->
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Choose color:</label><br>
                                        <button class="btn btn-outline-dark me-2"
                                            onclick="selectColor(this)">white</button>
                                        <button class="btn btn-outline-dark" onclick="selectColor(this)">Off-white</button>
                                    </div>

                                    <!-- Select Size -->
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Choose size:</label><br>
                                        <button class="btn btn-outline-secondary me-2"
                                            onclick="selectSize(this)">S</button>
                                        <button class="btn btn-outline-secondary me-2"
                                            onclick="selectSize(this)">M</button>
                                        <button class="btn btn-outline-secondary" onclick="selectSize(this)">L</button>
                                    </div>

                                    <!-- Rating -->
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Rate this dress:</label><br>
                                        <div id="starRating">⭐⭐⭐⭐⭐</div>
                                    </div>

                                    <h4 id="dressPrice" class="mb-3 text-success fw-bold"></h4>
                                    <h4 class="mb-3 text-success fw-bold">
                                    <span id="dressPrice"></span>
                                    </h4>


                                    <!-- Add to Cart -->
                                    <button class="btn btn-beige mt-3" onclick="addToCart()">Add to cart</button>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JS Scripts -->
                <script>
                    function openDressModal(image, title, description, productId, price) {
                        document.getElementById('dressImage').src = image;
                        document.getElementById('dressTitle').textContent = title;
                        document.getElementById('dressPrice').textContent = price + '$';

                        document.getElementById('selectedProductId').value = productId;
                        document.getElementById('selectedProductPrice').value = price;

                        var modal = new bootstrap.Modal(document.getElementById('dressModal'));
                        modal.show();
                    }
                    function addToCart() {
    const productId = document.getElementById('selectedProductId').value;
    const price = document.getElementById('selectedProductPrice').value;
    const selectedColor = document.querySelector('.btn-outline-dark.active')?.textContent;
    const selectedSize = document.querySelector('.btn-outline-secondary.active')?.textContent;
    const productTitle = document.getElementById('dressTitle').textContent;
    const productImage = document.getElementById('dressImage').src;

    if (!selectedColor || !selectedSize) {
        Swal.fire({
            icon: 'warning',
            title: 'alert',
            text: 'Please choose color and size before adding to cart.',
            confirmButtonText: 'ok'
        });
        return;
    }

    fetch('{{ route('cart.add') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            product_id: productId,
            price: price,
            color: selectedColor,
            size: selectedSize
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            updateSidebar(productImage, productTitle, price, selectedColor, selectedSize);
            openSidebar();
                    Swal.fire({
        icon: 'success',
        title: 'Added!',
        text: data.message,
        confirmButtonText: 'OK'
        });
        } else {
        Swal.fire({
        icon: 'error',
        title: 'Error',
        text: data.message,
        confirmButtonText: 'OK'
        });
        }
        })
        .catch(error => {
        Swal.fire({
        icon: 'error',
        title: 'Connection Failed',
        text: 'An error occurred while connecting to the server.',
        confirmButtonText: 'OK'
        });
    });
}


function updateSidebar(image, title, price, color, size) {
    const sidebar = document.getElementById("sidebar");
    const sidebarContent = `
        <span class="close-btn" onclick="closeSidebar()">×</span>
        <img src="${image}" alt="Product" class="img-fluid mb-3 rounded">
        <h5>${title}</h5>
        <p class="text-primary fw-bold">${price} $ </p>
        <p><strong>Color:</strong> ${color}</p>
        <p><strong>Size:</strong> ${size}</p>
        <a href="{{ route('cart.index') }}" class="btn w-100" style="background-color: #AA896F; color: white; text-align: center; display: inline-block; text-decoration: none;">Go to Cart</a>

    `;
    sidebar.innerHTML = sidebarContent;
}


                    function selectColor(button) {
                        document.querySelectorAll('button.btn-outline-dark').forEach(btn => btn.classList.remove('active'));
                        button.classList.add('active');
                    }

                    function selectSize(button) {
                        document.querySelectorAll('button.btn-outline-secondary').forEach(btn => btn.classList.remove('active'));
                        button.classList.add('active');
                    }
                </script>










                <!-- /SECTION 2 -->
                <!-- SECTION 3 -->
                <div id="home-section-2-3" class="section-holder home-section-2-3 parallax"
     style="background-image:url('{{ asset('site/images/1.jpg') }}');">

                    <div class="container">
                        <div class="row margin-b30less">
                            <div class="col-md-4 margin-b30">
                                <div class="testimonial-v2">
                                    <div class="icon-svg icon50">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            class="icon-quote2" x="0px" y="0px" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M84.2,437.2c-7.2,0-14.2-3.2-18.9-9.1c-6.7-8.4-6.9-20.3-0.7-29c16.6-22.9,28-49.4,33.1-77C72,316.2,48.6,302.3,31,282.2   c-20-22.8-31-52-31-82.3c0-69,56.1-125.1,125.1-125.1s125.1,56.1,125.1,125.1c0,103.2-61.6,195.6-156.8,235.4   C90.4,436.6,87.3,437.2,84.2,437.2z M125.1,94.1c-58.4,0-105.9,47.5-105.9,105.9c0,52.4,39.1,97.4,90.9,104.8l9.5,1.3l-1.3,9.5   c-4.7,34-17.8,66.8-38.1,94.8c-1.3,1.8-1.2,4.1,0.1,5.8c1.3,1.7,3.6,2.3,5.6,1.5c88.1-36.8,145-122.2,145-217.7   C231,141.5,183.5,94.1,125.1,94.1z M346,437.2c-7.2,0-14.2-3.2-18.9-9.1c-6.7-8.4-6.9-20.3-0.7-29c16.6-22.9,27.9-49.4,33.1-77   c-25.8-5.8-49.2-19.7-66.8-39.8c-20-22.8-31-52-31-82.3c0-69,56.1-125.1,125.1-125.1S512,130.9,512,199.9   c0,103.2-61.6,195.6-156.8,235.4C352.2,436.6,349.1,437.2,346,437.2z M386.9,94.1c-58.4,0-105.9,47.5-105.9,105.9   c0,52.4,39.1,97.4,90.9,104.8l9.5,1.3l-1.3,9.5c-4.7,34-17.8,66.8-38.1,94.8c-1.3,1.8-1.2,4.1,0.1,5.8c1.3,1.7,3.6,2.3,5.6,1.5   c88.1-36.8,145-122.2,145-217.7C492.8,141.5,445.3,94.1,386.9,94.1z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="lead margin-b10">"Our latest dress designs highlight your beauty, offering
                                        you a unique look on your special day."</div>

                                </div>
                            </div>
                            <!-- /col-md-4 -->
                            <div class="col-md-4 margin-b30">
                                <div class="testimonial-v2">
                                    <div class="icon-svg icon50">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            class="icon-quote2" x="0px" y="0px" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M84.2,437.2c-7.2,0-14.2-3.2-18.9-9.1c-6.7-8.4-6.9-20.3-0.7-29c16.6-22.9,28-49.4,33.1-77C72,316.2,48.6,302.3,31,282.2   c-20-22.8-31-52-31-82.3c0-69,56.1-125.1,125.1-125.1s125.1,56.1,125.1,125.1c0,103.2-61.6,195.6-156.8,235.4   C90.4,436.6,87.3,437.2,84.2,437.2z M125.1,94.1c-58.4,0-105.9,47.5-105.9,105.9c0,52.4,39.1,97.4,90.9,104.8l9.5,1.3l-1.3,9.5   c-4.7,34-17.8,66.8-38.1,94.8c-1.3,1.8-1.2,4.1,0.1,5.8c1.3,1.7,3.6,2.3,5.6,1.5c88.1-36.8,145-122.2,145-217.7   C231,141.5,183.5,94.1,125.1,94.1z M346,437.2c-7.2,0-14.2-3.2-18.9-9.1c-6.7-8.4-6.9-20.3-0.7-29c16.6-22.9,27.9-49.4,33.1-77   c-25.8-5.8-49.2-19.7-66.8-39.8c-20-22.8-31-52-31-82.3c0-69,56.1-125.1,125.1-125.1S512,130.9,512,199.9   c0,103.2-61.6,195.6-156.8,235.4C352.2,436.6,349.1,437.2,346,437.2z M386.9,94.1c-58.4,0-105.9,47.5-105.9,105.9   c0,52.4,39.1,97.4,90.9,104.8l9.5,1.3l-1.3,9.5c-4.7,34-17.8,66.8-38.1,94.8c-1.3,1.8-1.2,4.1,0.1,5.8c1.3,1.7,3.6,2.3,5.6,1.5   c88.1-36.8,145-122.2,145-217.7C492.8,141.5,445.3,94.1,386.9,94.1z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="lead margin-b10">"In every stitch of our dresses, you’ll find elegance,
                                        beauty, and individuality, making you the most stunning bride."</div>

                                </div>
                            </div>
                            <!-- /col-md-4 -->
                            <div class="col-md-4 margin-b30">
                                <div class="testimonial-v2">
                                    <div class="icon-svg icon50">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            class="icon-quote2" x="0px" y="0px" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M84.2,437.2c-7.2,0-14.2-3.2-18.9-9.1c-6.7-8.4-6.9-20.3-0.7-29c16.6-22.9,28-49.4,33.1-77C72,316.2,48.6,302.3,31,282.2   c-20-22.8-31-52-31-82.3c0-69,56.1-125.1,125.1-125.1s125.1,56.1,125.1,125.1c0,103.2-61.6,195.6-156.8,235.4   C90.4,436.6,87.3,437.2,84.2,437.2z M125.1,94.1c-58.4,0-105.9,47.5-105.9,105.9c0,52.4,39.1,97.4,90.9,104.8l9.5,1.3l-1.3,9.5   c-4.7,34-17.8,66.8-38.1,94.8c-1.3,1.8-1.2,4.1,0.1,5.8c1.3,1.7,3.6,2.3,5.6,1.5c88.1-36.8,145-122.2,145-217.7   C231,141.5,183.5,94.1,125.1,94.1z M346,437.2c-7.2,0-14.2-3.2-18.9-9.1c-6.7-8.4-6.9-20.3-0.7-29c16.6-22.9,27.9-49.4,33.1-77   c-25.8-5.8-49.2-19.7-66.8-39.8c-20-22.8-31-52-31-82.3c0-69,56.1-125.1,125.1-125.1S512,130.9,512,199.9   c0,103.2-61.6,195.6-156.8,235.4C352.2,436.6,349.1,437.2,346,437.2z M386.9,94.1c-58.4,0-105.9,47.5-105.9,105.9   c0,52.4,39.1,97.4,90.9,104.8l9.5,1.3l-1.3,9.5c-4.7,34-17.8,66.8-38.1,94.8c-1.3,1.8-1.2,4.1,0.1,5.8c1.3,1.7,3.6,2.3,5.6,1.5   c88.1-36.8,145-122.2,145-217.7C492.8,141.5,445.3,94.1,386.9,94.1z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="lead margin-b10">"Discover our luxurious collection of dresses, carefully
                                        crafted to suit every taste, with a touch of elegance and femininity."
                                    </div>

                                </div>
                            </div>
                            <!-- /col-md-4 -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /SECTION 3 -->
                <!-- SECTION 4 -->
                <div id="home-section-2-4" class="section-holder home-section-2-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 margin-bm50">
                                <div class="el-smalltitle">Get in Touch</div>
                                <h2 class="display-4 margin-b30">Book a Consultation for Your Dream Wedding Dress</h2>
                                <p>We’d love to help you create the wedding dress of your dreams. Whether you're envisioning
                                    a classic, modern, or completely unique design, we're here to bring your vision to life.
                                    Book a consultation with us today to begin your journey towards a one-of-a-kind gown
                                    that reflects your style and elegance.</p>
                            </div>
                            <!-- /col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="margin-l50">
                                    <div id="contact-form-holder">
                                        <form method="POST" action='{{ route('contuctus.store') }}'>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4 margin-b30"><input type="text" name="name"
                                                        class="comm-field" placeholder="Name" /></div>
                                                <div class="col-md-4 margin-b30"><input type="text" name="email"
                                                        class="comm-field" placeholder="Email" /> </div>
                                                <div class="col-md-4 margin-b30"><input type="text" name="phone"
                                                        class="comm-field" placeholder="Phone" /> </div>
                                            </div>
                                            <div class="margin-b30">
                                                <textarea name="message" id="msg-contact" rows="5" placeholder="Message"></textarea>
                                            </div>
                                            <p class="antispam">Leave this empty: <input type="text" name="url" />
                                            </p>
                                            <button class="submit" type="submit">Submit</button>
                                        </form>
                                    </div>
                                    <!-- contact-form-holder-->
                                 @if(session('success'))
    <div class="bg-success text-white">{{ session('success') }}</div>
@endif

                                </div>
                            </div>
                            <!-- /col-lg-6 -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /SECTION 4 -->
            </div>
            <!-- /WRAP CONTENT -->

            <div class="scrollup">
                <a class="scrolltop" href="#">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
            <!-- jQuery -->
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

            <!-- Bootstrap Bundle JS (يتضمن Modal functionality) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


            <script>
                function toggleHeart(element) {
                    const icon = element.querySelector('i');
                    icon.classList.toggle('fa-regular');
                    icon.classList.toggle('fa-solid');
                }
                 < !--JavaScript-- >

              let selectedColor = null;
let selectedSize = null;
let rating = 0;

function resetSelections() {
    selectedColor = null;
    selectedSize = null;
    rating = 0;
    document.querySelectorAll("#dressModal .btn-outline-dark").forEach(b => b.classList.remove("active"));
    document.querySelectorAll("#dressModal .btn-outline-secondary").forEach(b => b.classList.remove("active"));
    resetStarDisplay();
}

function openDressModal(image, title, description, productId, price) {
    document.getElementById('dressImage').src = image;
    document.getElementById('dressTitle').textContent = title;
    document.getElementById('dressPrice').textContent = price + '$';

    document.getElementById('selectedProductId').value = productId;
    document.getElementById('selectedProductPrice').value = price;

    resetSelections();

    var modal = new bootstrap.Modal(document.getElementById('dressModal'));
    modal.show();
}

function selectColor(btn) {
    document.querySelectorAll("#dressModal .btn-outline-dark").forEach(b => b.classList.remove("active"));
    btn.classList.add("active");
    selectedColor = btn.textContent;
}

function selectSize(btn) {
    document.querySelectorAll("#dressModal .btn-outline-secondary").forEach(b => b.classList.remove("active"));
    btn.classList.add("active");
    selectedSize = btn.textContent;
}


                    const message = `
✅ Product added to your cart:

• Name: ${title}
• Price: ${price}
• Color: ${selectedColor}
• Size: ${selectedSize}
• Rating: ${rating} star${rating > 1 ? 's' : ''}
    `.trim();

                    alert(message);
                    bootstrap.Modal.getInstance(document.getElementById("dressModal")).hide();
                }

                // Setup stars
                const stars = document.getElementById('starRating');
                stars.innerHTML = '';
                for (let i = 0; i < 5; i++) {
                    const star = document.createElement('span');
                    star.textContent = '☆';
                    star.style.cursor = 'pointer';
                    star.style.fontSize = '24px';
                    star.style.color = '#FFD700';
                    stars.appendChild(star);
                }

                function resetStarDisplay() {
                    Array.from(stars.children).forEach(star => star.textContent = '☆');
                }

                stars.addEventListener('mouseover', function(e) {
                    if (e.target.tagName === 'SPAN') {
                        const index = Array.from(stars.children).indexOf(e.target);
                        for (let i = 0; i < stars.children.length; i++) {
                            stars.children[i].textContent = i <= index ? '★' : '☆';
                        }
                    }
                });

                stars.addEventListener('click', function(e) {
                    if (e.target.tagName === 'SPAN') {
                        rating = Array.from(stars.children).indexOf(e.target) + 1;
                        for (let i = 0; i < stars.children.length; i++) {
                            stars.children[i].textContent = i < rating ? '★' : '☆';
                        }
                    }
                });
function goToCart() {
    window.location.href = "{{ route('cart.index') }}";
}



            </script>
        @endsection
