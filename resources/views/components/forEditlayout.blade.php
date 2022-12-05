	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="/imgfav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Education</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="/css/linearicons.css">
			<link rel="stylesheet" href="/css/font-awesome.min.css">
			<link rel="stylesheet" href="/css/bootstrap.css">
			<link rel="stylesheet" href="/css/magnific-popup.css">
			<link rel="stylesheet" href="/css/nice-select.css">
			<link rel="stylesheet" href="/css/animate.min.css">
			<link rel="stylesheet" href="/css/owl.carousel.css">
			<link rel="stylesheet" href="/css/jquery-ui.css">
			<link rel="stylesheet" href="/css/main.css">
           <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link rel="stylesheet" type="text/css" href="/assets/css/assets.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/typography.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/shortcodes/shortcodes.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	    <link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

		</head>
		<body>

            {{$slot}}
		</body>
            <script src="/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="/js/vendor/bootstrap.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="/js/easing.min.js"></script>
			<script src="/js/hoverIntent.js"></script>
			<script src="/js/superfish.min.js"></script>
			<script src="/js/jquery.ajaxchimp.min.js"></script>
			<script src="/js/jquery.magnific-popup.min.js"></script>
    		<script src="/js/jquery.tabs.min.js"></script>
			<script src="/js/jquery.nice-select.min.js"></script>
			<script src="/js/owl.carousel.min.js"></script>
			<script src="/js/mail-script.js"></script>
			<script src="/js/main.js"></script>

            <script>
function callAjax(e){
    $('#loaderIcon').show();
    $.ajax({
        type: "GET",
        url: 'https://api.joind.in/v2.1/talks/10889',
        data: {
            format: 'json'
        },
        success: function(response){
           console.log(response);
        },
        complete: function(){
            $('#loaderIcon').hide();
        }
    });
}
</script>
	</html>
