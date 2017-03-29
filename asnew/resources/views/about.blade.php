@extends('layouts.master')

@section('content')
<div class="container-fluid bg-gray">
	<h1>&nbsp;</h1>
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h1 class="title-header text-left text-black">About Us</h1>
				<h3 class="text-center font-light text-left">Always do your best. What you plant now, you will harvest later.</h3>
					<hr class="styled" style="border-color: #c1c1c1;">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p class="abh text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque beatae impedit, placeat commodi dolorem, in, voluptatum nesciunt quasi iusto labore, illo optio perspiciatis ad. Repellat assumenda dolorem commodi voluptatibus odit?
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="col-md-6">
			<div id="abt-slider" class="cycle-slideshow img100 por bor" 
			    data-cycle-fx=scrollHorz
			    data-cycle-timeout=10000
			     data-cycle-prev="#prev"
		 		data-cycle-next="#next"
			    >
			    <span id=prev class="prev">
					<i class="glyphicon glyphicon-menu-left"></i>
				</span>
				<span id=next class="next">
					<i class="glyphicon glyphicon-menu-right"></i>
				</span>
			    <!-- empty element for overlay -->
			    <div class="cycle-overlay"></div>
			    <img src="img/aqil.jpg" 
			        data-cycle-title="Spring" 
			        data-cycle-desc="Sonnenberg Gardens">

			    <img src="img/aqil-1.jpg" 
			        data-cycle-title="Redwoods" 
			        data-cycle-desc="Muir Woods National Monument">

			          <img src="img/gandhi.jpg" 
			        data-cycle-title="Redwoods" 
			        data-cycle-desc="Muir Woods National Monument">
			         <img src="img/holy.jpg" 
			        data-cycle-title="Redwoods" 
			        data-cycle-desc="Muir Woods National Monument">
			</div>

				</div>
			</div>
		</div>
	</div>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
</div>
@endsection