<div id="main-wrapper" style="display:none">
<div class="container-fluid res-header-desktop hidden-sm hidden-xs">
		<div class="row">
			<div class="header animated">
				<div class="container">
				<h1 class="pull-left asraha-logo text-shadow"><a href="/"><img src="{{ asset('img/logoio.png') }}" alt=""></a></h1>
					<ul class="nav-ul">
						<li><a href="/">Home</a></li>
						<li><a href="">News feed</a></li>
						<li><a href="/india">About India</a></li>
						<li><a href="">Asraha info</a></li>
						<li><a href="/about">About us</a></li>
						

						 @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
					</ul>



			</div>
				</div>
		</div>
</div><!-- container -->

<div class="container-fluid por">	
	<div class="mobile-inner-header res-header-mobile animated visible-sm visible-xs">
			<h1 class="pull-left m-logo text-shadow" style="margin-top: 3px;margin-left: 10px;">
			<a href="index.php"><img src="img/as-logo-white-s.png" alt=""></a></h1>
    
		<div class="mobile-inner-header-icon mobile-inner-header-icon-out ripple">
				<span></span><span></span>
		</div>
		<div class="mobile-inner-nav">
			<a href="index.php" class="ripple">Home</a>
			<a href="see-all-news.php" class="ripple">News feed</a>
			<a href="schools.php" class="ripple">Education</a>
			<a href="" class="ripple">Asraha info</a>
			<a href="aboutus.php" class="ripple">About us</a>
		</div>
	</div>
</div>
