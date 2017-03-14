@extends('layouts.master')

@section('content')

<div class="container-fluid bg-gray">
	@if(session('success'))
	<div class="alert alert-success">{{ session('success') }}</div>
	@endif
	<div class="row">
		<div class="container shadow-container no-padding">
		<div class="row">
			<div class="col-md-3">
				<div class="sidebar sidebar-list">
						<div class="ui card">
								  <a class="image" href="#" id="bgwhite">
								    <img class="dash-img" src="img/shriram-logo.jpg">
								  </a>
						  <div class="content">
						    <a class="header" href="#">University of Hyderabad</a>
						    <div class="meta">
						      <a>Last Seen 2 days ago</a>
						    </div>
						  </div>
						</div>
				    <ul class="nav nav-tabs nav-pills nav-stacked">
				        <li class="nav active"><a href="#A" data-toggle="tab">Create a post</a></li>
				        <li class="nav"><a href="#B" data-toggle="tab">B</a></li>
				        <li class="nav"><a href="#C" data-toggle="tab">C</a></li>
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
				    				<input type="text" name="title" class="form-control" placeholder="Title">
				    			</div>
				    			<div class="form-group">
				    				<textarea name="body" id="body" class="form-control" placeholder="Massage"></textarea>
				    			</div>
				    			<div class="form-group clearfix segment">
				    				<input type="file" name="blog-image" class="pull-left">
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
				    					
				    						<button class="btn btn-danger btn-sm"  title="Alert" data-toggle="popover"
				    						data-placement="top"><i class="glyphicon glyphicon-trash"></i></button>

				    							<button class="btn btn-sm blue" href="#" class="blue">
				    						<i class="glyphicon glyphicon-pencil"></i></button>
				    						
				    					</div>
				    				<img class="width100" src="{{ asset($post->image)}}" alt="">
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


				    <div class="tab-pane fade" id="B">Content inside tab B</div>
				    <div class="tab-pane fade" id="C">Content inside tab C</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>

@endsection