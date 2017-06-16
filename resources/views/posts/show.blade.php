
<?php 
    $page_title = 'Asraha | Latest News';
 ?>

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
							<p class="text-muted">{{$post->created_at->toFormattedDateString() }}  &nbsp; | &nbsp; {{ $post->author }}</p>
							<div class="lstsn">
								<img  src="{{ asset($post->image)}}">
								<div class="sharbox blur">
  				<a href="" class="big-icon cdb" tooltip" title="Click to view all!" >+</a>
	      			<div class="sicon fb">
	      				<a class="link-share" href="{{ url('posts/' . $post->id ) }}">
	      				<img  style="height: 22px;" src="/img/facebook-logo.svg" alt=""></a>
	      			</div>
	      			
	      		</div>
							</div>
					  		<div class="blog-content-box">
							  		 <p class="abh text-black">
									{{ $post->body }}
									</p>
								</div>
						</div>
				{{-- comment-form --}}
						<form method="POST" action="/posts/{{ $post->id }}/comments" id="save-comment" class="form" >
							{{ csrf_field() }}
							<div class="form-group">
							<textarea name="body" class="form-control" placeholder="Wirte your comment"></textarea>
							</div>
							<div class="form-group">
					  		<button class="viewallbtn loadthis">Add Comment</button>
							</div>
							@if(session('success'))
								<div class="alert alert-danger">{{ session('success') }}
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								</div>
							@endif
							@include ('layouts.errors')
						</form>
				{{-- comment-form END --}}
						<div class="comment">
						<hr>
							<article>
								<ul class="media-list ul_c">
								@foreach($comments as $comment)
								  <li class="media">
								    <div class="media-left ">
										<div class="user_label">{{ substr($comment->user->name, 0, 2) }}</div>
								    </div>
								    <div class="media-body">
								       @if(\Auth::id() == $comment->user_id)
								      <a href="{{ route('comment.delete', $comment->id) }}">Delete</a>
								      @endif
								      <h4 class="media-heading">{{ $comment->user->name }}</h4>
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
			@foreach($posts as $post)
				<div class="col-md-4">
					<div class="panel panel-default panel-blog">
					<div class="panel-heading"><img class="width100" src="{{ asset($post->image)}}" alt=""></div>
					  <div class="panel-body">
						  <div>
						 	 	<h4 class=""><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h4>
						  		<p class="text-muted">{{$post->created_at->toFormattedDateString() }} | {{ $post->author }}</p>
						  </div>
						  <hr class="styled">
						<p class="">
							{{ $post->body }}
							</p>
					  </div>
					</div>
				</div>
				@endforeach
			</div>
			
		</div>	
		<h1>&nbsp;</h1>
	</div>
</div>

@endsection