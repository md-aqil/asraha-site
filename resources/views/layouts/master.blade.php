<!DOCTYPE html>
<html>
<head>
	<title>{{ $pageTitle or '' }}</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/effect.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/dashboard.css">
	<link rel="stylesheet" href="/css/atvImg.css">
	<link rel="stylesheet" href="/css/india.css">
	<link rel="shortcut icon" href="/img/favicon.png">
	
	<link rel="stylesheet" href="/css/main.css">
	<meta property="og:type"          content="website" />
	<meta property="og:url"           content="{{ $metaUrl or Request::url() }}" />
	<meta property="og:title"         content="{{ $pageTitle or 'Asraha.com' }}" />
	<meta property="og:description"   content="{{ $metaDesc or '' }}" />
	<meta property="og:image"         content="{{ $metaImg or '' }}" />
	
</head> 

<body>
	@include('layouts.nav')
	
	@yield('content')

	@include('layouts.footer')

<script>
	// var elem =
	//     'Are You Sure You watn to delete this'+
	//     ' <a href="" type="button" class="btn btn-danger">Yes</a>';

	// 	$(function () {
	//   $('[data-toggle="popover"]').popover({animation:true, content:elem, html:true});
	// })

		$('#innerblock .item:first').addClass('active');
		$('#carouselExampleControls .carousel-item:first').addClass('active');
		$('.carousel').carousel();



</script>
<script>
	$('.big-icon').click(function(e) {
		 e.preventDefault();
		 $(this).parent('.sharbox').toggleClass('thisshare');
	})
</script>
<script>
	$('.link-share').click(function(e) {
		e.preventDefault();
		let link = $(this).attr('href');	
		openWindow(link);
	});
	function openWindow(link) {
		link = 'https://www.facebook.com/sharer/sharer.php?u=' + link;
		var win = window.open(link, 'fb-share', "width=400,height=400");
	}
</script>

</body>
</html>
