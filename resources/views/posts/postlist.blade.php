<?php 
    $page_title = 'Asraha | All News';
 ?>	
@extends('layouts.master')

@section('content')

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
											<a href="/" class="modal-btn-round mt52 ripple">Go Back <span style="font-size: 18px;"> &nbsp; &#8594;</span></a>
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
@endsection