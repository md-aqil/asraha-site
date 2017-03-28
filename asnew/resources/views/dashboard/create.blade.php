@extends('layouts.master')

@section('content')

<div class="container-fluid bg-gray">
	@if(session('success'))
	<div class="alert alert-success">{{ session('success') }}
	<a href="/" class="btn btn-success pull-right" target="_blank" style="margin-top: -5px;"> Visit Site</a>
	</div>
	@endif
	<div class="row">
		<div class="container shadow-container no-padding">
		<div class="row">
			<div class="col-md-3">
				<div class="sidebar sidebar-list">
						<div class="ui card">
								  <a class="image" href="#" id="bgwhite">
								    <img class="dash-img" src="/img/aqil.jpg">
								  </a>
						  <div class="content">
						    <a class="header" href="#">University of Hyderabad</a>
						    <div class="meta">
						      <a>Last Seen 2 days ago</a>
						    </div>
						  </div>
						</div>
				    <ul class="nav nav-tabs nav-pills nav-stacked" id="svg-icon">
				        <li class="nav active"><a href="#A" data-toggle="tab">
				        <img src="/img/hand-gesture.svg" alt="">
				        Create a post</a>
				        </li>
				        <li class="nav"><a href="#B" data-toggle="tab">
				         <img src="/img/pictures.svg" alt="">
				        Create front banner</a></li>
				        <li class="nav"><a href="#C" data-toggle="tab">
				        <img src="/img/manager.svg" alt="">
				        Creat Valuable leaders</a></li>
				         <li class="nav"><a href="#D" data-toggle="tab">
				        <img src="/img/manager.svg" alt="">
				        Creat Gallery</a></li>
				    </ul>
				</div>
			</div>
			<div class="col-md-9 pl0">
				<!-- Tab panes -->
				<div class="tab-content">

				    <div class="tab-pane fade in active" id="A">
						<h2 class="">Create a post</h2>
				    	<div class="segment">
				    	<form method="POST" action="/posts" enctype="multipart/form-data">
				    		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				    		<div class="form-group">
				    				<input type="text" name="author" class="form-control" placeholder="Author Name">
				    			</div>
				    			<div class="form-group">
				    				<input type="text" name="title" class="form-control" placeholder="Title" required>
				    			</div>
				    			<div class="form-group">
				    				<textarea name="body" id="body" class="form-control" placeholder="Massage" required></textarea>
				    			</div>
				    			<div class="form-group clearfix segment">
				    				<input type="file" name="blog-image" class="pull-left" required>
				    				<button class="btn btn-primary pull-right">Publish</button>
				    			</div>
				    		</form>

				    	<div class="">
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
				    				<div class="panel-heading">
				    					<div class="rmv-blog pull-right">
				    					
					<a href="{{ route('post.delete', $post->id) }} " class="btn btn-danger btn-sm"  title="Alert" data-toggle="popover"
					data-placement="top"><i class="glyphicon glyphicon-trash"></i></a>

				    							<button class="btn btn-sm blue" href="#" class="blue">
				    						<i class="glyphicon glyphicon-pencil"></i></button>
				    						
				    					</div>
				    				<img class="pimg" src="{{ asset($post->image)}}" alt="">
				    				</div>
				    				  <div class="panel-body">
				    					  <div>
				    					 	 	<h4 class="">{{ $post->title }}</h4>
				    					  		<p class="text-muted">{{$post->created_at->toFormattedDateString() }} &nbsp; | &nbsp; Mukhya of Ashraha</p>
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
				    	</div>
				    </div>


				    <div class="tab-pane fade" id="B">
				    <h2 class="">Create front banner and there title</h2>
				    	<div class="segment">
				    		<form method="POST" action="/fronts" enctype="multipart/form-data">
				    			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				    				<div class="form-group">
				    					<textarea name="body" id="body" class="form-control" placeholder="Massage" required></textarea>
				    				</div>
				    				<div class="form-group clearfix segment">
				    					<input type="file" name="front-image" class="pull-left" required>
				    					<button class="btn btn-primary pull-right">Publish</button>
				    				</div>
				    			</form>
				    	</div>
				    	<div class="imdlt">
				    		<div class="row">
				    		@foreach($fronts as $front)
				    		  <div class="col-md-3">
				    		    <a href="{{ route('front.delete', $front->id) }} " class="thumbnail clearfix">
				    		        <button class="badge danger pull-right">X</button>
				    				<img src="{{ asset($front->image)}}" alt="">
				    				<div class="caption">
				    				 {{ $front->body }}
				    					
				    				</div>
				    		    </a>
				    		  
				    		  </div>
				    		@endforeach
				    		</div>
				    			
				    	</div>
				    </div>

			<div class="tab-pane fade" id="C">
				    <h1>Creat Valuable leaders and about him</h1>
				    <div class="segment">
				    	<form method="POST" action="/valuable" enctype="multipart/form-data">
				    		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				    		<div class="form-group">
				    				<input type="text" name="name" class="form-control" placeholder="Name">
				    			</div>
				    			<div class="form-group">
				    				<input type="text" name="number" class="form-control" placeholder="Number or Email" required>
				    			</div>
				    			<div class="form-group">
				    				<textarea name="massage" id="massage" class="form-control" placeholder="Massage" required></textarea>
				    			</div>
				    			<div class="form-group clearfix segment">
				    				<input type="file" name="value-image" class="pull-left" required>
				    				<button class="btn btn-primary pull-right">Publish</button>
				    			</div>
				    		</form>
				    </div>
						
						<div class="imdlt">
				    		<div class="row">
				    		@foreach($valuables as $valuable)
				    		  <div class="col-md-3">
				    		    <a href="{{ route('valuable.delete', $valuable->id) }}" class="thumbnail clearfix text-black">
				    		   {{$valuable->number}}
				    		        <button class="badge danger pull-right">X</button>
				    				<img src="{{ asset($valuable->image)}}" alt="">
				    				<p class="">{{$valuable->massage}}</p>
				    		    </a>
				    		  </div>
				    		@endforeach
				    		</div>
				    			
				    	</div>

				    </div>

				    <div class="tab-pane fade" id="D">
				    	    <h1>Creat Gallery</h1>
				    	    <div class="segment">
				    	    	<form method="POST" action="/gallery" enctype="multipart/form-data">
				    	    		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				    	    	
				    	    			<div class="form-group clearfix segment">
				    	    				<input type="file" name="gallery-image" class="pull-left" required>
				    	    				<button class="btn btn-primary pull-right">Publish</button>
				    	    			</div>
				    	    		</form>
				    	    </div>
				    			
				    			<div class="imdlt">
				    	    		<div class="row">
					    	    		@foreach($galleries as $gallery)
					    	    		  <div class="col-md-3">
					    	    		    <a href="{{ route('gallery.delete', $gallery->id) }}" class="thumbnail clearfix text-black">
					    	    		  
					    	    		        <button class="badge danger pull-right">X</button>
					    	    				<img  src="{{ asset($gallery->image)}}">
					    	    				
					    	    		    </a>
					    	    		  </div>
					    	    		@endforeach
				    	    		</div>
				    	    			
				    	    	</div>

				    	    </div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>

@endsection

