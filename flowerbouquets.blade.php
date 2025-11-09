@extends('site.layouts.master')


@section('content')

<div class="top-single-bkg top-single-gallery">
			<div class="topsingleimg"> <img src="{{ asset('site/images/324.jpg') }}" alt="" width="1920" height="1080"></div>
			<div class="inner-desc">
				<div class="container">
					<h1 class="display-2 single-post-title">flower bouquets</h1>

				</div>
			</div>
		</div>
		<!-- /TOP HEADER IMAGE -->
		<!-- WRAP CONTENT -->
		<div id="wrap-content" class="page-content page-gallery-content">
			<div class="gallery-container py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="portfolio-grid gallery-holder-grid gallery-grid5cols d-flex flex-wrap gap-3 justify-content-center">

          <div class="item-portfolio item-5cols gallery-post">
            <img src="{{ asset('site/images/301.jpg') }}" alt="Rose" title="Rose" width="200" height="200"
                 onclick="openGalleryModal('{{ asset('site/images/301.jpg') }}', 'Rose', '$20')"/>
				 <div class="position-absolute top-0 end-0 m-2 heart-icon-container">

        </div>
          </div>

          <div class="item-portfolio item-5cols gallery-post">
            <img src="{{ asset('site/images/302.jpg') }}"  alt="Tulip" title="Tulip" width="200" height="200"
                 onclick="openGalleryModal('{{ asset('site/images/302.jpg') }}', 'Tulip', '$15')"/>
          </div>

          <div class="item-portfolio item-5cols gallery-post">
            <img src="{{ asset('site/images/303.jpg') }}"  alt="Sunflower" title="Sunflower" width="200" height="200"
                 onclick="openGalleryModal('{{ asset('site/images/303.jpg') }}', 'Sunflower', '$25')"/>
          </div>

          <div class="item-portfolio item-5cols gallery-post">
            <img src="{{ asset('site/images/304.jpg') }}"  alt="Daisy" title="Daisy" width="200" height="200"
                 onclick="openGalleryModal('{{ asset('site/images/304.jpg') }}', 'Daisy', '$18')"/>
          </div>

          <div class="item-portfolio item-5cols gallery-post">
            <img src="{{ asset('site/images/305.jpg') }}"  alt="Orchid" title="Orchid" width="200" height="200"
                 onclick="openGalleryModal('{{ asset('site/images/305.jpg') }}', 'Orchid', '$30')"/>
          </div>

		    <div class="item-portfolio item-5cols gallery-post">
            <img src="{{ asset('site/images/306.jpg') }}" alt="Rose" title="Rose" width="200" height="200"
                 onclick="openGalleryModal('{{ asset('site/images/306.jpg') }}', 'Rose', '$20')"/>
          </div>

          <div class="item-portfolio item-5cols gallery-post">
            <img src="{{ asset('site/images/307.jpg') }}" alt="Tulip" title="Tulip" width="200" height="200"
                 onclick="openGalleryModal('{{ asset('site/images/307.jpg') }}', 'Tulip', '$15')"/>
          </div>

          <div class="item-portfolio item-5cols gallery-post">
            <img src="{{ asset('site/images/308.jpg') }}"  alt="Sunflower" title="Sunflower" width="200" height="200"
                 onclick="openGalleryModal(''{{ asset('site/images/308.jpg') }}'', 'Sunflower', '$25')"/>
          </div>

          <div class="item-portfolio item-5cols gallery-post">
            <img src="{{ asset('site/images/309.jpg') }}"  alt="Daisy" title="Daisy" width="200" height="200"
                 onclick="openGalleryModal('{{ asset('site/images/309.jpg') }}', 'Daisy', '$18')"/>
          </div>

          <div class="item-portfolio item-5cols gallery-post">
            <img src="{{ asset('site/images/310.jpg') }}" alt="Orchid" title="Orchid" width="200" height="200"
                 onclick="openGalleryModal('{{ asset('site/images/310.jpg') }}', 'Orchid', '$30')"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

	<!-- Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header">
        <h5 class="modal-title" id="galleryTitle"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">
        <div class="col-md-6">
          <img id="galleryImage" src="" class="img-fluid rounded" alt="Flower Image" />
        </div>
        <div class="col-md-6">
          <h4 id="galleryPrice" class="mb-3 text-success fw-bold"></h4>

          <div class="mb-3">
            <label class="form-label fw-bold">Rate this product:</label><br />
            <div id="galleryRating" class="star-rating">
              <span class="star" onclick="rateProduct(1)">☆</span>
              <span class="star" onclick="rateProduct(2)">☆</span>
              <span class="star" onclick="rateProduct(3)">☆</span>
              <span class="star" onclick="rateProduct(4)">☆</span>
              <span class="star" onclick="rateProduct(5)">☆</span>
            </div>
          </div>

          <div id="confirmationMessage" class="alert alert-info d-none mt-3"></div>

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
							<div class="pn-img"> <a href="#"> <img class="img-fluid" src="{{ asset('site/images/315.jpg') }}"  alt="Prev Gallery"> </a></div>
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
							<div class="pn-img"> <a href="#"> <img class="img-fluid" src="{{ asset('site/images/303.jpg') }}" alt="Next Gallery"> </a></div>
						</div>
					</div>
				</div>
			</div>
			<!-- /prev-next-gallery -->
		</div>


        	<div id="footer-instagram">
			<ul class="instagram-pics instagram-size-small">
				<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/324.jpg') }}"  height="250" width="250"/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/317.jpg') }}"    height="250" width="250"alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/318.jpg') }}"  height="250" width="250" alt=""/></a></li>

				<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/320.jpg') }}"  height="250" width="250"alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/321.jpg') }}" height="250" width="250"alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/322.jpg') }}"  height="250" width="250"alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/323.jpg') }}" height="250" width="250" alt=""/></a></li>
			</ul>
			<p class="clear"><a href="#" rel="me" target="_blank" class="">Follow Us!</a></p>
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
  function openGalleryModal(imageSrc, title, price) {
    document.getElementById('galleryImage').src = imageSrc;
    document.getElementById('galleryImage').alt = title;
    document.getElementById('galleryTitle').innerText = title;
    document.getElementById('galleryPrice').innerText = price;
    document.getElementById('confirmationMessage').classList.add('d-none');
    resetRating();
    let modal = new bootstrap.Modal(document.getElementById('galleryModal'));
    modal.show();
  }

  function rateProduct(rating) {
    const stars = document.querySelectorAll('#galleryRating .star');
    stars.forEach((star, index) => {
      star.textContent = index < rating ? '★' : '☆';
    });
  }

  function resetRating() {
    const stars = document.querySelectorAll('#galleryRating .star');
    stars.forEach(star => star.textContent = '☆');
  }

  function confirmGalleryCart() {
    const confirmation = document.getElementById('confirmationMessage');
    confirmation.textContent = 'The flower has been successfully added to the cart!';
    confirmation.classList.remove('d-none');
  }



</script>


@endsection
