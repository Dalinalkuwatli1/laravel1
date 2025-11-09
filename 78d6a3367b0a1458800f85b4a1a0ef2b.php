<div class="col-lg-7">
    <!-- MOBILE MENU -->
    <div class="col-lg-7">
        <ul class="menu-mobile">
            <li class="menu-item menu-item-has-children current-menu-item">
                <a href="home-2.html">Home</a>

            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Pages</a>
                <ul class="sub-menu">
                    <li class="menu-item menu-item-has-children menu-item-parent-2level">
                        <a href="<?php echo e(route('siteProducts.index')); ?>">our offers </a>

                    </li>
                    <li class="menu-item"><a href="<?php echo e(route('aboutmessite.index')); ?>">About Me</a></li>

                    <li class="menu-item"><a href="<?php echo e(route('aboutUsssite.index')); ?>">About Us </a></li>


                    <li class="menu-item"><a href="<?php echo e(route('showFaqsite.index')); ?>">FAQ Page</a></li>


                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Dresses</a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="<?php echo e(route('eveningdresses1.index')); ?>">Evening Dresses 1</a></li>

                  <li class="menu-item"><a href="<?php echo e(route('eveningdresses2.index')); ?>">Evening Dresses 2</a></li>
                </ul>
              </li>
              <li class="menu-item menu-item-has-children">
                <a href="#">Blog</a>
                <ul class="sub-menu">

                  <li class="menu-item"><a href="<?php echo e(route('flowerbouquets.index')); ?>">Flower Bouquets</a></li>
                  <li class="menu-item"><a href="<?php echo e(route('cap.index')); ?>">Cap</a></li>
                  <li class="menu-item"><a href="<?php echo e(route('crown.index')); ?>">crown</a></li>
                  <li class="menu-item"><a href="<?php echo e(route('highheel.index')); ?>">high heel</a></li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="<?php echo e(route('ContactUssite.index')); ?>">Contact </a>

          </li>
        </ul>
        <!-- /MOBILE MENU -->
      </div>
      <div class="col-lg-5">
        <div class="menu-contact">
          <!-- Add your menu contact content here -->
        </div>
      </div>
      <?php
      use App\Models\setting;
           $Settings = setting::first();
      ?>

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


  .card:hover {
    transform: scale(1.02);
    transition: 0.3s;
  }

  .star-rating .star {
    font-size: 24px;
    color: #FFD700;
    cursor: pointer;
  }

  .heart-icon-container {
    position: absolute;
    top: 10px;
    right: 15px;
    cursor: pointer;
    z-index: 10;
  }

  .heart-icon-container.liked i {
    color: red;
  }           </style>



        </head>
        <body>
<ul class="social-media">
    <li><a class="social-facebook" href="<?php echo e($Settings->facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
    <li><a class="social-whatsapp" href="<?php echo e($Settings->whatsapp); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
    <li><a class="social-instagram" href="<?php echo e($Settings->instagram); ?>" target="_blank"><i class="fab fa-instagram"></i> </a></li>
    <li><a class="social-telegram" href="<?php echo e($Settings->telegram); ?>" target="_blank"><i class="fab fa-telegram-plane"></i> </a></li>
    <li><a href="https://www.tiktok.com/@glamour_gruop?lang=ar" target="_blank"><i class="fab fa-tiktok"></i> </a></li>
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
<!-- HEADER -->
<?php /**PATH C:\Users\Dalin\Desktop\DalinLaravel\resources\views/site/layouts/navbar.blade.php ENDPATH**/ ?>