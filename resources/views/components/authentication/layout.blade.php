<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="Education" />

	<!-- OG -->
	<meta property="og:title" content="Education" />
	<meta property="og:description" content="Education" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="/assets/assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="/assets/assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Education </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="/assets/assets/js/html5shiv.min.js"></script>
	<script src="/assets/assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="/assets/assets/css/assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="/assets/assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="/assets/assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="/assets/assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="/assets/assets/css/color/color-1.css">

</head>
@if(Session::has('error'))

<div class='alert alert-error'>Wrong ID</div>

@endif
{{$slot}}

<!-- External JavaScripts -->
<script src="/assets/assets/js/jquery.min.js"></script>
<script src="/assets/assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="/assets/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/assets/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="/assets/assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="/assets/assets/vendors/counter/waypoints-min.js"></script>
<script src="/assets/assets/vendors/counter/counterup.min.js"></script>
<script src="/assets/assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="/assets/assets/vendors/masonry/masonry.js"></script>
<script src="/assets/assets/vendors/masonry/filter.js"></script>
<script src="/assets/assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="/assets/assets/js/functions.js"></script>
<script src="/assets/assets/js/contact.js"></script>
<script src='/assets/assets/vendors/switcher/switcher.js'></script>
</body>

</html>
