@extends('layouts.master')

@section('content')

<!-- there are banner -->
 <div class="container-flued overflow-hidden">
	<div class="main-img-box">
	

		<div class="cycle-slideshow"
			  data-cycle-fx="scrollHorz" 
		    data-cycle-timeout="200000"
		     data-cycle-speed="600"
		     data-cycle-prev="#prev"
		 	data-cycle-next="#next"
		 	data-cycle-pager=".pager"
		 	data-cycle-slides=".slide-it"
		>
		<span id=prev class="prev">
			<i class="glyphicon glyphicon-menu-left"></i>
		</span>
		<span id=next class="next">
			<i class="glyphicon glyphicon-menu-right"></i>
		</span>
		@foreach($fronts as $front)
			<div class="slide-it">
				<img src="{{ asset($front->image)}}" alt="">
			</div>
		@endforeach
			<span class="pager"></span>
		</div>
		 <div class="overlay">
			<h1 class="main-title text-shadow font-light">INCREDIBLE <span class="font-bold"> &nbsp; ASRAHA</span></h1>

			<h1 class="anim-text">
				<span class="tlt font-md" data-in-effect="bounceInDown">
					<u class="texts">
						@foreach($fronts as $front)
						<li class="text-shadow">
							{{ $front->body }}
 						</li>
 						@endforeach
					</u>
				</span>
			</h1>
			<h1 class="down-angle"><a href="#page-down" class="a"><i class="icon-angle-down"></i></a></h1>
		</div>


	</div>
</div>


<!-- there are banner END-->
{{-- blog --}}
<div class="container-fluid bg-gray">
	<div class="row">
		<h1>&nbsp;</h1>
			<div class="container">
					<div class="row">
						<div class="col-md-12 clearfix">
							<div class="row">
									<div class="col-md-9">
										<h1 class="title-header text-left cdb">All News Around Darbhanga</h1>
										<h3 class="text-center font-light text-left">Always do your best. What you plant now, you will harvest later.</h3>
									</div>
									<div class="col-md-3 hidden-xs">
										<a href="/posts/1" class="modal-btn-round mt52 ripple">View All  <span style="font-size: 18px;"> &nbsp; &#8594;</span></a>
									</div>
									<div class="col-md-12">
										<hr class="styled" style="border-color: #c1c1c1;">
									</div>
								</div>
							</div>

						@foreach($posts as $post)
						<div class="col-md-6 mt50  wow fadeInLeftBig">
							<div class="row">
								<div class="col-md-5">
										<div class="por">
								     <div class="news-photos"><img  src="{{ asset($post->image)}}"></div>
								      		<div class="this-overlay2 newslink"> </div>
				              				<a href="/posts/{{$post->id}}" class="big-icon cdb" tooltip" title="Click to view all!" >+</a>
								     </div>
								     
								</div>
								<div class="col-md-7">
								<h3 class="news-header"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>

								<p class="text-muted">{{$post->created_at->toFormattedDateString() }} By: {{ $post->author }}</p>
								<hr class="hr-dashed" />
								<div class="blog-content-box">
									<p class="abh text-black">
										{{ $post->body }}
									</p>
									</div>
								</div>
							</div>
						</div>
					@endforeach


						<div class="col-md-12 visible-xs">
							<a href="/posts/" class="modal-btn-round mt20 btn-block ripple">View All  <span style="font-size: 18px;"> &nbsp; &#8594;</span></a>
						</div>
					</div>
			</div>
	<h1>&nbsp;</h1>
	</div>
</div>
{{-- blog --}}

<div class="container-fluid bg-gray">
	<div class="row">
		<div class="container">
			<div class="row">
				<h1>&nbsp;</h1>
				<h1 class="title-header">Valuable leaders of Asraha, and there thoughts</h1>
				<h3 class="text-center font-light">Always do your best. What you plant now, you will harvest later.</h3>
				<div class="text-center  hidden-sm hidden-xs"><img  src="img/line.png" alt=""></div>
					<p>&nbsp;</p>
					<div class="col-md-4">
						<div class="head-container">
							<h4 class="head-name">Khurshid Anwar</h4>
							<p class="text-muted">July 26, 2016 &nbsp; | &nbsp; Mukhya of Ashraha</p>
							<div class="head-poaple-img img-name"></div>
							<p class="abh">
								As a leader, I am tough on myself and I raise the standard for everybody; however, I am very caring because I want people to excel at what they are doing so that they can aspire to be me in the future."
								</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="head-container">
							<h4 class="head-name">Khurshid Anwar</h4>
							<p class="text-muted">July 26, 2016 &nbsp; | &nbsp; Mukhya of Ashraha</p>
								<div class="head-poaple-img img-name"></div>
								<p class="abh">
									As a leader, I am tough on myself and I raise the standard for everybody; however, I am very caring because I want people to excel at what they are doing so that they can aspire to be me in the future."
									</p>

						</div>
					</div>
					<div class="col-md-4">
						<div class="head-container">
							<h4 class="head-name">Khurshid Anwar</h4>
							<p class="text-muted">July 26, 2016 &nbsp; | &nbsp; Mukhya of Ashraha</p>
								<div class="head-poaple-img img-name"></div>
								<p class="abh">
									As a leader, I am tough on myself and I raise the standard for everybody; however, I am very caring because I want people to excel at what they are doing so that they can aspire to be me in the future."
									</p>

						</div>
					</div>

			</div>
		</div><!-- end container -->
	</div>
</div>
{{-- slider --}}

<h1>&nbsp;</h1>
<div class="container-fluid">
	<div class="row">
		<div class="container">
			
			<div class="row">
			  <div class="col-md-8">
			     <h1 class="title-header text-left">Valuable leaders of Asraha, and there thoughts</h1>
			  </div>
			  <div class="col-md-4">
			    <div class="bt-sliderbtn pull-right clearfix">
			      <a class="btnhover-ripple ripple" data-ripple-color="#3797dd" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-menu-left"></i><span></span> </a>
			      <a class="btnhover-ripple ripple" data-ripple-color="#3797dd" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-menu-right"></i><span></span></a>
			  </div> 
			  </div>
			</div>
			<hr class="styled">

			<div class="row">
				  <div class="carousel slide" id="myCarousel">
				    <div class="carousel-inner" id="innerblock">
				@foreach($valuables as $valuable)
				
				    <div class="item">
				        <div class="col-md-3">
				               <div class="img-card">
				            <div class="img-hover-box">
				              <div class="card-image">
				              	<img src="{{ asset($valuable->image)}}" alt="">
				              </div>
				              <div class="this-overlay"></div>
				              <div class="this-overlay2"></div>
				              <div class="big-icon">+</div>
				             <div class="overlay-text font-light">
								<ul class="list-unstyled">
									<li class="list-item"><a href="tel:7210562014"> <span class="curcle-call"><i class="glyphicon glyphicon-earphone">	</i></span> {{$valuable->number}}</a>
									</li>
									
								</ul>
								
				             {{$valuable->massage}}
				              </div>
				            </div>
				            <div 
				            class="disc">
				              <h4 class="m0"> {{$valuable->name}}</h4>
				            </div>
				          </div>
				        </div>
				      </div>
				 @endforeach

				    </div>
				  </div>
			</div>
			<h1>&nbsp;</h1>
		</div>
	</div>
</div>

{{-- slider end--}}

	<div class="container">
		<h3>&nbsp;</h3>
		<h2 class="title-header text-center">Services Provided</h2>
		<div class="text-center  hidden-sm hidden-xs"><img  src="img/line.png" alt=""></div>
		<h1>&nbsp;</h1>
		<div class="service-box">
			<div class="row">
				<div class="col-md-4">
					<div class="">
						<p class="text-center"><i class="glyphicon glyphicon-music service-icon"></i></p>
							<h3 class="text-center">lorem</h3>
						<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laboriosam id molestias obcaecati optio. Nesciunt quisquam aperiam numquam earum iusto explicabo quod id iure. Quasi temporibus dolore assumenda magnam, officia?</p>
									
					</div>
				</div>
				<div class="col-md-4" >
				<p class="text-center"><i class="glyphicon glyphicon-music service-icon"></i></p>
	
					<h3 class="text-center">lorem</h3>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laboriosam id molestias obcaecati optio. Nesciunt quisquam aperiam numquam earum iusto explicabo quod id iure. Quasi temporibus dolore assumenda magnam, officia?</p>
				</div>
				<div class="col-md-4 wow rotate bounceInRight" >
					<p class="text-center"><i class="glyphicon glyphicon-music service-icon"></i></p>
					<h3 class="text-center">lorem</h3>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laboriosam id molestias obcaecati optio. Nesciunt quisquam aperiam numquam earum iusto explicabo quod id iure. Quasi temporibus dolore assumenda magnam, officia?</p>
				</div>
				<div class="col-md-4 wow  fadeInDown" >
					<p class="text-center"><i class="glyphicon glyphicon-music service-icon"></i></p>
					<h3 class="text-center">lorem</h3>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laboriosam id molestias obcaecati optio. Nesciunt quisquam aperiam numquam earum iusto explicabo quod id iure. Quasi temporibus dolore assumenda magnam, officia?</p>
				</div>
				<div class="col-md-4 wow fadeInDown" >
					<p class="text-center"><i class="glyphicon glyphicon-music service-icon"></i></p>
					<h3 class="text-center">lorem</h3>
					<p class="text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laboriosam id molestias obcaecati optio. Nesciunt quisquam aperiam numquam earum iusto explicabo quod id iure. Quasi temporibus dolore assumenda magnam, officia?</p>
				</div>
				<div class="col-md-4 wow fadeInDown" >
					<p class="text-center"><i class="glyphicon glyphicon-music service-icon"></i></p>
					<h3 class="text-center">lorem</h3>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laboriosam id molestias obcaecati optio. Nesciunt quisquam aperiam numquam earum iusto explicabo quod id iure. Quasi temporibus dolore assumenda magnam, officia?</p>
				</div>
				</div>
			</div>
		</div>
		</div>
	</div><!-- container -->
	<hr>

	{{-- another --}}

		<div class="container">
			<div class="spacebox">
			<h2 class="title-header text-center">Gallery</h2>
				<div class="text-center  hidden-sm hidden-xs"><img src="img/line.png" alt=""></div>
			</div>
			<div class="apporch-box">
				<div>
					<div class="segment">
					@foreach($galleries as $gallery)
					 <a href="#" class="thumbnail _thmb">
						<img  src="{{ asset($gallery->image)}}">
						</a>
					@endforeach
					</div>
				</div>
			</div>
		</div>
	{{-- another END --}}

	{{-- contact us --}}

	<div class="container-fluid bg-gray">
		<div class="container">
			<div class="row">
				 <div class="col-md-12">
				 <p>&nbsp;</p>
				 		<h1 class="text-center font-light" id="page-2">Contact Us</h1>
				 		<h3 class="text-center font-light">If you have any suggestions, please mention them below. We’d be glad to hear from you. :)</h3>
				<div class="text-center  hidden-sm hidden-xs"><img  src="img/line.png" alt=""></div>
				<p>&nbsp;</p>
				 </div>
	        <div class="col-md-6"> 
	         	<ul class="contacts-list">
	
	         		<li class="clearfix " >
	         			<div class="r-box pull-left">
	         				<span class="letter" data-icon="glyphicon glyphicon-earphone"></span>
	         			</div>
	         			<div class="pull-left">
	         				<h4 class="font-light">Phone Number</h4>
	         				<h4 class="text-md">7210562014</h4>
	         				
	         			</div>
	         		</li>
	         		<li class="clearfix " >
	         			<div class="r-box pull-left">
	         				<span class="letter" data-icon="glyphicon glyphicon-envelope"></span>
	         			</div>
	         			<div class="pull-left">
	         				<h4 class="font-light">Phone Number</h4>
	         				<h4 class="text-md">7210562014</h4>
	         				
	         			</div>
	         		</li>
	         		<li class="clearfix " >
	         			<div class="r-box pull-left">
						<span class="letter" data-icon="glyphicon glyphicon-map-marker"></span>
	         			</div>
	         			<div class="pull-left">
	         				<h4 class="font-light">Phone Number</h4>
	         				<h4 class="text-md">7210562014</h4>
	         				
	         			</div>
	         		</li>
	         	</ul>
	         </div>
	        <div class="col-md-6">  
	            <div class="clearfix">
	                  <h4 class="font-light fz20 mtext-center" style="padding-top: 6px;">Please let us know what do you think about our idea</h4>
	                  <br>
	                </div>
	                <form class="form-modal"  action="send-mail.php">
	                  <div class="form-group por wow fadeInLeftBig" >      
	                    <input class="form-control material-input" type="text" required >
	                    <span class="bar"></span>
	                    <label class="material-label">Name</label>
	                  </div>
	                    <div class="form-group por fadeInLeftBig wow" >      
	                        <input class="form-control material-input" type="text" required >
	                        <span class="bar"></span>
	                      <label class="material-label">Name</label>
	                  </div>
	                    <div class="form-group por fadeInLeftBig" >      
	                    <textarea class="form-control material-input "  type="text" name="" id="" rows="3" required ></textarea>
	                        <span class="bar"></span>
	                      <label class="material-label textarea">Name</label>
	                  </div>
	              		<button class="modal-btn-round ripple">Submit</button>
	                </form> 
	
	        </div>
	      
			</div>
		</div>
	</div>
	{{-- contact us END--}}











{{-- ======================================================================= --}}



@endsection