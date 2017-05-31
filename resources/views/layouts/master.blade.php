<!DOCTYPE html>
<html>
<head>
	<title>My Application</title>
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
	

        
</script>
</body>
</html>