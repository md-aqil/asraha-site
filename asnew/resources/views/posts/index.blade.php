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
			<div class="slide-it img1"></div>
			<div class="slide-it img2"></div>
			<div class="slide-it img1"></div>
			<div class="slide-it img1"></div>
			<span class="pager"></span>
		</div>
		<div class="overlay">
			<h1 class="main-title text-shadow font-light">INCREDIBLE <span class="font-bold"> &nbsp; ASRAHA</span></h1>

			<h1 class="anim-text">
				<span class="tlt font-md" data-in-effect="bounceInDown">
					<u class="texts">
						<li class="text-shadow">A creative man is motivated by the desire to achieve, not by the desire to beat others.
 						</li>
						<li class="text-shadow">Success is simple. Do what's right, the right way, at the right time.
 						</li>
						<li class="text-shadow">Sexiness is all about your personality, being genuine and confident, and being a good person.</li>
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
						<div class="col-md-6 mt50">
							<div class="row">
								<div class="col-md-5">
										<div class="por">
								     <div class="news-photos"><img  src="{{ asset($post->image)}}"></div>
								      		<div class="this-overlay2 newslink"> </div>
				              				<a href="see-all-news.php" class="big-icon cdb" tooltip" title="Click to view all!" >+</a>
								     </div>
								     
								</div>
								<div class="col-md-7">
								<h3 class="news-header"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>

								<p class="text-muted">{{$post->created_at->toFormattedDateString() }} By: Author</p>
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
				    <div class="carousel-inner">
				      <div class="item active">
				        <div class="col-md-3">
				               <div class="img-card">
				            <div class="img-hover-box">
				              <div class="card-image"></div>
				              <div class="this-overlay"></div>
				              <div class="this-overlay2"></div>
				              <div class="big-icon">+</div>
				             <div class="overlay-text font-light">
								<ul class="list-unstyled">
									<li class="list-item"><a href="tel:7210562014"> <span class="curcle-call"><i class="glyphicon glyphicon-earphone">	</i></span> 7210562014</a>
									</li>
									<li class="list-item"><a href=""><span class="curcle-call"><i class="glyphicon glyphicon-envelope"></i></span> 7210562014</a></li>
								</ul>
								
				              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem asperiores, ut. Corporis quidem vel est perspiciatis, at commodi enim adipisci deleniti nihil veritatis obcaecati optio fugiat fugit voluptates molestias repudiandae?
				              </div>
				            </div>
				            <div 
				            class="disc">
				              <p class="cardname">lorem</p>
				              <h4 class="m0">ipsum doller</h4>
				            </div>
				          </div>
				        </div>
				      </div>
				      <div class="item">
				        <div class="col-md-3">
				           <div class="img-card">
				            <div class="img-hover-box">
				              <div class="card-image"></div>
				              <div class="this-overlay"></div>
				              <div class="this-overlay2"></div>
				              <div class="big-icon">+</div>
				              <div class="overlay-text font-light">
								<ul class="list-unstyled">
									<li class="list-item"><a href="tel:7210562014"> <span class="curcle-call"><i class="glyphicon glyphicon-earphone"></i></span> 7210562014</a>
									</li>
									<li class="list-item"><a href=""><span class="curcle-call"><i class="glyphicon glyphicon-envelope"></i></span> 7210562014</a></li>
								</ul>
								
				              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem asperiores, ut. Corporis quidem vel est perspiciatis, at commodi enim adipisci deleniti nihil veritatis obcaecati optio fugiat fugit voluptates molestias repudiandae?
				              </div>
				            </div>
				            <div class="disc">
				              <p class="cardname">lorem</p>
				              <h4 class="m0">ipsum doller</h4>
				            </div>
				          </div>
				        </div>
				      </div>
				    </div>
				  </div>
			</div>
			<h1>&nbsp;</h1>
		</div>
	</div>
</div>

{{-- slider end--}}

	<div class="container overflow-hidden">
		<h3>&nbsp;</h3>
		<h2 class="title-header text-center">Services Provided</h2>
		<div class="text-center  hidden-sm hidden-xs"><img  src="img/line.png" alt=""></div>
		<h1>&nbsp;</h1>
		<div class="service-box">
			<div class="row">
				<div class="col-md-4">
					<div class="wow bounceInLeft" data-wow-delay=".2s">
						<p class="text-center"><i class="glyphicon glyphicon-music service-icon"></i></p>
							<h3 class="text-center">lorem</h3>
						<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laboriosam id molestias obcaecati optio. Nesciunt quisquam aperiam numquam earum iusto explicabo quod id iure. Quasi temporibus dolore assumenda magnam, officia?</p>
									
					</div>
				</div>
				<div class="col-md-4 wow bounceInDown" data-wow-delay=".6s">
				<p class="text-center"><i class="glyphicon glyphicon-music service-icon"></i></p>
	
					<h3 class="text-center">lorem</h3>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laboriosam id molestias obcaecati optio. Nesciunt quisquam aperiam numquam earum iusto explicabo quod id iure. Quasi temporibus dolore assumenda magnam, officia?</p>
				</div>
				<div class="col-md-4 wow rotate bounceInRight" data-wow-delay=".3s">
					<p class="text-center"><i class="glyphicon glyphicon-music service-icon"></i></p>
					<h3 class="text-center">lorem</h3>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laboriosam id molestias obcaecati optio. Nesciunt quisquam aperiam numquam earum iusto explicabo quod id iure. Quasi temporibus dolore assumenda magnam, officia?</p>
				</div>
				<div class="col-md-4 wow  fadeInDown" data-wow-delay=".6s">
					<p class="text-center"><i class="glyphicon glyphicon-music service-icon"></i></p>
					<h3 class="text-center">lorem</h3>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laboriosam id molestias obcaecati optio. Nesciunt quisquam aperiam numquam earum iusto explicabo quod id iure. Quasi temporibus dolore assumenda magnam, officia?</p>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-delay=".7s">
					<p class="text-center"><i class="glyphicon glyphicon-music service-icon"></i></p>
					<h3 class="text-center">lorem</h3>
					<p class="text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laboriosam id molestias obcaecati optio. Nesciunt quisquam aperiam numquam earum iusto explicabo quod id iure. Quasi temporibus dolore assumenda magnam, officia?</p>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-delay=".8s">
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

	{{-- tabs END--}}


	<div class="container-fluid">
	<div class="">
		<h1 class="title-header">Glarries</h1>
		<div class="text-center  hidden-sm hidden-xs"><img  src="img/line.png" alt=""></div>
		<h3>&nbsp;</h3>
		<main class="main-tab-box">
	  <input id="tab1" type="radio" name="tabs" checked>
	  <label for="tab1" class="ripple" data-ripple-color="#8c8c8c"> Personalized Plan</label>
	    
	  <input id="tab2" type="radio" name="tabs">
	  <label for="tab2" class="ripple" data-ripple-color="#8c8c8c"> For Corporate</label>
	    
	  <input id="tab3" type="radio" name="tabs">
	  <label for="tab3" class="ripple" data-ripple-color="#8c8c8c"> Wellness Package</label>
	    
	  <input id="tab4" type="radio" name="tabs">
	  <label for="tab4" class="ripple" data-ripple-color="#8c8c8c"> Drupal</label>
	  <section class="tab-content" id="content1">
	    <div class="row">
		 <div class="col-md-4">
		 	<div class="tabs-img">
		 		<img class="img-responsive" src="img/Green-Nature-Trees-l.jpg" alt="">
		 		<div class="tabs-img-overlay">
		 			<h3 class="over-title">Lorem ipsum dolor sit amet.</h3>
		 		</div>	
		 	</div>
		 </div>
	   	 <div class="col-md-4">
		 	<div class="tabs-img">
		 		<img class="img-responsive" src="img/Green-Nature-Trees-l.jpg" alt="">
		 		<div class="tabs-img-overlay">
		 			<h3 class="title-header">Lorem ipsum dolor sit amet.</h3>
		 		</div>	
		 	</div>
		 </div>
		  <div class="col-md-4">
		 	<div class="tabs-img">
		 		<img class="img-responsive" src="img/Green-Nature-Trees-l.jpg" alt="">
		 		<div class="tabs-img-overlay">
		 			<h3 class="title-header">Lorem ipsum dolor sit amet.</h3>
		 		</div>	
		 	</div>
		 </div>
		 <div class="col-md-4">
		 	<div class="tabs-img">
		 		<img class="img-responsive" src="img/Green-Nature-Trees-l.jpg" alt="">
		 		<div class="tabs-img-overlay">
		 			<h3 class="over-title">Lorem ipsum dolor sit amet.</h3>
		 		</div>	
		 	</div>
		 </div>
		 <div class="col-md-4">
		 	<div class="tabs-img">
		 		<img class="img-responsive" src="img/Green-Nature-Trees-l.jpg" alt="">
		 		<div class="tabs-img-overlay">
		 			<h3 class="over-title">Lorem ipsum dolor sit amet.</h3>
		 		</div>	
		 	</div>
		 </div>
		  <div class="col-md-4">
		 	<div class="tabs-img">
		 		<img class="img-responsive" src="img/Green-Nature-Trees-l.jpg" alt="">
		 		<div class="tabs-img-overlay">
		 			<h3 class="over-title">Lorem ipsum dolor sit amet.</h3>
		 		</div>	
		 	</div>
		 </div>
		 </div>
	  </section>
	    
	  <section class="tab-content" id="content2">
	 	
	  </section>
	    
	  <section class="tab-content" id="content3">
	  <h1>Lorem ipsum dolor sit.</h1>
	   
	  </section>
	    
	  <section class="tab-content" id="content4">
	  	<h1>Lorem ipsum dolor sit.</h1>
	  
	  </section>
	</main>
	</div>
	</div>
	{{-- tabs END--}}

		<div class="container-fluid bg-gray">
		<div class="pointer-box">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<p class="rating-p">533</p>
					</div>
					<div class="col-md-3">
						<p class="rating-p">533</p>
					</div>	
					<div class="col-md-3">
						<p class="rating-p">533</p>
					</div>	
					<div class="col-md-3">
						<p class="rating-p">533</p>
					</div>		
						
				</div>
			</div>
		</div>
	</div>
	{{-- another --}}

		<div class="container">
			<div class="apporch-box">
			<h5>&nbsp;</h5>
				<h1 class="title-header">Information</h1>
				<div class="text-center  hidden-sm hidden-xs"><img  src="img/line.png" alt=""></div>
			<h1>&nbsp;</h1>
				<div class="content-box">
	<ul class="tabs-item clearfix">
		<li class="col-md-3 "><a class="color-white tabs-a letter wow bounceInDown" data-wow-delay=".3s" href="#first" data-icon="icon-umbrella"></a><p class="">music icon</p></li>
		<li class="col-md-3 "><a class="color-white tabs-a letter wow bounceInDown" href="#second" data-wow-delay=".4s" data-icon="icon-camera"></a><p class="">music icon</p></li>
		<li class="col-md-3 "><a class="color-white tabs-a letter wow bounceInDown" href="#third" data-wow-delay=".5s" data-icon="icon-headphones"></a><p class="">music icon</p></li>
		<li class="col-md-3 "><a class="color-white tabs-a letter wow bounceInDown" href="#fourth" data-wow-delay=".6s" data-icon="icon-music"></a><p class="">music icon</p></li>
	</ul>
	<div id="first" class="animated">
		<div class="row">	
			<div class="col-md-6">
			<br>	
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui deserunt beatae, ut dolor! Nihil, commodi ipsum assumenda vero! Perferendis voluptas magni laboriosam cum aliquam, impedit facere, quae error deserunt nam.</p>
			</div>
			<div class="col-md-6">
			<br>	
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui deserunt beatae, ut dolor! Nihil, commodi ipsum assumenda vero! Perferendis voluptas magni laboriosam cum aliquam, impedit facere, quae error deserunt nam.</p>
			</div>
		</div>	
	</div>
	
	<div id="second" class="animated">
	<div class="row">	
			<div class="col-md-6">
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui deserunt beatae, ut dolor! Nihil, commodi ipsum assumenda vero! Perferendis voluptas magni laboriosam cum aliquam, impedit facere, quae error deserunt nam.</p>
			</div>
			<div class="col-md-6">
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui deserunt beatae, ut dolor! Nihil, commodi ipsum assumenda vero! Perferendis voluptas magni laboriosam cum aliquam, impedit facere, quae error deserunt nam.</p>
			</div>
		</div>	
	</div>
	
	
	<div id="third" class="animated">
			<div class="col-md-6">
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui deserunt beatae, ut dolor! Nihil, commodi ipsum assumenda vero! Perferendis voluptas magni laboriosam cum aliquam, impedit facere, quae error deserunt nam.</p>
			</div>
			<div class="col-md-6">
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui deserunt beatae, ut dolor! Nihil, commodi ipsum assumenda vero! Perferendis voluptas magni laboriosam cum aliquam, impedit facere, quae error deserunt nam.</p>
			</div>
	</div>
		<div id="fourth" class="animated">
				<div class="col-md-6">
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui deserunt beatae, ut dolor! Nihil, commodi ipsum assumenda vero! Perferendis voluptas magni laboriosam cum aliquam, impedit facere, quae error deserunt nam.</p>
			</div>
			<div class="col-md-6">
				<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui deserunt beatae, ut dolor! Nihil, commodi ipsum assumenda vero! Perferendis voluptas magni laboriosam cum aliquam, impedit facere, quae error deserunt nam.</p>
			</div>
		</div>
	</div>
	
			</div>
		</div>
	{{-- another END --}}

	<div class="container-fluid">
		<div class="row">
			<div class="pointer-box">
				<div class="">
					<div class="cycle-slideshow multipule-img-slider" 
					    data-cycle-fx="carousel"
					    data-cycle-timeout="2000"
					    data-cycle-carousel-visible="4"
					    data-cycle-carousel-fluid="true"
					    >
					   <img class="" src="img/Green-Nature-Trees-l.jpg" alt="">
					   <img class="" src="img/Green-Nature-Trees-l.jpg" alt="">
					   <img class="" src="img/Green-Nature-Trees-l.jpg" alt="">
					   <img class="" src="img/Green-Nature-Trees-l.jpg" alt="">
					   <img class="" src="img/Green-Nature-Trees-l.jpg" alt="">
					</div>
				</div>
				<h1>&nbsp;</h1>
			</div>
			
		</div>
	</div>
		<div id="page-1"></div>
	
	<br>	

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
	
	         		<li class="clearfix wow bounceInLeft" data-wow-delay=".2s">
	         			<div class="r-box pull-left">
	         				<span class="letter" data-icon="glyphicon glyphicon-earphone"></span>
	         			</div>
	         			<div class="pull-left">
	         				<h4 class="font-light">Phone Number</h4>
	         				<h4 class="text-md">7210562014</h4>
	         				
	         			</div>
	         		</li>
	         		<li class="clearfix wow bounceInLeft" data-wow-delay=".5s">
	         			<div class="r-box pull-left">
	         				<span class="letter" data-icon="glyphicon glyphicon-envelope"></span>
	         			</div>
	         			<div class="pull-left">
	         				<h4 class="font-light">Phone Number</h4>
	         				<h4 class="text-md">7210562014</h4>
	         				
	         			</div>
	         		</li>
	         		<li class="clearfix wow bounceInLeft" data-wow-delay=".8s">
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
	                  <div class="form-group por wow fadeInLeftBig" data-wow-delay=".3s">      
	                    <input class="form-control material-input" type="text" required >
	                    <span class="bar"></span>
	                    <label class="material-label">Name</label>
	                  </div>
	                    <div class="form-group por fadeInLeftBig wow" data-wow-delay=".6s">      
	                        <input class="form-control material-input" type="text" required >
	                        <span class="bar"></span>
	                      <label class="material-label">Name</label>
	                  </div>
	                    <div class="form-group por fadeInLeftBig" data-wow-delay=".9s">      
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