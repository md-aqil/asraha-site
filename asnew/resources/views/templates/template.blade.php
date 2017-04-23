@extends('layouts.master')

@section('content')
<style>
		#blog-landing {
margin-top: 20px;
position: relative;
max-width: 100%;
width: 100%;
}
.white-panel {
	position: absolute;
	padding:10px;
}


</style>

<div class="container-fluid bg-gray">
	<div class="row">
<p>&nbsp</p>
<h1 class="title-header">Its Free for limited time</h1>
<h3 class="text-center font-light">Always do your best. What you plant now, you will harvest later.</h3>
<div class="text-center  hidden-sm hidden-xs"><img src="img/line.png" alt=""></div>
<p>&nbsp</p>

<div class="container">	
<section class="row">
	@foreach($themes as $theme)
	<article class="col-md-6">
		<div class="panel panel-default panel-blog">
		<div class="panel-heading tmlheight">
			<label class="tmp-label">{{ $theme->price }}</label>
			<img class="scrsht" src="{{ asset($theme->thumb)}}" alt="">
		</div>
		  <div class="panel-body">
			  <div>
			 	 	<h4 class=""><a href="#">{{ $theme->name }}</a></h4>
			  		<p class="text-muted">
			  		{{ $theme->discription }}
			  		</p>
			  </div>
			  <hr class="styled">
			<p class="">
				<a href="{{ route('templates.download', ['id' => $theme->id]) }}" class="btn btn-primary btn-green pull-left">Download</a>
				<a href="template1/index-partcle.html" class="btn btn-primary pull-right">View Demo</a>
			</p>
		  </div>
		</div>
	</article>
	@endforeach
</section>


</div>

		
	</div>
</div>

@endsection