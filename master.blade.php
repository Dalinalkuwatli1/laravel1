<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>glamour gruop </title>
		<!-- Google Fonts -->
		<link rel="preconnect" href='https://fonts.googleapis.com'>
		<link rel="preconnect" href='https://fonts.gstatic.com'crossorigin>
		<link href='https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap' rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link rel='stylesheet' id='bootstrap-css'  href='{{ asset('site/css/bootstrap/css/bootstrap.min.css') }}' type='text/css' media='all' />
		<!-- Font Awesome Icons CSS -->
		<link rel='stylesheet' id='font-awesome'  href='{{ asset('site/css/fontawesome/css/font-awesome.min.css') }}' type='text/css' media='all' />
		<!-- Main CSS File -->
		<link rel='stylesheet' id='tilia-style-css'  href='{{ asset('site/css/style.css') }}' type='text/css' media='all' />
		<!-- favicons -->
 		<link rel="icon" href="{{ asset('site/images/411.png') }}" sizes="32x32" />
         <link rel="icon" href="{{ asset('site/images/411.png') }}" sizes="192x192" />
           <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo/favicon.png') }}"/>

		<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css' rel="stylesheet">
		<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css'>
        <script src='{{ asset('site/js/contactform.js') }}'></script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

@stack('styles')
	</head>
	<body class="home home-2">
		<div class="menu-mask">
				<div class="row">
					  <!-- Header START -->
                      @include('site.layouts.navbar')
                      <!-- Header END -->
                      @include('site.layouts.sidebar')
		<!-- /HEADER -->
         <!-- Content Wrapper START -->
         @yield('content')
         <!-- Content Wrapper END -->

		<!-- HOME SLIDER -->

		<!-- /swiper-mt -->
		<!-- /HOME SLIDER -->
		<!-- WRAP CONTENT -->

		<!-- /WRAP CONTENT -->
		<!-- FOOTER -->
        @include('site.layouts.footer')

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

<!-- CONTACT FORM JS -->
<script src='{{ asset ('site/js/jquery.form.min.js')  }}'></script>
<script src='{{ asset('site/js/contactform.js') }}'></script>

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'success!',
        text: '{{ session('success') }}',
        confirmButtonText: 'ok'
    });
</script>
@endif

@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'error!',
        text: '{{ session('error') }}',
        confirmButtonText: 'ok'
    });
</script>
@endif

<!-- Scripts from child templates -->
@yield('scripts')


</body>
</html>
