  <link rel="stylesheet" href="/css/component.css">
<link rel="stylesheet" media="screen and (min-device-width: 800px)" href="/css/paralaxx.css" />
<link rel="stylesheet" href="/css/mobile.css">
<style>

	.container-fluid.res-header-desktop {
		display: none;
	}
	.footer {
		display: none;
	}
</style>

@extends('layouts.master')
@section('content')

<div class="overflow-hidden">
  <section class="background bgGreen noise overlay" style="background: url(img/designer.jpeg); background-size: cover;">
    <div class="content-wrapper">
      <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="hi wow fadeInDown">Hello <br> I am <br> Aqil</h1>
          
        </div>
        <div class="col-md-6">
          <div class="hi2">
              <h1 class="wow fadeInLeft">
                Front-End Developer <br> and Web Designer based <br> in Delhi
              </h1>
            </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <section class="background bgOrange noise">
    <div class="content-wrapper">
        <div class="container">
        <h1 style="margin-top: 50px;">&nbsp;</h1>
          <div class="row">
              <div class="col-md-5">
                <h1 class="bigheading">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                  <span class="fw300">Laborum ut culpa optio officiis quisquam molestias ipsa </span> 
                </h1>
              </div>
              <div class="col-md-7">
                <div class="demo-1">
                  <!-- a low-tech hack for pre-loading the img -->
                  <div class="preload" style="overflow: hidden; width: 0px; height: 0px">
                    <img src="img/site1.jpg" />
                    <img src="img/site2.jpg" />
                    <img src="img/site3.jpg" />
                    <img src="img/site3r.jpg" />
                    <img src="img/site4.jpg" />
                    <img src="img/site4r.jpg" />
                  </div>
                  <!-- Top Navigation -->
                
                  <div class="main clearfix">
                    <div class="md-slider">
                      <div class="md-device-wrapper">
                        <div class="md-device md-device-1">
                          <a href="#"><img src="img/site1.jpg" /></a>
                          <div class="md-border-element"></div>
                          <div class="md-base-element"></div>
                        </div>
                      </div>
                    </div>
                  
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
  </section>



  <section class="background  bgBlue noise">
    <div class="content-wrapper">
     <div class="container por">
       <div class="row">
         <div class="col-md-6">
         <div class="aboutbox">
           <h1 class="abutmetext">About me</h1>
               <h3 class="fw300 abtpra">
                 
                  Computers have been my passion from ever. I could spend hours learning about coding and designing. However, this passion got wings when I grabbed a job as a UI/UX designer and developer. Though money cannot be totally ignored, even if it wasn’t there, I couldn’t be separated from designing and coding. I think I can totally relate to how one feels when one loves what one does :)
                   
                   Also, I love to watch English movies and T.V. series and I have recently developed a love for travel, I am looking forward to exploring a lot of new places in the coming years. 
                </h3>
         </div>
         </div>
           <div class="col-md-6">
           <img class="aqil-img" src="img/style1.png" alt="">
         </div>
       </div>
       
     </div>
    </div>
  </section>


 
  <section class="background bgGray">
    <div class="content-wrapper innerdiv100">
    <h1>img here</h1>
     
    </div>
  </section>
  <section class="background bg-black">
    <div class="content-wrapper">
      <p class="content-title">Etiam consequat lectus.</p>
      <p class="content-subtitle">Nullam tristique urna sed tellus ornare congue. Etiam vitae erat at nibh aliquam dapibus.</p>
    </div>
  </section>
  <section class="background bgLOrange">
    <div class="content-wrapper">
      <p class="content-title">Etiam consequat lectus.</p>
      <p class="content-subtitle">Nullam tristique urna sed tellus ornare congue. Etiam vitae erat at nibh aliquam dapibus.</p>
    </div>
  </section>
  <section class="background bgBlue noise">
    <div class="content-wrapper">
      <div class="container por">
        <div class="row">
          <div class="col-md-4">
            <div class="aboutbox">
              <h1 class="abutmetext">About me</h1>
                  <h3 class="fw300 abtpra">
                    
                     Computers have been my passion from ever. I could spend hours learning about coding and designing. However, this passion got wings when I grabbed a job as a UI/UX designer and developer. Though money cannot be totally ignored, even if it wasn’t there, I couldn’t be separated from designing and coding. I think I can totally relate to how 
                   </h3>
            </div>
          </div>
          <div class="col-md-8">
            <img class="style-5img" src="img/style5.png" class="" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="background bgLGreen">
    <div class="content-wrapper">
      <p class="content-title">Etiam consequat lectus.</p>
      <p class="content-subtitle">Nullam tristique urna sed tellus ornare congue. Etiam vitae erat at nibh aliquam dapibus.</p>
    </div>
  </section>
</div>

@endsection