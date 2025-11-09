 <header class="main-header header-5">
 <div class="container">
<style>.sidebar {
    position: fixed;
    top: 0;
    right: -100%;
    width: 300px;
    height: 100%;
    background-color: #fff;
    box-shadow: -2px 0 5px rgba(0,0,0,0.2);
    padding: 20px;
    transition: right 0.3s ease-in-out;
    z-index: 1000;
}

.sidebar.active {
    right: 0;
}

.close-btn {
    cursor: pointer;
    font-size: 24px;
    position: absolute;
    top: 10px;
    right: 15px;
}
</style>
 <div class="top-header top-header-5">
 <div class="header-social header-social-5">
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

 .heart-icon-container {
 position: absolute;
 top: 10px;
 right: 10px;
 z-index: 10;
 }

 .heart-circle {
 background-color: rgba(255, 255, 255, 0.9);
 border-radius: 50%;
 padding: 8px;
 cursor: pointer;
 display: flex;
 align-items: center;
 justify-content: center;
 }

 .btn-beige {
 background-color: #f5f5dc;
 color: #000;
 border: none;
 }

 .btn-beige:hover {
 background-color: #e0e0c0;
 color: #000;
 }


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
														.heart-icon-container {
							position: absolute;
							top: 10px;
							right: 10px;
							z-index: 10;
							}

							.heart-circle {
							background-color: rgba(255, 255, 255, 0.9);
							border-radius: 50%;
							padding: 8px;
							cursor: pointer;
							display: flex;
							align-items: center;
							justify-content: center;
							}
								.item-portfolio {
  position: relative;
  display: inline-block;
}

.heart-icon-container {
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
  z-index: 10;
  background-color: rgba(255, 255, 255, 0.7);
  border-radius: 50%;
  padding: 5px;
  transition: background-color 0.3s ease;
}

.heart-icon-container i {
  color: #e74c3c;
  font-size: 22px;
  left: 5%;
  pointer-events: none;
}

.heart-icon-container.liked {
  background-color: rgba(231, 76, 60, 0.9);
}

.heart-icon-container.liked i {
  color: white;
}

  .item-portfolio img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 5px;
    display: block;
  }



 </style>




 <ul class="social-media">
 <li><a class="social-facebook" href="https://www.facebook.com/Syrianmik" target="_blank"><i
 class="fab fa-facebook-f"></i> </a></li>
 <li><a class="social-whatsapp" href="https://wa.me/905510069156" target="_blank"><i
 class="fab fa-whatsapp"></i></a></li>

 <li><a class="social-instagram" href="https://www.instagram.com/glamour_gruop/"
 target="_blank"><i class="fab fa-instagram"></i> </a></li>
 <li><a class="social-telegram" href="https://web.telegram.org/a/#-1001618501822"
 target="_blank"><i class="fab fa-telegram-plane"></i> </a></li>
 <li><a href="https://www.tiktok.com/@glamour_gruop?lang=ar" target="_blank"><i
 class="fab fa-tiktok"></i> </a></li>
 </ul>
<style>
  .icon-link {
    position: relative;
    display: inline-block;
  }
  .cart-count-badge {
    position: absolute;
    top: -8px;
    right: -10px;
    background: #AA896F;
    color: white;
    font-weight: bold;
    font-size: 14px;
    padding: 2px 7px;
    border-radius: 50%;
    box-shadow: 0 0 5px rgba(170, 137, 111, 0.7);
    user-select: none;
    transition: background 0.3s ease;
  }
  .cart-count-badge.zero {
    background: #ccc;
    color: #666;
  }
  .icon-link:hover .cart-count-badge {
    background: #8b6f53;
    box-shadow: 0 0 8px rgba(139, 111, 83, 0.9);
  }
</style>



 </div>
<?php

$userId = 1;


$orderCount = \App\Models\order::where('user_id', $userId)->count();
?>
 <div class="logo logo-5 logo-white ">
 <img class="img-fluid" src="{{ asset('site/images/110 (2).png') }}" alt="Glamour" width="139"
 height="90">
 </div>
 <div class="logo logo-5 logo-dark">
 <img class="img-fluid" src="{{ asset('site/images/110 (2).png') }}" alt="Glamour" width="139"
 height="90">
 </div>

 <div class="btn-header btn-header-5">
 <div class="btn-header btn-header-5">

<a href="#" class="icon-link" onclick="openSidebar()">
  <i class="fa fa-shopping-cart" style="font-size: 24px; color: #AA896F;"></i>
  <span class="cart-count-badge {{ $orderCount == 0 ? 'zero' : '' }}">
    {{ $orderCount > 0 ? $orderCount : 0 }}
  </span>
</a>

 <a href="favorites.html" class="icon-link">
 <i class="fa fa-heart" style="font-size: 24px; color: #AA896F;"></i>
 </a>


<a href="{{ route('llogin') }}" class="icon-link">
  <i class="fa fa-user" style="font-size: 24px; color: #AA896F;"></i>
</a>

 </div>
 </div>



 <!-- mobile menu button -->
 <div class="nav-button-holder nav-button-holder-5">
 <button type="button" class="nav-button">
 <svg version="1.1" id="btn-menu-open" xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16"
 style="enable-background:new 0 0 16 16;" xml:space="preserve">
 <g>
 <path d="M2,4L2,4C0.9,4,0,3.1,0,2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C4,3.1,3.1,4,2,4z">
 </path>
 <path d="M8,4L8,4C6.9,4,6,3.1,6,2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C10,3.1,9.1,4,8,4z">
 </path>
 <path
 d="M14,4L14,4c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C16,3.1,15.1,4,14,4z">
 </path>
 <path
 d="M2,10L2,10c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C4,9.1,3.1,10,2,10z">
 </path>
 <path
 d="M8,10L8,10c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C10,9.1,9.1,10,8,10z">
 </path>
 <path
 d="M14,10L14,10c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C16,9.1,15.1,10,14,10z">
 </path>
 <path
 d="M2,16L2,16c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C4,15.1,3.1,16,2,16z">
 </path>
 <path
 d="M8,16L8,16c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C10,15.1,9.1,16,8,16z">
 </path>
 <path
 d="M14,16L14,16c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C16,15.1,15.1,16,14,16z">
 </path>
 </g>
 </svg>
 </button>
 </div>
 <!-- /mobile menu button -->
 </div>
 <!-- /top-header -->
 <div class="header-container5">
 <nav class="nav-holder nav-holder-5">
 <ul class="menu-nav">
 <li class="menu-item menu-item-has-children">
 <a href="{{ route('sitehome.index') }}">Home</a>

 </li>
 <li class="menu-item menu-item-has-children">
 <a href="#">Pages</a>
 <ul class="sub-menu">
 <li class="menu-item menu-item-has-children menu-item-parent-2level">
 <a href="{{ route('siteProducts.index') }}">our offers </a>

 </li>
 <li class="menu-item"><a href="{{ route('aboutmessite.index') }}">About Me</a></li>

 <li class="menu-item"><a href="{{ route('aboutUsssite.index') }}">About Us </a></li>


 <li class="menu-item"><a href="{{ route('showFaqsite.index') }}">FAQ Page</a></li>


 </ul>
 </li>
 <li class="menu-item menu-item-has-children">
 <a href="#">Dresses</a>
 <ul class="sub-menu">

 <li class="menu-item"><a href="{{ route('eveningdresses1.index') }}">Evening Dresses 1</a></li>

 <li class="menu-item"><a href="{{ route('eveningdresses2.index') }}">Evening Dresses 2</a></li>
 </ul>
 </li>
 <li class="menu-item menu-item-has-children ">
 <a href="#">Blog</a>
 <ul class="sub-menu">
     <li class="menu-item"><a href="{{ route('flowerbouquets.index') }}">Flower Bouquets</a></li>
                  <li class="menu-item"><a href="{{ route('cap.index') }}">Cap</a></li>
                  <li class="menu-item"><a href="{{ route('crown.index') }}">crown</a></li>
                  <li class="menu-item"><a href="{{ route('highheel.index') }}">high heel</a></li>
 </ul>
 </li>
 <li class="menu-item menu-item-has-children ">
 <a href="{{ route('ContactUssite.index') }}">Contact </a>

 </li>
 </ul>
 </nav>
 </div>
 </div>


 </header>
<div id="sidebar" class="sidebar">
    <p id="emptyCartMessage">No products in the cart</p>
<button class="btn w-100" style="background-color: #AA896F; color: white;"
            onclick="location.href='${url}'">Go to Cart</button>

</div>
<script>
    // Blade will generate this URL server-side
    const detailShowCartUrlTemplate = "{{ url('cart/details') }}";
</script>

<script>
function updateSidebar(image, title, price, color, size, id) {
    const sidebar = document.getElementById("sidebar");

    // Now detailShowCartUrlTemplate is defined here
    const url = `${detailShowCartUrlTemplate}/${id}`;

    const sidebarContent = `
        <span class="close-btn" onclick="closeSidebar()">×</span>
        <img src="${image}" alt="Product" class="img-fluid mb-3 rounded">
        <h5>${title}</h5>
        <p class="text-primary fw-bold">${price} $</p>

        <p><strong>Color:</strong> ${color}</p>
        <p><strong>Size:</strong> ${size}</p>

        <button class="btn w-100" style="background-color: #AA896F; color: white;"
            onclick="location.href='${url}'">Go to Cart</button>
    `;

    sidebar.innerHTML = sidebarContent;
}

function openSidebar() {
    document.getElementById("sidebar").classList.add("active");
}

function closeSidebar() {
    document.getElementById("sidebar").classList.remove("active");
}

function addToCart() {
    alert("Item added to cart!");
}
</script>
