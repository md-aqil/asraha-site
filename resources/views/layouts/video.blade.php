<div class="container-fluid">
	<div class="row">
		<div class="winner-div">

			<div class="container">
				<div class="row">
				<h4 class="text-white _mwt visible-xs">Video Of the Week</h4>
					<div class="col-md-8 tubeframe">
						
							<div class="cycle-slideshow" 
							   data-cycle-fx="scrollHorz" 
							    data-cycle-timeout="200000"
							    data-cycle-slides=".framevideo"
							    data-cycle-prev=".prev"
		 						data-cycle-next=".next"
							    >
							    <span  class="prev">
									<i class="glyphicon glyphicon-menu-left"></i>
								</span>
								<span  class="next">
									<i class="glyphicon glyphicon-menu-right"></i>
								</span>
								@foreach($videos as $video)
								  	<div class="framevideo">
								  		{!! $video->video !!}
								  	</div>	
							  	@endforeach
							  
							   
							</div>

					</div>

					<div class="col-md-4">
						<h1 class="text-white hidden-xs">Video of the day</h1>
						<p class="lead text-white">
							video information
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

		<h1>&nbsp;</h1>
		
		</div>
	</div>
	
</div>