@extends('layouts.master')

@section('content')

    <style>
    	.timehuman {
    		margin-top: -4px;
    		font-size: 14px;
    		font-weight: bold;
    	}
    </style>

	<div class="container-fluid bg-gray">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>&nbsp;</h1>
						<h1 class="title-header text-left">Latest News</h1>
						<h3 class="text-center font-light text-left">Always do your best. What you plant now, you will harvest later.</h3>
						<hr class="styled" style="border-color: #c1c1c1;">
					</div>
					<div class="col-md-8">
						<div class="">
							<h4 class="head-name">{{ $post->title }}</h4>
							<p class="text-muted">{{$post->created_at->toFormattedDateString() }} | &nbsp; Mukhya of Ashraha</p>
							<div class="lstsn">
								<img  src="{{ asset($post->image)}}">
							</div>
					  		<div class="blog-content-box">
							  		 <p class="abh text-black">
									{{ $post->body }}
									</p>
								</div>
						</div>
				{{-- comment-form --}}
						<form method="POST" action="/posts/{{ $post->id }}/comments"  class="form" >
						{{ csrf_field() }}
							<div class="form-group">
							<textarea name="body" class="form-control" placeholder="Wirte your comment"></textarea>
							</div>
							<div class="form-group">
					  		<button class="viewallbtn">Add Comment</button>
							</div>
							@include ('layouts.errors')
						</form>
				{{-- comment-form END --}}
						<div class="comment">
						<hr>
							<article>
								<ul class="media-list">
								@foreach($post->comments as $comment)
								  <li class="media">
								    <div class="media-left">
								      <a href="#">
								        <img class="media-object" src="<img  src="{{ asset($post->image)}}" width="50" alt="">
								      </a>
								    </div>
								    <div class="media-body">
								      <h4 class="media-heading">Media heading</h4>
								      <p class="text-muted timehuman">{{$comment->created_at->diffForHumans()}}</p>
								      <p>{{ $comment->body }}</p>
								    </div>
								  </li>
								@endforeach
								</ul>
								
							</article>

						</div>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-3">
					<h2 class="font-light">Recent News</h2>
					<hr class="styled" style="border-color: #c1c1c1;">
					<ul class="media-list side-posts">
						@foreach($posts as $post)
						<li class="media">
						  <div class="media-left">
						    <a href="#">
						      <img class="media-object" width="50" src="{{ asset($post->image)}}" alt="...">
						    </a>
						  </div>
						  <div class="media-body">
						   		<h4 class="media-heading">
						   		<a href="/posts/{{$post->id}}">{{ $post->title }}</a>
						   		</h4>
						   		<p class="text-muted">{{$post->created_at->toFormattedDateString() }} | {{ $post->author }}</p>
						  </div>
						</li>
						@endforeach
						</ul>
						
					</div>
				</div>
			</div><!-- end container -->
		</div>
	</div>

	<div class="container-fluid bg-gray">
	<div class="row">
		<p>&nbsp;</p>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h1>&nbsp;</h1>
				<h1 class="title-header text-left">Area News</h1>
				<h3 class="text-center font-light text-left">Always do your best. What you plant now, you will harvest later.</h3>
				<hr class="styled" style="border-color: #c1c1c1;">
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-default panel-blog">
					<div class="panel-heading"><img class="width100" src="img/Green-Nature-Trees-l.jpg" alt=""></div>
					  <div class="panel-body">
						  <div>
						 	 	<h4 class="">lorem ipsum doller sit ammet</h4>
						  		<p class="text-muted">July 26, 2016 &nbsp; | &nbsp; Mukhya of Ashraha</p>
						  </div>
						  <hr class="styled">
						<p class="">
							As a leader, I am tough on myself and I raise the standard for everybody; however, I am very caring because I want people to excel at what they are doing so that they can aspire to be me in the future."
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default panel-blog">
					<div class="panel-heading"><img class="width100" src="img/Green-Nature-Trees-l.jpg" alt=""></div>
					  <div class="panel-body">
						  <div>
						 	 	<h4 class="">lorem ipsum doller sit ammet</h4>
						  		<p class="text-muted">July 26, 2016 &nbsp; | &nbsp; Mukhya of Ashraha</p>
						  </div>
						  <hr class="styled">
						<p class="">
							As a leader, I am tough on myself and I raise the standard for everybody; however, I am very caring because I want people to excel at what they are doing so that they can aspire to be me in the future."
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default panel-blog">
					<div class="panel-heading"><img class="width100" src="img/Green-Nature-Trees-l.jpg" alt=""></div>
					  <div class="panel-body">
						  <div>
						 	 	<h4 class="">lorem ipsum doller sit ammet</h4>
						  		<p class="text-muted">July 26, 2016 &nbsp; | &nbsp; Mukhya of Ashraha</p>
						  </div>
						  <hr class="styled">
						<p class="">
							As a leader, I am tough on myself and I raise the standard for everybody; however, I am very caring because I want people to excel at what they are doing so that they can aspire to be me in the future."
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-default panel-blog">
					<div class="panel-heading"><img class="width100" src="img/asraha1.jpg" alt=""></div>
					  <div class="panel-body">
						  <div>
						 	 	<h4 class="">lorem ipsum doller sit ammet</h4>
						  		<p class="text-muted">July 26, 2016 &nbsp; | &nbsp; Mukhya of Ashraha</p>
						  </div>
						  <hr class="styled">
						<p class="">
							As a leader, I am tough on myself and I raise the standard for everybody; however, I am very caring because I want people to excel at what they are doing so that they can aspire to be me in the future."
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default panel-blog">
					<div class="panel-heading"><img class="width100" src="img/Green-Nature-Trees-l.jpg" alt=""></div>
					  <div class="panel-body">
						  <div>
						 	 	<h4 class="">lorem ipsum doller sit ammet</h4>
						  		<p class="text-muted">July 26, 2016 &nbsp; | &nbsp; Mukhya of Ashraha</p>
						  </div>
						  <hr class="styled">
						<p class="">
							As a leader, I am tough on myself and I raise the standard for everybody; however, I am very caring because I want people to excel at what they are doing so that they can aspire to be me in the future."
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default panel-blog">
					<div class="panel-heading"><img class="width100" src="img/Green-Nature-Trees-l.jpg" alt=""></div>
					  <div class="panel-body">
						  <div>
						 	 	<h4 class="">lorem ipsum doller sit ammet</h4>
						  		<p class="text-muted">July 26, 2016 &nbsp; | &nbsp; Mukhya of Ashraha</p>
						  </div>
						  <hr class="styled">
						<p class="">
							As a leader, I am tough on myself and I raise the standard for everybody; however, I am very caring because I want people to excel at what they are doing so that they can aspire to be me in the future."
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
					  </div>
					</div>
				</div>
			</div>
		</div>	
		<h1>&nbsp;</h1>
	</div>
</div>

@endsection