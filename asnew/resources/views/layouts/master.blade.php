<!DOCTYPE html>
<html>
<head>
	<title>My Application</title>
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/effect.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/dashboard.css">
	<link rel="stylesheet" href="/css/atvImg.css">
	<link rel="stylesheet" href="/css/india.css">
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


</script>
</body>
</html>