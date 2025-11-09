@extends('site.layouts.master')


@section('content')

<div class="top-single-bkg top-single-gallery">
			<div class="topsingleimg"> <img src="{{ asset('site/images/206.jpg') }}" alt="" width="1920" height="1080"></div>
			<div class="inner-desc">
				<div class="container">
					<h1 class="display-2 single-post-title">cap</h1>

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

        <div class="portfolio-grid gallery-holder-grid gallery-grid3cols row g-3">

          <!-- Cap Item 1 -->
        <div class="item-portfolio col-md-4">
            <img src="{{ asset('site/images/201.jpg') }}" alt="Cap B" title="Cap B"
                 onclick="openCapModal('{{ asset('site/images/201.jpg') }}', 'Cap B', '$35')" />
            <div class="heart-icon-container" onclick="event.stopPropagation(); toggleHeart(this);">
              <i class="fa-regular fa-heart"></i>
            </div>
          </div>

          <!-- Cap Item 2 -->
          <div class="item-portfolio col-md-4">
            <img src="{{ asset('site/images/109.jpg') }}" alt="Cap B" title="Cap B"
                 onclick="openCapModal('{{ asset('site/images/109.jpg') }}', 'Cap B', '$35')" />
            <div class="heart-icon-container" onclick="event.stopPropagation(); toggleHeart(this);">
              <i class="fa-regular fa-heart"></i>
            </div>
          </div>

          <!-- Cap Item 3 -->
          <div class="item-portfolio col-md-4">
            <img src="{{ asset('site/images/213.jpg') }}" alt="Cap C" title="Cap C"
                 onclick="openCapModal('{{ asset('site/images/213.jpg') }}', 'Cap C', '$50')" />
            <div class="heart-icon-container" onclick="event.stopPropagation(); toggleHeart(this);">
              <i class="fa-regular fa-heart"></i>
            </div>
          </div>

          <!-- Cap Item 4 -->
          <div class="item-portfolio col-md-4">
            <img src="{{ asset('site/images/211.jpg') }}" alt="Cap D" title="Cap D"
                 onclick="openCapModal('{{ asset('site/images/211.jpg') }}', 'Cap D', '$45')" />
            <div class="heart-icon-container" onclick="event.stopPropagation(); toggleHeart(this);">
              <i class="fa-regular fa-heart"></i>
            </div>
          </div>

          <!-- Cap Item 5 -->
          <div class="item-portfolio col-md-4">
            <img src="{{ asset('site/images/207.jpg') }}" alt="Cap E" title="Cap E"
                 onclick="openCapModal('{{ asset('site/images/207.jpg') }}', 'Cap E', '$38')" />
            <div class="heart-icon-container" onclick="event.stopPropagation(); toggleHeart(this);">
              <i class="fa-regular fa-heart"></i>
            </div>
          </div>

          <!-- Cap Item 6 -->
<div class="item-portfolio col-md-4">
  <img src="{{ asset('site/images/208.jpg') }}" alt="Cap F" title="Cap F"
       onclick="openCapModal('{{ asset('site/images/208.jpg') }}', 'Cap E', '$38')" />

  <div class="heart-icon-container" onclick="event.stopPropagation(); toggleHeart(this);">
    <i class="fa-regular fa-heart"></i>
  </div>
</div>




        </div>

      </div>
    </div>
  </div>



<!-- Modal لكاب -->
<div class="modal fade" id="capModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header">
        <h5 class="modal-title" id="capTitle"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">
        <!-- الصورة -->
        <div class="col-md-6">
          <img id="capImage" src="" class="img-fluid rounded" alt="Cap Image">
        </div>

        <!-- تفاصيل المنتج -->
        <div class="col-md-6">
          <h4 id="capPrice" class="mb-3 text-success fw-bold"></h4>


          <!-- تقييم النجوم -->
          <div class="mb-3">
            <label class="form-label fw-bold">Rate this product:</label><br>
            <div id="capRating" class="star-rating">
              <span class="star" onclick="rateProduct(1)">☆</span>
              <span class="star" onclick="rateProduct(2)">☆</span>
              <span class="star" onclick="rateProduct(3)">☆</span>
              <span class="star" onclick="rateProduct(4)">☆</span>
              <span class="star" onclick="rateProduct(5)">☆</span>
            </div>
          </div>

          <!-- رسالة تأكيد -->
          <div id="confirmationMessage" class="alert alert-info d-none mt-3"></div>

          <!-- زر الإضافة إلى السلة -->
          <button class="btn btn-beige mt-3" onclick="confirmCart()">Add to Cart</button>
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
							<div class="pn-img"> <a href="#"> <img class="img-fluid" src="{{ asset('site/images/208.jpg') }}" alt="Prev Gallery"> </a></div>
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
							<div class="pn-img"> <a href="#"> <img class="img-fluid" src="{{ asset('site/images/207.jpg') }}" alt="Next Gallery"> </a></div>
						</div>
					</div>
				</div>
			</div>
			<!-- /prev-next-gallery -->
		</div>

<div id="footer-instagram">
					<ul class="instagram-pics instagram-size-small">

						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/20.jpg') }}" height="250"
									width="250" alt="" /></a></li>
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/28.jpg') }}"height="250"
									width="250" alt="" /></a></li>
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/22.jpg') }}" height="250"
									width="250" alt="" /></a></li>
					<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/23.jpg') }}" height="250"
  width="250" alt="" /></a></li>
"
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/24.jpg') }}" height="250"
									width="250" alt="" /></a></li>
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/29.jpg') }}"height="250"
									width="250" alt="" /></a></li>
						<li class=""><a href="#" target="_blank" class=""><img src="{{ asset('site/images/26.jpg') }}" height="250"
									width="250" alt="" /></a></li>
					</ul>

				</div>






<script>
		// فتح المودال مع بيانات الكاب
function openCapModal(imageSrc, title, price) {
  document.getElementById('capImage').src = imageSrc;
  document.getElementById('capTitle').innerText = title;
  document.getElementById('capPrice').innerText = price;


  document.getElementById('confirmationMessage').classList.add('d-none');
  resetRating();

}
function resetRating() {
  document.querySelectorAll('#capRating .star').forEach(star => {
    star.classList.remove('rated');
    star.innerText = '☆';
  });
}


var modal = new bootstrap.Modal(document.getElementById('capModal'));
modal.show();
// تبديل لون القلب
function toggleHeart(element) {
  element.classList.toggle('liked');
}
</script>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>







@endsection
