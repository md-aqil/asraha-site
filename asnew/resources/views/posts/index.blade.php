@extends('layouts.master')

@section('content')


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
			<div class="slide-it" >
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

		</div>


	</div>
</div>


<!-- there are banner END-->
{{-- blog --}}
<div class="container-fluid bg-gray">
	<div class="row">
		<h1>&nbsp;</h1>
			<div class="container" id="postlisting">
					<div class="row">
						<div class="col-md-12 clearfix">
							<div class="row">
									<div class="col-md-9">
										<h1 class="title-header text-left cdb">All News Around Darbhanga</h1>
										<h3 class="text-center font-light text-left">Always do your best. What you plant now, you will harvest later.</h3>
									</div>
									<div class="col-md-3 hidden-xs">
										<a href="{{ route('posts.allposts')}}" class="modal-btn-round mt52 ripple">View All  <span style="font-size: 18px;"> &nbsp; &#8594;</span></a>
									</div>
									<div class="col-md-12">
										<hr class="styled" style="border-color: #c1c1c1;">
									</div>
								</div>
							</div>

						@foreach($posts as $post)
						<div class="col-md-6 postindex">
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
										{{-- <a href="">View more</a> --}}
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

<div class="container-fluid">
<div class="row">
	<div class="winner-div">

		<div class="container">
			<div class="row">
			<h1 class="text-white _mwt visible-xs">Winner of the day</h1>
				<div class="col-md-6 ">
				@if ($winner) 
					<img class="winner-img" src="{{ asset($winner->image ) }}" alt="">
				@endif
				</div>
				<div class="col-md-6">
					<h1 class="text-white hidden-xs">Winner of the day</h1>
					 <h3 class="wname">{{ $winner->winner_name or '' }}</h3>
					<p class="lead text-white">
						{{ $winner->winner_msg or "" }}
					</p>
					<ul class="list-inline wsosial">
						<li><a href="https://developers.facebook.com/docs/plugins/"><img src="/img/facebook.png" alt=""></a></li>
						<li><a href=""><img style="margin-top: -6px;" src="/img/whatsapp.png" alt=""></a></li>
						<li><a href=""><img src="/img/twitter.png" alt=""></a></li>
						<li>
						
					</ul>
				</div>
			</div>
		</div>	

	
	</div>
</div>
	
</div>

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

						<div class="atvImg no-shadow head-poaple-img hidden-xs">
							<img class="" src="img/asraha1.jpg" alt="">
							<div class="atvImg-layer" data-img="img/asraha1.jpg"></div>
						</div>
						<div class="visible-xs">
							<img class="img-cover" src="img/asraha1.jpg" alt="">
							
						</div>

							<p class="abh">
								As a leader, I am tough on myself and I raise the standard for everybody; however, I am very caring because I want people to excel at what they are doing so that they can aspire to be me in the future."
								</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="head-container">
							<h4 class="head-name">Khurshid Anwar</h4>
							<p class="text-muted">July 26, 2016 &nbsp; | &nbsp; Mukhya of Ashraha</p>
								<div class="atvImg no-shadow head-poaple-img">
									<img class="" src="img/asraha1.jpg" alt="">
									<div class="atvImg-layer"></div>
									<div class="atvImg-layer" data-img="img/asraha1.jpg"></div>
								</div>
								<p class="abh">
									As a leader, I am tough on myself and I raise the standard for everybody; however, I am very caring because I want people to excel at what they are doing so that they can aspire to be me in the future."
									</p>

						</div>
					</div>
					<div class="col-md-4">
						<div class="head-container">
							<h4 class="head-name">Khurshid Anwar</h4>
							<p class="text-muted">July 26, 2016 &nbsp; | &nbsp; Mukhya of Ashraha</p>
								<div class="atvImg no-shadow head-poaple-img hidden-xs">
									<img class="" src="img/asraha1.jpg" alt="">
									<div class="atvImg-layer"></div>
									<div class="atvImg-layer" data-img="img/asraha1.jpg"></div>
								</div>

								<div class="head-poaple-img visible-xs">
									<img class="img-cover" src="img/asraha1.jpg" alt="">
								</div>
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

	{{-- another --}}

		<div class="container">
			<div class="spacebox">
			<h2 class="title-header text-center">Gallery</h2>
				<div class="text-center  hidden-sm hidden-xs"><img src="img/line.png" alt=""></div>
			</div>
			<div class="apporch-box">
				<div>
					<div class="segment segment-gallery clearfix">
						@foreach($galleries as $gallery)
						<div class="">
						 	<a href="{{ asset($gallery->image)}}" class="thumbnail _thmb atvImg">
							<img  src="{{ asset($gallery->image)}}">
							<div class="atvImg-layer"></div>
							<div class="atvImg-layer" data-img="{{ asset($gallery->image)}}"></div>
							</a>
						</div>

							
						@endforeach

					</div>
				</div>
			</div>
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">
			    	  <span class="close-styled" data-dismiss="modal">&times;</span>
			    <div class="modal-content">
			    </div>
			
			  </div>
			</div>
		</div>

	{{-- another END --}}

	{{-- contact us --}}
<h2>&nbsp;</h2>
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
	                    <input class="form-control material-input" type="text" required placeholder="Name">
	                   
	                  </div>
	                    <div class="form-group por fadeInLeftBig wow" >      
	                        <input class="form-control material-input" type="text" required placeholder="Email">
	                       
	                  </div>
	                    <div class="form-group por fadeInLeftBig" >      
	                    <textarea class="form-control material-input "  type="text" name="" id="" rows="3" required placeholder="Type Your massege here"></textarea>
	                      
	                  </div>
	              		<button class="modal-btn-round ripple">Submit</button>
	                </form> 
	
	        </div>
	      
			</div>
		</div>
	</div>
	{{-- contact us END--}}



@endsection
