@extends('site.layouts.master')


@section('content')

<div class="top-single-bkg top-single-gallery">
			<div class="topsingleimg"> <img src="{{ asset('site/images/85.jpg') }}"alt="" width="1920" height="2080"></div>

		</div>
		<!-- /TOP HEADER IMAGE -->
		<!-- WRAP CONTENT -->
	<div id="wrap-content" class="page-content page-gallery-content">
  <div class="container">
    <!-- /page-holder -->
  </div>
  <div class="gallery-container">
    <div class="container">
      <div class="row">



        <div class="col-lg-3 col-md-4 col-sm-6 mb-4 position-relative item-portfolio">
  <div style="cursor: pointer;" onclick="openGalleryModal'{{ asset('site/images/68.jpg') }}'">
    <img class="img-fluid" loading="lazy" src="{{ asset('site/images/68.jpg') }}" alt="Evening Dress" style="width: 100%; height: auto;">
  </div>
  <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
    <div class="heart-circle" onclick="event.stopPropagation(); toggleHeart(this)">
      <i class="fa-regular fa-heart fs-4"></i>
    </div>
  </div>
  <div class="mt-2 text-center">
    <h5 class="mb-1">Evening Dress</h5>

  </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 mb-4 position-relative item-portfolio">
  <div style="cursor: pointer;" onclick="openGalleryModal'{{ asset('site/images/69.jpg') }}'">
    <img class="img-fluid" loading="lazy" src="{{ asset('site/images/69.jpg') }}" alt="Evening Dress" style="width: 100%; height: auto;">
  </div>
  <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
    <div class="heart-circle" onclick="event.stopPropagation(); toggleHeart(this)">
      <i class="fa-regular fa-heart fs-4"></i>
    </div>
  </div>
  <div class="mt-2 text-center">
    <h5 class="mb-1">Evening Dress</h5>

  </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 mb-4 position-relative item-portfolio">
  <div style="cursor: pointer;" onclick="openGalleryModal'{{ asset('site/images/80.jpg')}}'">
    <img class="img-fluid" loading="lazy" src="{{ asset('site/images/80.jpg') }}"alt="Evening Dress" style="width: 100%; height:auto;">
  </div>
  <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
    <div class="heart-circle" onclick="event.stopPropagation(); toggleHeart(this)">
      <i class="fa-regular fa-heart fs-4"></i>
    </div>
  </div>
  <div class="mt-2 text-center">
    <h5 class="mb-1">Evening Dress</h5>

  </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 mb-4 position-relative item-portfolio">
  <div style="cursor: pointer;" onclick="openGalleryModal'{{ asset('site/images/71.jpg') }}'">
    <img class="img-fluid" loading="lazy" src="{{ asset('site/images/71.jpg') }}" alt="Evening Dress" style="width: 100%; height: auto;">
  </div>
  <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
    <div class="heart-circle" onclick="event.stopPropagation(); toggleHeart(this)">
      <i class="fa-regular fa-heart fs-4"></i>
    </div>
  </div>
  <div class="mt-2 text-center">
    <h5 class="mb-1">Evening Dress</h5>

  </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 mb-4 position-relative item-portfolio">
  <div style="cursor: pointer;" onclick="openGalleryModal'{{ asset('site/images/72.jpg') }}'">
    <img class="img-fluid" loading="lazy" src="{{ asset('site/images/72.jpg') }}"alt="Evening Dress" style="width: 100%; height: auto;">
  </div>
  <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
    <div class="heart-circle" onclick="event.stopPropagation(); toggleHeart(this)">
      <i class="fa-regular fa-heart fs-4"></i>
    </div>
  </div>
  <div class="mt-2 text-center">
    <h5 class="mb-1">Evening Dress</h5>

  </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 mb-4 position-relative item-portfolio">
  <div style="cursor: pointer;" onclick="openGalleryModal'{{ asset('site/images/73.jpg') }}'">
    <img class="img-fluid" loading="lazy" src="{{ asset('site/images/73.jpg') }}" alt="Evening Dress" style="width: 100%; height: auto;">
  </div>
  <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
    <div class="heart-circle" onclick="event.stopPropagation(); toggleHeart(this)">
      <i class="fa-regular fa-heart fs-4"></i>
    </div>
  </div>
  <div class="mt-2 text-center">
    <h5 class="mb-1">Evening Dress</h5>

  </div>
</div>


<!-- Modal للمعرض -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header">
        <h5 class="modal-title" id="galleryTitle"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">
        <div class="col-md-6">
          <img id="galleryImage" src="" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
          <h4 id="galleryPrice" class="mb-3 text-success fw-bold"></h4>

          <!-- Sizes -->
          <div class="mb-3">
            <label class="form-label fw-bold">Choose Size:</label><br>
            <button class="btn btn-outline-secondary me-2" onclick="selectSize(this)">S</button>
            <button class="btn btn-outline-secondary me-2" onclick="selectSize(this)">M</button>
            <button class="btn btn-outline-secondary" onclick="selectSize(this)">L</button>
          </div>

          <!-- Star Rating -->
          <div class="mb-3">
            <label class="form-label fw-bold">Rate this product:</label><br>
            <div id="galleryRating" class="star-rating"></div>
          </div>

          <!-- Confirmation Message -->
          <div id="confirmationMessage" class="alert alert-info d-none mt-3"></div>

          <!-- Add to Cart -->
          <button class="btn btn-beige mt-3" onclick="confirmGalleryCart()">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>
</div>



			<!-- /gallery-container -->
			<div class="container prev-next-gallery">
				<div class="row meta-nav-holder port-meta-nav">
					<div class="col-md-6 meta-nav meta-nav-left">
						<div class="pn-holder">
							<div class="pn-img"> <a href="#"> <img class="img-fluid" src="{{ asset('site/images/67.jpg') }}" alt="Prev Gallery"> </a></div>
							<div class="pn-desc">
								<div class="prev-next-title">
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" style="enable-background:new 0 0 320 512;" xml:space="preserve">
											<path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
										</svg>
										Previous Gallery
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 meta-nav meta-nav-right">
						<div class="pn-holder">
							<div class="pn-desc">
								<div class="prev-next-title">
									<a href="#">
										Next Gallery
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" style="enable-background:new 0 0 320 512;" xml:space="preserve">
											<path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
										</svg>
									</a>
								</div>
							</div>
							<div class="pn-img"> <a href="#"> <img class="img-fluid" src="{{ asset('site/images/78.jpg') }}" alt="Next Gallery"> </a></div>
						</div>
					</div>
				</div>
			</div>
			<!-- /prev-next-gallery -->
		</div>

<div id="footer-instagram">
			<ul class="instagram-pics instagram-size-small">
				<li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="{{ asset('site/images/51.jpg') }}" alt=""></a></li>
				<li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="{{ asset('site/images/44.jpg') }}" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="{{ asset('site/images/59.jpg') }}"></a></li>
				<li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="{{ asset('site/images/58.jpg') }}"></a></li>

				<li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="{{ asset('site/images/76.jpg') }}"  ></a></li>
				<li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="{{ asset('site/images/71.jpg') }}"></a></li>



			</ul>

		</div>

<div class="scrollup">
			<a class="scrolltop" href="#">
			<i class="fa fa-chevron-up"></i>
			</a>
		</div>
		<script>
			function toggleHeart(element) {
			  const icon = element.querySelector('i');
			  icon.classList.toggle('fa-regular');
			  icon.classList.toggle('fa-solid');
			}
			</script>

		<!-- JS -->
		<script src='{{ asset ('site/js/jquery-migrate.min.js')}}'></script>
		<script src='{{ asset ('site/css/bootstrap/js/popper.min.js')}}'></script>
		<script src='{{ asset ('site/css/bootstrap/js/bootstrap.min.js')}}'></script>
		<script src='{{ asset ('site/js/jquery.easing.min.js')}}'></script>


	<script src='{{ asset ('site/js/jquery.js')}}'></script>
		<script src='{{ asset ('site/js/jquery-migrate.min.js')  }}'></script>
		<script src='{{ asset ('site/js/jquery.easing.min.js') }}'></script>
		<script src='{{ asset ('site/js/swiper.js') }}'></script>
		<script src='{{ asset ('site/js/isotope.js') }}'></script>
		<script src='{{ asset ('site/js/simple-lightbox.js')  }}'></script>
        <script src='{{ asset ('site/js/jquery.easing.min.js')  }}'></script>
		<!-- MAIN JS -->
		<script src='{{ asset('site/js/init.js') }}'></script>
		<!-- CONTACT FORM JS -->
		<script src='{{ asset ('site/js/jquery.form.min.js')  }}'></script>
		<script src='{{ asset('site/js/contactform.js') }}'></script>

		<script>
  function openGalleryModal(imgSrc, title, price) {
    document.getElementById('galleryImage').src = imgSrc;
    document.getElementById('galleryTitle').textContent = title;
    document.getElementById('galleryPrice').textContent = price;
    document.getElementById('confirmationMessage').classList.add('d-none');
    // Reset selected size
    document.querySelectorAll('#galleryModal .btn-outline-secondary').forEach(btn => btn.classList.remove('active'));
    newStarRating('galleryRating'); // إعداد التقييم
    new bootstrap.Modal(document.getElementById('galleryModal')).show();
  }

  function selectSize(button) {
    const buttons = button.parentElement.querySelectorAll('button');
    buttons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
  }

  function confirmGalleryCart() {
    const selectedSize = document.querySelector('#galleryModal .btn-outline-secondary.active');
    if (!selectedSize) {
      alert("Please select a size before adding to cart.");
      return;
    }

    // رسالة تأكيد
    const msg = document.getElementById('confirmationMessage');
    msg.textContent = `Product added to cart with size: ${selectedSize.textContent}`;
    msg.classList.remove('d-none');
  }

  function newStarRating(containerId) {
    const container = document.getElementById(containerId);
    container.innerHTML = '';
    for (let i = 1; i <= 5; i++) {
      const star = document.createElement('i');
      star.className = 'fa-regular fa-star fs-4 me-1';
      star.style.cursor = 'pointer';
      star.onclick = function () {
        [...container.children].forEach((el, idx) => {
          el.className = idx < i ? 'fa-solid fa-star fs-4 me-1 text-warning' : 'fa-regular fa-star fs-4 me-1';
        });
      };
      container.appendChild(star);
    }
  }
</script>

@endsection
