@extends('site.layouts.master')

@section('content')
<style>
.sidebar {
  position: fixed;
  top: 0;
  right: 0;
  width: 400px;
  height: 100%;
  background-color: white;
  padding: 20px;
  box-shadow: -2px 0 10px rgba(0,0,0,0.1);
  overflow-y: auto;
  z-index: 1050;
  display: none;
}
.sidebar.active { display: block; }
.sidebar .close-btn {
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 24px;
  cursor: pointer;
}
.star.selected { color: gold; }
</style>



<div class="top-single-bkg top-single-gallery">
			<div class="topsingleimg"> <img src="{{ asset('site/images/377.jpg') }}"alt="" width="1920" height="1080"></div>
			<div class="inner-desc">
				<div class="container">
					<h1 class="display-2 single-post-title">High heel</h1>
					<span class="post-subtitle"></span>
				</div>
			</div>
		</div>
		<!-- /TOP HEADER IMAGE -->
		<!-- WRAP CONTENT -->
		<div class="container gallery-container">
  <div class="row">
    <!-- بطاقة 1 -->
    <div class="col-md-4 mb-4">
      <div class="card position-relative shadow" style="height: 400px;">
        <a href="#" onclick="openSidebar('{{ asset('site/images/362.jpg') }}', 'White High Heels', 320); return false;">

          <img class="card-img-top img-fluid" src="{{ asset('site/images/362.jpg') }}" alt="White high heels" style="object-fit: cover; height: 280px;">
        </a>
        <div class="card-body text-center">
          <h6>White high heels</h6>
          <a class="btn purchaseButton text-white" style="background-color: #AA896F;" href="#">Purchase</a>
        </div>
        <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
          <i class="fa-regular fa-heart fs-4" style="color: #AA896F;"></i>
        </div>
      </div>
    </div>

    <!-- بطاقة 2 -->
    <div class="col-md-4 mb-4">
      <div class="card position-relative shadow" style="height: 400px;">
        <a href="#" onclick="openSidebar('{{ asset('site/images/361.jpg') }}', 'White High Heels', 320); return false;">

          <img class="card-img-top img-fluid" src="{{ asset('site/images/361.jpg') }}"alt="White high heels" style="object-fit: cover; height: 280px;">
        </a>
        <div class="card-body text-center">
          <h6>White high heels</h6>
          <a class="btn purchaseButton text-white" style="background-color: #AA896F;" href="#">Purchase</a>
        </div>
        <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
          <i class="fa-regular fa-heart fs-4" style="color: #AA896F;"></i>
        </div>
      </div>
    </div>

    <!-- بطاقة 3 -->
    <div class="col-md-4 mb-4">
      <div class="card position-relative shadow" style="height: 400px;">
       <a href="#" onclick="openSidebar('{{ asset('site/images/363.jpg') }}', 'White High Heels', 320); return false;">

          <img class="card-img-top img-fluid" src="{{ asset('site/images/363.jpg') }}" alt="Another product" style="object-fit: cover; height: 280px;">
        </a>
        <div class="card-body text-center">
          <h6>Another product</h6>
          <a class="btn purchaseButton text-white" style="background-color: #AA896F;" href="#">Purchase</a>
        </div>
        <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
          <i class="fa-regular fa-heart fs-4" style="color: #AA896F;"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- Sidebar مرة واحدة فقط خارج الصف -->

  <div class="row">
    <!-- بطاقة 1 -->
    <div class="col-md-4 mb-4">
      <div class="card position-relative shadow" style="height: 400px;">
        <a href="#" onclick="openSidebar('{{ asset('site/images/369.jpg') }}', 'White High Heels', 320); return false;">

          <img class="card-img-top img-fluid" src="{{ asset('site/images/369.jpg') }}" alt="White high heels" style="object-fit: cover; height: 280px;">
        </a>
        <div class="card-body text-center">
          <h6>White high heels</h6>
          <a class="btn purchaseButton text-white" style="background-color: #AA896F;" href="#">Purchase</a>
        </div>
        <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
          <i class="fa-regular fa-heart fs-4" style="color: #AA896F;"></i>
        </div>
      </div>
    </div>

    <!-- بطاقة 2 -->
    <div class="col-md-4 mb-4">
      <div class="card position-relative shadow" style="height: 400px;">
       <a href="#" onclick="openSidebar('{{ asset('site/images/375.jpg') }}', 'White High Heels', 320); return false;">

          <img class="card-img-top img-fluid" src="{{ asset('site/images/375.jpg') }}" alt="White high heels" style="object-fit: cover; height: 280px;">
        </a>
        <div class="card-body text-center">
          <h6>White high heels</h6>
          <a class="btn purchaseButton text-white" style="background-color: #AA896F;" href="#">Purchase</a>
        </div>
        <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
          <i class="fa-regular fa-heart fs-4" style="color: #AA896F;"></i>
        </div>
      </div>
    </div>

    <!-- بطاقة 3 -->
    <div class="col-md-4 mb-4">
      <div class="card position-relative shadow" style="height: 400px;">
      <a href="#" onclick="openSidebar('{{ asset('site/images/378.jpg') }}', 'White High Heels', 320); return false;">

          <img class="card-img-top img-fluid" src="{{ asset('site/images/378.jpg') }}"alt="Another product" style="object-fit: cover; height: 280px;">
        </a>
        <div class="card-body text-center">
          <h6>Another product</h6>
          <a class="btn purchaseButton text-white" style="background-color: #AA896F;" href="#">Purchase</a>
        </div>
        <div class="position-absolute top-0 end-0 m-2 heart-icon-container">
          <i class="fa-regular fa-heart fs-4" style="color: #AA896F;"></i>
        </div>
      </div>
    </div>
  </div>

</div>

					<br><br>
					<br>
			<!-- /gallery-container -->
			<div class="container prev-next-gallery">
				<div class="row meta-nav-holder port-meta-nav">
					<div class="col-md-6 meta-nav meta-nav-left">
						<div class="pn-holder">
							<div class="pn-img"> <a href="#"> <img class="img-fluid" src="{{ asset('site/images/364.jpg') }}" alt="Prev Gallery"> </a></div>
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
							<div class="pn-img"> <a href="#"> <img class="img-fluid" src="{{ asset('site/images/365.jpg') }}" alt="Next Gallery"> </a></div>
						</div>
					</div>
				</div>
			</div>
			<!-- /prev-next-gallery -->
		</div>
		<!-- /WRAP CONTENT -->
		<!-- FOOTER -->
		<div id="footer-instagram">
			<ul class="instagram-pics instagram-size-small">
				<li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="{{ asset('site/images/380.jpg') }}" alt=""/></a></li>

				<li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="{{ asset('site/images/373.jpg') }}" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="{{ asset('site/images/374.jpg') }}" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="{{ asset('site/images/376.jpg') }}" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="{{ asset('site/images/378.jpg') }}" alt=""/></a></li>
				<li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="{{ asset('site/images/379.jpg') }}"alt=""/></a></li>
			</ul>
			<p class="clear"><a href="#" rel="me" target="_blank" class="">Follow Us!</a></p>
		</div>

		<!-- /FOOTER -->
		<div class="scrollup">
			<a class="scrolltop" href="#">
			<i class="fa fa-chevron-up"></i>
			</a>
		</div>
	<script>
function openSidebar(imageSrc, productName, price) {
  document.getElementById("sidebarImage").src = imageSrc;
  document.querySelector("#sidebar h5").innerText = productName;
  document.querySelector("#sidebar .fw-bold").innerText = `$${price.toFixed(2)}`;
  document.getElementById("sidebar").classList.add("active");
}

function closeSidebar() {
  document.getElementById("sidebar").classList.remove("active");
}

let selectedColor = null;
let selectedSize = null;
let selectedRating = 0;

document.querySelectorAll('.color-btn').forEach(btn => {
  btn.addEventListener('click', function () {
    document.querySelectorAll('.color-btn').forEach(b => b.classList.remove('active'));
    this.classList.add('active');
    selectedColor = this.getAttribute('data-color');
  });
});

document.getElementById('sizeSelect').addEventListener('change', function () {
  selectedSize = this.value;
});

document.querySelectorAll('#ratingStars .star').forEach(star => {
  star.addEventListener('click', function () {
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
  alert(`✔ Product added to cart!\nColor: ${selectedColor}\nSize: ${selectedSize}\nRating: ${selectedRating} star(s)`);
}
</script>

<div id="sidebar" class="sidebar">
  <span class="close-btn" onclick="closeSidebar()">&times;</span>
  <img id="sidebarImage" src="" alt="Product" class="img-fluid mb-3 rounded">
  <h5>White High Heels</h5>
  <p class="text-primary fw-bold">$320.00</p>

  <label><strong>Choose Color:</strong></label>
  <div class="d-flex mb-3" id="colorOptions">
    <button class="btn color-btn me-2" data-color="White" style="background-color: white; border: 1px solid #ccc;">White</button>
    <button class="btn color-btn me-2" data-color="Beige" style="background-color: beige; border: 1px solid #ccc;">Beige</button>
    <button class="btn color-btn" data-color="Pink" style="background-color: pink; border: 1px solid #ccc;">Pink</button>
  </div>

  <label><strong>Select Size:</strong></label>
  <select id="sizeSelect" class="form-select mb-3">
    <option disabled selected>Choose size</option>
    <option>36</option>
    <option>37</option>
    <option>38</option>
    <option>39</option>
    <option>40</option>
  </select>

  <label><strong>Your Rating:</strong></label>
  <div class="mb-3" id="ratingStars">
    <span class="star" data-value="1">&#9734;</span>
    <span class="star" data-value="2">&#9734;</span>
    <span class="star" data-value="3">&#9734;</span>
    <span class="star" data-value="4">&#9734;</span>
    <span class="star" data-value="5">&#9734;</span>
  </div>

  <button class="btn w-100" style="background-color: #AA896F; color: white;" onclick="addToCart()">Add to Cart</button>
</div>




@endsection
